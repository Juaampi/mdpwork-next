<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subcategory;
use App\Category;
use App\Coment;
use Illuminate\Support\Collection as Collection;
class UserController extends Controller

{
    public function terms(){
        return view("legales.terms");
    }
    public function privacy(){
        return view("legales.privacy");
    }

    public function showlist(){
        $users = User::where('rol', '=', 'profesional')->paginate(10);
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $array = [];
        $i = 0;
        $coments = Coment::all();
       foreach($subcategories as $subcategory){
           $array[$i] = $subcategory->name;
           $i++;
       }
        return view('list', ['subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $users, 'subcategories' => $subcategories, 'coments' => $coments]);
    }

    public function search(Request $request){
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $coments = Coment::all();
        $array = [];
        $i = 0;
        foreach($subcategories as $subcategory){
           $array[$i] = $subcategory->name;
           $i++;
        }

        if(!empty($request['search']) && !empty($request['zone'])){
            $user = User::where('job', 'like', '%' . $request['search'] . '%')->orWhere('zone', 'like', '%'. $request['zone'] . '%')->paginate(10);
                if(count($user) == 0){
                    return redirect()->back()->with('response', 'error');
                }else{
                    return view('list', ['subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                }
        }else if(!empty($request['search']) && empty($request['zone'])){
           $user = User::where('job', 'like', '%' . $request['search'] . '%')->paginate(10);
                if(count($user) == 0){
                    return redirect()->back()->with('response', 'error');
                }else{
                    return view('list', ['subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                }
       }else if(!empty($request['zone']) && empty($request['search'])){
            $user = User::where('zone', 'like', '%' . $request['zone'] . '%')->paginate(10);
                if(count($user) == 0){
                    return redirect()->back()->with('response', 'error');
                }else{
                    return view('list', ['subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                }
       }
       if(empty($request['search']) && empty($request['zone'])){
            return redirect()->back()->with('response', 'error');
       }
    }

    public function showperfil(Request $request){
        $user = User::find($request['user_id']);
        $coments = User::find($request['user_id'])->coments;
        $users = User::all();
        return view('perfil', ['user' => $user, 'coments' => $coments, 'users' => $users]);
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
        if(!empty($request['category_id2'])){
            $user->category = $request['category_id3'];
            $user->save();
        }
        if(!empty($request['category_id3'])){
            $user->category = $request['category_id3'];
            $user->save();
        }
        if(!empty($request['category_id2-non'])){
            $user->category = $request['category_id2-non'];
            $user->save();
        }
        if(!empty($request['category_id3-non'])){
            $user->category = $request['category_id3-non'];
            $user->save();
        }
        if(!empty($request['subcategory_id'])){
            $user->job = $request['subcategory_id'];
            $user->save();
        }
        if(!empty($request['job2'])){
            $user->job2 = $request['job2'];
            $user->save();
        }
        if($request['job2'] == null){
            $user->job2 = null;
            $user->save();
        }
        if(!empty($request['job3'])){
            $user->job3 = $request['job3'];
            $user->save();
        }
        if($request['job3'] == null){
            $user->job3 = null;
            $user->save();
        }
        if(!empty($request['job2-non'])){
            $user->job2 = $request['job2-non'];
            $user->save();
        }
        if(!empty($request['job3-non'])){
            $user->job3 = $request['job3-non'];
            $user->save();
        }
        if(!empty($request['subcategory_id-otro'])){
            $user->job = $request['subcategory_id'];
            $user->save();
        }
        if(!empty($request['job2-otro'])){
            $user->job2 = $request['job2'];
            $user->save();
        }
        if(!empty($request['job2-otro-non'])){
            $user->job2 = $request['job2-otro-non'];
            $user->save();
        }
        if(!empty($request['job3-otro'])){
            $user->job3 = $request['job3'];
            $user->save();
        }
        if(!empty($request['job3-otro-non'])){
            $user->job3 = $request['job3-otro-non'];
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
            $user->experience = $request['experience'];
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
                }else{
                    $user->inhourafterlunes = null;
                    $user->outhourafterlunes = null;
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
                }else{
                    $user->inhouraftermartes = null;
                    $user->outhouraftermartes = null;
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
                }else{
                    $user->inhouraftermiercoles = null;
                    $user->outhouraftermiercoles = null;
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
                }else{
                    $user->inhourafterjueves = null;
                    $user->outhourafterjueves = null;
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
                }else{
                    $user->inhourafterviernes = null;
                    $user->outhourafterviernes = null;
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
                }else{
                    $user->inhouraftersabado = null;
                    $user->outhouraftersabado = null;
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
                }else{
                    $user->inhourafterdomingo = null;
                    $user->outhourafterdomingo = null;
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
        $coments = Coment::all();

        return view('welcome', ['subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $ultimos, 'subcategories' => $subcategories, 'coments' => $coments]);
    }
}
