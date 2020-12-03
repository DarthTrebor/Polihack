<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        $rules = [
            'phone' => ['required', 'min:10', 'max:10'],
            'firstname' => ['min:3', 'required', 'alpha_num'],
            'lastname'  => ['min:3', 'required', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed']
        ];

        $customMessages = [
            'phone.required' => 'Nu ai introdus numarul de telefon',
            'phone.min' => 'Numarul de telefon are mai putin de 10 cifre',
            'phone.max' => 'Numarul de telefon are mai mult de 10 cifre',
            'firstname.required' => 'Nu ai introdus numele de familie!',
            'firstname.min' => 'Numele de familie trebuie sa aiba cel putin 3 caractere!',
            'firstname.alpha_num' => 'Numele de familie trebuie sa contina doar litere',
            'lastname.required' => 'Nu ai introdus prenumele!' ,
            'lastname.min' => 'Prenumele trebuie sa aiba cel putin 3 caractere !',
            'lastname.alpha_num' => 'Prenumele trebuie sa contina doar litere',
            'email.required' => 'Nu ai introdus email-ul !',
            'email.email' => 'Email-ul nu este valid !',
            'email.unique' => 'Adresa de e-mail este deja folosita !',
            'password.required' => 'Nu ai introdus parola !',
            'password.min' => 'Parola trebuie sa aiba cel putin 6 caractere !',
            'password.confirmed' => 'Parolele nu se potrivesc!'
            // 'g-recaptcha-response.recaptcha' => 'Nu ai validat codul reCaptcha',
        ];

        return Validator::make($data, $rules, $customMessages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname'  => $data['lastname'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
