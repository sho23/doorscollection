<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;
use App\SocialAccount;
use Exception;

class SocialController extends Controller
{
    protected $redirectTo = '/home';

    public function getTwitterAuth()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function getTwitterAuthCallback()
    {
        try {
            $twitterUser = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('login')->with('faild', "認証に失敗しました。");
        }

        $user = $this->createOrGetUser($twitterUser, 'twitter');
        if (empty($user)) {
            return redirect()->route('login')->with('faild', "認証に失敗しました。すでに登録されているメールアドレスです。");
        }
        Auth::login($user, true);

        return redirect($this->redirectTo);
    }


    public function getFacebookAuth()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function getFacebookAuthCallback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->stateless()->user();
        } catch (Exception $e) {
            return redirect('login/facebook');
        }

        $user = $this->createOrGetUser($facebookUser, 'facebook');
        Auth::login($user, true);

        return redirect($this->redirectTo);
    }

    private function createOrGetUser($providerUser, $provider)
    {
        $account = SocialAccount::firstOrCreate([
            'provider_user_id' => $providerUser->getId(),
            'provider'         => $provider,
        ]);

        if (User::where('email', $providerUser->getEmail())->exists()) {
            return;
        }

        if (empty($account->user))
        {
            $user = User::create([
                'name'   => $providerUser->getName(),
                'email'  => $providerUser->getEmail(),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'twitter_name' => $providerUser->getNickname(),
                // 'avatar' => $providerUser->getAvatar(),
            ]);
            $account->user()->associate($user);
        }

        $account->provider_access_token = $providerUser->token;
        $account->save();

        return $account->user;
    }
}