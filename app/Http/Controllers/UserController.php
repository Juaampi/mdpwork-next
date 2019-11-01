<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function edit(Request $request){

        $user = User::find($request['id']);
        if(!empty($request['name'])){
            $user->name = $request['name'];
            $user->save();
        }
        if(!empty($request['phone'])){
            $user->phone = $request['phone'];
            $user->save();
        }
        if(!empty($request['category_id'])){
            $user->category = $request['category_id'];
            $user->save();
        }
        if(!empty($request['subcategory_id'])){
            $user->job = $request['subcategory_id'];
            $user->save();
        }
        if(!empty($request['whatsapp'])){
            $user->whatsapp = $request['whatsapp'];
            $user->save();
        }
        if(!empty($request['email'])){
            $user->email = $request['email'];
            $user->save();
        }
        if(!empty($request['website'])){
            $user->website = $request['website'];
            $user->save();
        }
        if(!empty($request['experience'])){
            $user->website = $request['experience'];
            $user->save();
        }
        if(!empty($request['age'])){
            $user->age = $request['age'];
            $user->save();
        }
        if(!empty($request['level'])){
            $user->level = $request['level'];
            $user->save();
        }
        if(!empty($request['city'])){
            $user->city = $request['city'];
            $user->save();
        }
        if(!empty($request['zone'])){
            $user->zone = $request['zone'];
            $user->save();
        }
        if(!empty($request['description'])){
            $user->description = $request['description'];
            $user->save();
        }
        if(($request['isEfective'])){
            $user->isEfective = true;
            $user->save();
        }else{
            $user->isEfective = false;
            $user->save();
        }
        if(($request['isVisa'])){
            $user->isVisa = true;
            $user->save();
        }else{
            $user->isVisa = false;
            $user->save();
        }
        if(($request['isMercadoPago'])){
            $user->isMercadoPago = true;
            $user->save();
        }else{
            $user->isMercadoPago = false;
            $user->save();
        }
        if(($request['isMasterCard'])){
            $user->isMasterCard = true;
            $user->save();
        }else{
            $user->isMasterCard = false;
            $user->save();
        }
        if(!empty($request['facebook'])){
            $user->facebook = $request['facebook'];
            $user->save();
        }
        if(!empty($request['twitter'])){
            $user->twitter = $request['twitter'];
            $user->save();
        }
        if(!empty($request['linkedin'])){
            $user->linkedin = $request['linkedin'];
            $user->save();
        }
        if(!empty($request['Instagram'])){
            $user->Instagram = $request['Instagram'];
            $user->save();
        }
        return redirect()->back()->with('response','success');
    }
}
