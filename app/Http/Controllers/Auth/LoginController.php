<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from service provider.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($service)
    {
        $socialuser = Socialite::driver($service)->user();
        // Auth::login($user);
        // $user = $service->createOrGetUser(Socialite::driver($service)->user());
        // dd($user);
        $findUser = User::where('email', $socialuser->email)->first();
        if ($findUser) {
        Auth::login($findUser);
        $data = [
            'user' => $findUser,
        ];
        return view('/home', $data);
        } else {
        $user = new User;
        $user->name = $socialuser->name;
        $user->email = $socialuser->email;
        $user->password = bcrypt(123456);
        $user->save();

        Auth::login($socialuser->email);
        $data = [
            'user' => $socialuser,
        ];
        return view('/home', $data);
    }
    }
}
