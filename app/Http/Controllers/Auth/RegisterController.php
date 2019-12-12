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

        if(empty($data['inhourafterlunes']) || empty($data['outhourafterlunes'])){
            $data['inhourafterlunes'] = null;
            $data['outhourafterlunes'] = null;
        }
        if(empty($data['inhouraftermartes']) || empty($data['outhouraftermartes'])){
            $data['inhouraftermartes'] = null;
            $data['outhouraftermartes'] = null;
        }
        if(empty($data['inhouraftermiercoles']) || empty($data['outhouraftermiercoles'])){
            $data['inhouraftermiercoles'] = null;
            $data['outhouraftermiercoles'] = null;
        }
        if(empty($data['inhourafterjueves']) || empty($data['outhourafterjueves'])){
            $data['inhourafterjueves'] = null;
            $data['outhourafterjueves'] = null;
        }
        if(empty($data['inhourafterviernes']) || empty($data['outhourafterviernes'])){
            $data['inhourafterviernes'] = null;
            $data['outhourafterviernes'] = null;
        }
        if(empty($data['inhouraftersabado']) || empty($data['outhouraftersabado'])){
            $data['inhouraftersabado'] = null;
            $data['outhouraftersabado'] = null;
        }
        if(empty($data['inhourafterdomingo']) || empty($data['outhourafterdomingo'])){
            $data['inhourafterdomingo'] = null;
            $data['outhourafterdomingo'] = null;
        }if(empty($data['subcategory_id-otro'])){
            $data['subcategory_id'] = $data['subcategory_id'];
        }else{
            $data['subcategory_id'] = $data['subcategory_id-otro'];
        }
        if(empty($data['job2-otro']) && !empty($data['job2'])){
            $data['job2'] = $data['job2'];
        }else{
            $data['job2'] = $data['job2-otro'];
        }
        if(empty($data['job3-otro']) && !empty($data['job3'])){
            $data['job3'] = $data['job3'];
        }else{
            $data['job3'] = $data['job3-otro'];
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'category' => $data['category_id'],
            'category2' => $data['category_id2'],
            'category3' => $data['category_id3'],
            'job' => $data['subcategory_id'],
            'job2' => $data['job2'],
            'job3' => $data['job3'],
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
            'inhourafterlunes' => $data['inhourafterlunes'],
            'outhourafterlunes' => $data['outhourafterlunes'],
            'inhourmartes' => $data['inhourmartes'],
            'outhourmartes' => $data['outhourmartes'],
            'inhouraftermartes' => $data['inhouraftermartes'],
            'outhouraftermartes' => $data['outhouraftermartes'],
            'inhourmiercoles' => $data['inhourmiercoles'],
            'outhourmiercoles' => $data['outhourmiercoles'],
            'inhouraftermiercoles' => $data['inhouraftermiercoles'],
            'outhouraftermiercoles' => $data['outhouraftermiercoles'],
            'inhourjueves' => $data['inhourjueves'],
            'outhourjueves' => $data['outhourjueves'],
            'inhourafterjueves' => $data['inhourafterjueves'],
            'outhourafterjueves' => $data['outhourafterjueves'],
            'inhourviernes' => $data['inhourviernes'],
            'outhourviernes' => $data['outhourviernes'],
            'inhourafterviernes' => $data['inhourafterviernes'],
            'outhourafterviernes' => $data['outhourafterviernes'],
            'inhoursabado' => $data['inhoursabado'],
            'outhoursabado' => $data['outhoursabado'],
            'inhouraftersabado' => $data['inhouraftersabado'],
            'outhouraftersabado' => $data['outhouraftersabado'],
            'inhourdomingo' => $data['inhourdomingo'],
            'outhourdomingo' => $data['outhourdomingo'],
            'inhourafterdomingo' => $data['inhourafterdomingo'],
            'outhourafterdomingo' => $data['outhourafterdomingo']
        ]);
        }
    }
}
