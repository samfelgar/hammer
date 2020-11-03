<?php

namespace App\Http\Controllers\Auth;


use App\Exceptions\ProfessionalNotFoundException;
use App\Professional;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class LoginProfessionalsController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('auth.loginProfessionals');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('professional')->attempt($credentials)) {
            return redirect()->intended(route('professionals.dashboard', [Auth::guard('professional')->user()]));
        }
        return back()
            ->withInput()
            ->withErrors(['email' => 'Não foi possivel encontrar o profissional']);
    }
}
