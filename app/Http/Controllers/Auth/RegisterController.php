<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
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
    protected $redirectTo = '/panel';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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

        if($data['rol'] == 'usuario'){
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'img' => 'logo.png',
                'rol' => $data['rol']
            ]);
        }else{

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'category' => $data['category_id'],
            'job' => $data['subcategory_id'],
            'whatsapp' => $data['whatsapp'],
            'phone' => $data['phone'],
            'website' => $data['website'],
            'experience' => $data['experience'],
            'age' => $data['age'],
            'level' => $data['level'],
            'city' => $data['city'],
            'zone' => $data['zone'],
            'description' => $data['description'],
            'isEfective' => true,
            'isVisa' => false,
            'isMercadoPago' => false,
            'isMasterCard' => false,
            'facebook' => $data['facebook'],
            'twitter' => $data['twitter'],
            'linkedin' => $data['linkedin'],
            'instagram' => $data['instagram'],
            'img' => 'logo.png',
            'rol' => $data['rol'],
            'inhourlunes' => $data['inhourlunes'],
            'outhourlunes' => $data['outhourlunes'],
            'inhourmartes' => $data['inhourmartes'],
            'outhourmartes' => $data['outhourmartes'],
            'inhourmiercoles' => $data['inhourmiercoles'],
            'outhourmiercoles' => $data['outhourmiercoles'],
            'inhourjueves' => $data['inhourjueves'],
            'outhourjueves' => $data['outhourjueves'],
            'inhourviernes' => $data['inhourviernes'],
            'outhourviernes' => $data['outhourviernes'],
            'inhoursabado' => $data['inhoursabado'],
            'outhoursabado' => $data['outhoursabado'],
            'inhourdomingo' => $data['inhourdomingo'],
            'outhourdomingo' => $data['outhourdomingo']
        ]);
        }
    }
}
