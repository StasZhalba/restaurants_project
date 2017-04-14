<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/admin_home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    /**
     * Show the application's login form
     *
     * @return \Illuminate\Http\Response
     */
	public function showLoginForm() {
		return view('admin.login');
	}

	public function login(Request $request){
		//Validate the form data
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required|min:6'
		]);
		//Attempt to log the user in-
		if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password ], $request->remember))
		{
			//if successful, then redirect to their intended location
			return redirect()->intended(route('home'));
		}

		//if unsuccessful, then redirect to the login with the form data
		return redirect()->back()->withInput($request->only('email', 'remember'));
	}

}
