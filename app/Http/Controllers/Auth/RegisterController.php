<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use App\User;
use Illuminate\Support\Facades\Mail;
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
        }
    if($data['rol'] == 'aspirante'){
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'img' => 'logo.png',
                'rol' => $data['rol']
            ]);
        }
    if($data['rol'] == 'profesional'){

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

        if(isset($data['lunesaviernescheckbox'])){
            $data['inhourlunes'] = $data['inhourlunesaviernes'];
            $data['outhourlunes'] = $data['outhourlunesaviernes'];
            $data['inhourmartes'] = $data['inhourlunesaviernes'];
            $data['outhourmartes'] = $data['outhourlunesaviernes'];
            $data['inhourmiercoles'] = $data['inhourlunesaviernes'];
            $data['outhourmiercoles'] = $data['outhourlunesaviernes'];
            $data['inhourjueves'] = $data['inhourlunesaviernes'];
            $data['outhourjueves'] = $data['outhourlunesaviernes'];
            $data['inhourviernes'] = $data['inhourlunesaviernes'];
            $data['outhourviernes'] = $data['outhourlunesaviernes'];
            $data['inhoursabado'] = null;
            $data['outhoursabado'] = null;
            $data['inhourdomingo'] = null;
            $data['outhourdomingo'] = null;

            if(empty($data['inhourafterlunesaviernes']) || empty($data['outhourafterlunesaviernes'])){
                $data['inhourafterlunes'] = null;
                $data['outhourafterlunes'] = null;
                $data['inhouraftermartes'] = null;
                $data['outhouraftermartes'] = null;
                $data['inhouraftermiercoles'] = null;
                $data['outhouraftermiercoles'] = null;
                $data['inhourafterjueves'] = null;
                $data['outhourafterjueves'] = null;
                $data['inhourafterviernes'] = null;
                $data['outhourafterviernes'] = null;
                $data['inhouraftersabado'] = null;
                $data['outhouraftersabado'] = null;
                $data['inhourafterdomingo'] = null;
                $data['outhourafterdomingo'] = null;
            }
        }

        if(isset($data['lunesasabadocheckbox'])){
            $data['inhourlunes'] = $data['inhourlunesasabado'];
            $data['outhourlunes'] = $data['outhourlunesasabado'];
            $data['inhourmartes'] = $data['inhourlunesasabado'];
            $data['outhourmartes'] = $data['outhourlunesasabado'];
            $data['inhourmiercoles'] = $data['inhourlunesasabado'];
            $data['outhourmiercoles'] = $data['outhourlunesasabado'];
            $data['inhourjueves'] = $data['inhourlunesasabado'];
            $data['outhourjueves'] = $data['outhourlunesasabado'];
            $data['inhourviernes'] = $data['inhourlunesasabado'];
            $data['outhourviernes'] = $data['outhourlunesasabado'];
            $data['inhoursabado'] = $data['inhourlunesasabado'];
            $data['outhoursabado'] = $data['outhourlunesasabado'];
            $data['inhourdomingo'] = null;
            $data['outhourdomingo'] = null;

            if(empty($data['inhourafterlunesasabado']) || empty($data['outhourafterlunesasabado'])){
                $data['inhourafterlunes'] = null;
                $data['outhourafterlunes'] = null;
                $data['inhouraftermartes'] = null;
                $data['outhouraftermartes'] = null;
                $data['inhouraftermiercoles'] = null;
                $data['outhouraftermiercoles'] = null;
                $data['inhourafterjueves'] = null;
                $data['outhourafterjueves'] = null;
                $data['inhourafterviernes'] = null;
                $data['outhourafterviernes'] = null;
                $data['inhouraftersabado'] = null;
                $data['outhouraftersabado'] = null;
                $data['inhourafterdomingo'] = null;
                $data['outhourafterdomingo'] = null;
            }
        }

        if(isset($data['lunesadomingocheckbox'])){
            $data['inhourlunes'] = $data['inhourlunesadomingo'];
            $data['outhourlunes'] = $data['outhourlunesadomingo'];
            $data['inhourmartes'] = $data['inhourlunesadomingo'];
            $data['outhourmartes'] = $data['outhourlunesadomingo'];
            $data['inhourmiercoles'] = $data['inhourlunesadomingo'];
            $data['outhourmiercoles'] = $data['outhourlunesadomingo'];
            $data['inhourjueves'] = $data['inhourlunesadomingo'];
            $data['outhourjueves'] = $data['outhourlunesadomingo'];
            $data['inhourviernes'] = $data['inhourlunesadomingo'];
            $data['outhourviernes'] = $data['outhourlunesadomingo'];
            $data['inhoursabado'] = $data['inhourlunesadomingo'];
            $data['outhoursabado'] = $data['outhourlunesadomingo'];
            $data['inhourdomingo'] = $data['inhourlunesadomingo'];
            $data['outhourdomingo'] = $data['outhourlunesadomingo'];

            if(empty($data['inhourafterlunesadomingo']) || empty($data['outhourafterlunesadomingo'])){
                $data['inhourafterlunes'] = null;
                $data['outhourafterlunes'] = null;
                $data['inhouraftermartes'] = null;
                $data['outhouraftermartes'] = null;
                $data['inhouraftermiercoles'] = null;
                $data['outhouraftermiercoles'] = null;
                $data['inhourafterjueves'] = null;
                $data['outhourafterjueves'] = null;
                $data['inhourafterviernes'] = null;
                $data['outhourafterviernes'] = null;
                $data['inhouraftersabado'] = null;
                $data['outhouraftersabado'] = null;
                $data['inhourafterdomingo'] = null;
                $data['outhourafterdomingo'] = null;
            }
        }
        if(isset($data['presupuesto'])){
            $data['presupuesto'] = true;
        }else{
            $data['presupuesto'] = false;
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
            'whatsapp' => '+549'.$data['whatsapp'],
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
            'presupuesto' => $data['presupuesto'],
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
