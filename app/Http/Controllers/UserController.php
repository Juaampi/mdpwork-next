<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subcategory;
use App\Category;

class UserController extends Controller
{

    public function showlist(){
        $users = User::where('rol', '=', 'profesional')->get();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $array = [];
        $i = 0;
       foreach($subcategories as $subcategory){
           $array[$i] = $subcategory->name;
           $i++;
       }
        $categories = Category::all();
        return view('list', ['subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $users, 'subcategories' => $subcategories]);
    }

    public function search(Request $request){
        $busqueda = $request['search'];
        $subcategories = Subcategory::where('name', 'like', '%' . $busqueda . '%')->get();
        foreach($subcategories as $subcategory){
            $array = [];
            $user = User::where('job','=', $subcategory->id);
            array_push($array, $user);
        }
        return $array;
    }

    public function updateImg(Request $request){
        $user = User::find($request['user_id']);
        if($request->hasFile('img-perfil')){
            $file = $request->file('img-perfil');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img-perfil/', $name);
            $user->img = $name;
            $user->save();
            return redirect()->back()->with('response','success');
        }else{
            return redirect()->back()->with('response', 'error');
        }

    }


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


        if($request['islunes']){
            if(!empty($request['inhourlunes']) && !empty($request['outhourlunes'])){
                $user->inhourlunes = $request['inhourlunes'];
                $user->outhourlunes = $request['outhourlunes'];
                if(!empty($request['inhourafterlunes']) && !empty($request['outhourafterlunes'])){
                    $user->inhourafterlunes = $request['inhourafterlunes'];
                    $user->outhourafterlunes = $request['outhourafterlunes'];
                }
                $user->save();
            }else{
                return redirect()->back()->with('lunes', 'error');
            }
        }else{
            $user->inhourlunes = null;
            $user->outhourlunes = null;
            $user->inhourafterlunes = null;
            $user->outhourafterlunes = null;
            $user->save();
        }
        if($request['ismartes']){
            if(!empty($request['inhourmartes']) && !empty($request['outhourmartes'])){
                $user->inhourmartes = $request['inhourmartes'];
                $user->outhourmartes = $request['outhourmartes'];
                if(!empty($request['inhouraftermartes']) && !empty($request['outhouraftermartes'])){
                    $user->inhouraftermartes = $request['inhouraftermartes'];
                    $user->outhouraftermartes = $request['outhouraftermartes'];
                }
                $user->save();
            }else{
                return redirect()->back()->with('martes', 'error');
            }
        }else{
            $user->inhourmartes = null;
            $user->outhourmartes = null;
            $user->inhouraftermartes = null;
            $user->outhouraftermartes = null;
            $user->save();
        }


        if($request['ismiercoles']){
            if(!empty($request['inhourmiercoles']) && !empty($request['outhourmiercoles'])){
                $user->inhourmiercoles = $request['inhourmiercoles'];
                $user->outhourmiercoles = $request['outhourmiercoles'];
                if(!empty($request['inhouraftermiercoles']) && !empty($request['outhouraftermiercoles'])){
                    $user->inhouraftermiercoles = $request['inhouraftermiercoles'];
                    $user->outhouraftermiercoles = $request['outhouraftermiercoles'];
                }
                $user->save();
            }else{
                return redirect()->back()->with('miercoles', 'error');
            }
        }else{
            $user->inhourmiercoles = null;
            $user->outhourmiercoles = null;
            $user->inhouraftermiercoles = null;
            $user->outhouraftermiercoles = null;
            $user->save();
        }



        if($request['isjueves']){
            if(!empty($request['inhourjueves']) && !empty($request['outhourjueves'])){
                $user->inhourjueves = $request['inhourjueves'];
                $user->outhourjueves = $request['outhourjueves'];
                if(!empty($request['inhourafterjueves']) && !empty($request['outhourafterjueves'])){
                    $user->inhourafterjueves = $request['inhourafterjueves'];
                    $user->outhourafterjueves = $request['outhourafterjueves'];
                }
                $user->save();
            }else{
                return redirect()->back()->with('jueves', 'error');
            }
        }else{
            $user->inhourjueves = null;
            $user->outhourjueves = null;
            $user->inhourafterjueves = null;
            $user->outhourafterjueves = null;
            $user->save();
        }




        if($request['isviernes']){
            if(!empty($request['inhourviernes']) && !empty($request['outhourviernes'])){
                $user->inhourviernes = $request['inhourviernes'];
                $user->outhourviernes = $request['outhourviernes'];
                if(!empty($request['inhourafterviernes']) && !empty($request['outhourafterviernes'])){
                    $user->inhourafterviernes = $request['inhourafterviernes'];
                    $user->outhourafterviernes = $request['outhourafterviernes'];
                }
                $user->save();
            }else{
                return redirect()->back()->with('viernes', 'error');
            }
        }else{
            $user->inhourviernes = null;
            $user->outhourviernes = null;
            $user->inhourafterviernes = null;
            $user->outhourafterviernes = null;
            $user->save();
        }



        if($request['issabado']){
            if(!empty($request['inhoursabado']) && !empty($request['outhoursabado'])){
                $user->inhoursabado = $request['inhoursabado'];
                $user->outhoursabado = $request['outhoursabado'];
                if(!empty($request['inhouraftersabado']) && !empty($request['outhouraftersabado'])){
                    $user->inhouraftersabado = $request['inhouraftersabado'];
                    $user->outhouraftersabado = $request['outhouraftersabado'];
                }
                $user->save();
            }else{
                return redirect()->back()->with('sabado', 'error');
            }
        }else{
            $user->inhoursabado = null;
            $user->outhoursabado = null;
            $user->inhouraftersabado = null;
            $user->outhouraftersabado = null;
            $user->save();
        }



        if($request['isdomingo']){
            if(!empty($request['inhourdomingo']) && !empty($request['outhourdomingo'])){
                $user->inhourdomingo = $request['inhourdomingo'];
                $user->outhourdomingo = $request['outhourdomingo'];
                if(!empty($request['inhourafterdomingo']) && !empty($request['outhourafterdomingo'])){
                    $user->inhourafterdomingo = $request['inhourafterdomingo'];
                    $user->outhourafterdomingo = $request['outhourafterdomingo'];
                }
                $user->save();
            }else{
                return redirect()->back()->with('domingo', 'error');
            }
        }else{
            $user->inhourdomingo = null;
            $user->outhourdomingo = null;
            $user->inhourafterdomingo = null;
            $user->outhourafterdomingo = null;
            $user->save();
        }
       return redirect()->back()->with('response','success');
    }


    public function welcome(){
        $subcategories = Subcategory::all();
        $array = [];
        $i = 0;
       foreach($subcategories as $subcategory){
           $array[$i] = $subcategory->name;
           $i++;
       }
        $categories = Category::all();
        $ultimos = User::orderBy('created_at', 'desc')->take(10)->get();

        return view('welcome', ['subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $ultimos, 'subcategories' => $subcategories]);
    }
}
