<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Http\SocialAccountService;

// Exceptions
use GuzzleHttp\Exception\ClientException;
use Laravel\Socialite\Two\InvalidStateException;
use League\OAuth1\Client\Credentials\CredentialsException;

class TwitterController extends Controller
{
    /**
     * Redirect the user to the Service Provider (Social Login) authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from Service Provider (Social Login).
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('twitter')->user();
        } catch (\Exception $e) {
            //ToDo
            dd($e);
        }
        $accountService = new SocialAccountService();
        $authUser = $accountService->findOrCreate($user, 'twitter');

        auth()->login($authUser, true);

        $returnPath = session('url.intended', '/admin');
        return redirect()->to($returnPath);
    }
}