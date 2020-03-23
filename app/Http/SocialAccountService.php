<?php

namespace App\Http;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\Models\Auth\LinkedSocialAccount;
use App\Models\Auth\User;

class SocialAccountService
{
    public function findOrCreate(ProviderUser $providerUser, $provider)
    {
        //Check if user is already registered
        $account = LinkedSocialAccount::where('provider_name', $provider)
                   ->where('provider_id', $providerUser->getId())
                   ->first();

        //if user account already exist, return user
        if ($account) {
            return $account->user;
        } 

        //if user not registered, register and return user
        else {
            //Check if user with matching email exist
            $user = User::where('email', $providerUser->getEmail())->first();

            //if no user exist with matching email, create new user
            if (! $user) {
                $user = User::create([  
                    'email' => $providerUser->getEmail(),
                    'name'  => $providerUser->getName(),
                    'email_verified_at' => now()->toDateTimeString(),
                ]);
            }

            //save avatar
            $user->addMediaFromUrl($providerUser->getAvatar())
                    ->withCustomProperties(['provider' => $provider])
                    ->toMediaCollection('social_pic');


            //if user's email is not verified yet, mark it verified
            if($user->email_verified_at == null)
            {
                $user->email_verified_at = now()->toDateTimeString();
                $user->save();
            }

            $user->assignRole('newuser');

            //add social media account to user account
            $user->accounts()->create([
                'provider_id'   => $providerUser->getId(),
                'provider_name' => $provider,
            ]);

            return $user;
        }
    }
}