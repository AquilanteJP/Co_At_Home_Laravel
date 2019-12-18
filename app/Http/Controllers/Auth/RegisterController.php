<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
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
            'nombres' => ['required', 'string', 'max:45'],
            'apellidos' => ['required','string','max:45'],
            'email' => ['required', 'string', 'email', 'max:45', 'unique:users,email'],
            'birthdate' => ['required'],
            'genero' => ['required'],
            'tipoRegistro' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'foto_usuario' => ['image']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

      if (isset($data['foto_usuario'])) {
        $request = request();
        $imagen = $request->file('foto_usuario');
        $nombreArchivo = uniqid($data['email'].'-'). '.' . $imagen->extension();
        $imagen->storePubliclyAs('public/avatars',$nombreArchivo);
        return User::create([
            'nombres' => $data['nombres'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'birthdate' => $data['birthdate'],
            'genero' => $data['genero'],
            'tipo_registro' => $data['tipoRegistro'],
            'password' => Hash::make($data['password']),
            'foto_usuario' => $nombreArchivo
        ]);
      } else {

        return User::create([
            'nombres' => $data['nombres'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'birthdate' => $data['birthdate'],
            'genero' => $data['genero'],
            'tipo_registro' => $data['tipoRegistro'],
            'password' => Hash::make($data['password']),
            'foto_usuario' => "generic.jpg"
        ]);
    }
}
}
