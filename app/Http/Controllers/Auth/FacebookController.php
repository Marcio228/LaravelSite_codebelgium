<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Http\SocialAccountService;
use Auth;

// Exceptions
use GuzzleHttp\Exception\ClientException;
use Laravel\Socialite\Two\InvalidStateException;
use League\OAuth1\Client\Credentials\CredentialsException;

class FacebookController extends Controller
{
    /**
     * Redirect the user to the Service Provider (Social Login) authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Service Provider (Social Login).
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        }
        catch(InvalidStateException $ise)
        {
            try{
                $user = Socialite::driver('facebook')->stateless()->user();
            }
            catch (ClientException $ce)
            {
                $errorCode = $ce->getCode();

                flash(trans('auth.failed', ['code' => '400']))->error();
                return redirect()->to('/login#');
            }
        } 
        catch (ClientException $ce)
        {
            flash(trans('auth.failed', ['code' => '401']))->error();
            return redirect()->to('/login#');
        }
        catch (CredentialsException $e) {
            flash(trans('auth.failed', ['code' => '402']))->error();
            return redirect()->to('/login#');
            //return $this->redirectToProvider('facebook');
        }
        catch (\Exception $e) {
            //ToDo
            flash(trans('auth.failed', ['code' => '403']))->error();
            return redirect()->to('/login#');
        }
        
        $accountService = new SocialAccountService();
        $authUser = $accountService->findOrCreate($user, 'facebook');

        // Auth::guard('user_guard')->login($authUser, true);

        Auth()->login($authUser, true);

        $returnPath = session('url.intended', '/admin');
        return redirect()->to($returnPath);
    }
}