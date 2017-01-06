<?php

namespace clinica\Http\Controllers\Auth;

use clinica\User;
use Validator;
use clinica\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use clinica\roluser;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */


    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [

            'email' => 'required|email',
            'password' => 'required',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $perm=roluser::where('Nombre','Invitado')->first();
        if($perm)
          $permi=$perm->idrol;

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'idrol' => $permi,

        ]);
    }

    protected function authenticated($request, $user)
    {
        if($user->idrol === 1) {
            return redirect()->intended('/Admin');
        }

        if($user->idrol === 2) {
            return redirect()->intended('/Docente');
        }

        if($user->idrol === 3) {
            return redirect()->intended('/Alumno');
        }

        if($user->idrol === 4) {
            return redirect()->intended('/Home');
        }

    }


}
