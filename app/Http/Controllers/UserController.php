<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\User;
use App\Subcategory;
use App\Category;
use App\Coment;
use App\View;
use App\Search;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as Collection;
use PhpParser\Node\Expr\AssignOp\Concat;

class UserController extends Controller

{

    public function opciones(){
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view("auth.options", ['categories' => $categories, 'subcategories' => $subcategories]);
    }
    public function terms(){
        return view("legales.terms");
    }
    public function privacy(){
        return view("legales.privacy");
    }

    public function showlist(){

        $masvistos = DB::table('views')->selectRaw("users.id, users.name, users.img, users.job,  COUNT('views.*') as views")->join('users', 'users.id', '=', 'views.user_id')->groupBy('users.name')->orderBy('views', 'desc')->take(1)->get();
        $mascomentados = DB::table('coments')->selectRaw("users.id, users.name, users.img, users.job,  COUNT('coments.*') as coments")->join('users', 'users.id', '=', 'coments.user_id')->groupBy('users.name')->orderBy('coments', 'desc')->take(1)->get();
        $users = User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->paginate(80);
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $coments = Coment::all();
        $array = [];
        $cantidades = [];
        $relacionadas = '';
        foreach($subcategories as $subcategory){
            $cuenta = User::where('job', '=', $subcategory->name)->count();
            array_add($subcategory, 'cantidad', $cuenta);
        }
        $o = 0;
        for($u = 0; $u<count($users); $u++){
            $bandera = 0;
            for($i = 0; $i<count($subcategories); $i++)
            {
                if($users[$u]->job == $subcategories[$i]->name){
                    $bandera = 1;
                }
            }
            if($bandera == 0){
                $array[$o] = $users[$u]->job;
                $o++;
            }
        }
       foreach($subcategories as $subcategory){
           $array[$o] = $subcategory->name;
           $o++;
       }
       $u = 0;
       foreach($subcategories as $subcategory){
        $cantidades[$u] = $subcategory->cantidad;
        $u++;
    }

        return view('list', ['relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos' => $masvistos, 'cantidadesarray' => $cantidades, 'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $users, 'subcategories' => $subcategories, 'coments' => $coments]);
    }

    public function search(Request $request){
        $masvistos = DB::table('views')->selectRaw("users.id, users.name, users.img, users.job,  COUNT('views.*') as views")->join('users', 'users.id', '=', 'views.user_id')->groupBy('users.name')->orderBy('views', 'desc')->take(1)->get();
        $mascomentados = DB::table('coments')->selectRaw("users.id, users.name, users.img, users.job,  COUNT('coments.*') as coments")->join('users', 'users.id', '=', 'coments.user_id')->groupBy('users.name')->orderBy('coments', 'desc')->take(1)->get();
        $categories = Category::all();
        $users = User::all();
        $subcategories = Subcategory::all();
        $coments = Coment::all();
        $relacionadas = '';
        if(!empty($request['search'])){
            $busqueda = new Search;
            $busqueda->ip = $request->ip();
            $busqueda->search = $request['search'];
            $busqueda->save();
            $cadena =str_replace(' ', '', $request['search']);
            $relacionadas2 = Search::where('search', 'like', $cadena . '%')->orWhere('search', 'like', '%' . $cadena)->take(5)->get();
            $relacionadas = $relacionadas2->unique('search');
        }
        $array = [];
        $cantidades = [];
        foreach($subcategories as $subcategory){
            $cuenta = User::where('job', '=', $subcategory->name)->count();
            array_add($subcategory, 'cantidad', $cuenta);
        }
        $o = 0;
        for($u = 0; $u<count($users); $u++){
            $bandera = 0;
            for($i = 0; $i<count($subcategories); $i++)
            {
                if($users[$u]->job == $subcategories[$i]->name){
                    $bandera = 1;
                }
            }
            if($bandera == 0){
                $array[$o] = $users[$u]->job;
                $o++;
            }
        }
       foreach($subcategories as $subcategory){
           $array[$o] = $subcategory->name;
           $o++;
       }
       $u = 0;
       foreach($subcategories as $subcategory){
        $cantidades[$u] = $subcategory->cantidad;
        $u++;
        }

        if(!empty($request['search']) && !empty($request['zone'])){
            $user = User::where('job', 'like', '%' . $request['search'] . '%')->where('zone', 'like', '%'. $request['zone'] . '%')->paginate(80);
                if(!$user){
                    $user =  User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->paginate(80);
                    return view('list', ['zone' => $request['zone'], 'busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades, 'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments])->with('empty', 'error');
                }else{
                 return view('list', ['zone' => $request['zone'], 'busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                }
        }else if(!empty($request['search']) && empty($request['zone'])){
           $user = User::where('job', 'like', '%' . $request['search'] . '%')->paginate(80);
                if(count($user) == 0){
                    $user =  User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->paginate(80);
                    return view('list', ['busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments])->with('empty', 'error');
                }else{
                    return view('list', ['busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                }
       }else if(!empty($request['zone']) && empty($request['search'])){
            $user = User::where('zone', 'like', '%' . $request['zone'] . '%')->paginate(80);
                if(count($user) == 0){
                    $user =  User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->get();
                    return view('list', ['zone' => $request['zone'],'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments])->with('empty', 'error');
                }else{
                    return view('list', ['zone' => $request['zone'],'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                }
       }
       if(!empty($request['category'])){
        $categoria = Category::where('name', 'like', '%' . $request['category'] . '%')->firstOrFail();
        $user = User::Where('category', '=', $categoria->id)->paginate(80);
        return view('list', ['searchcategory' => $request['category'], 'zone'=> $request['zone'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
       }
       //if(empty($request['search']) && empty($request['zone'])){
         //   return redirect()->back()->with('response', 'error');
       //}
    }

    public function showperfil(Request $request){

        $user = User::find($request['user_id']);
        $coments = User::find($request['user_id'])->coments;
        $users = User::all();
        $clientIP = request()->ip();
        $views = $user->views()->get();
        $visto = false;
        foreach ($views as $view) {
            if($view->ip == $clientIP){
                $visto = true;
            }
        }
        if(!$visto){
            $view = new View;
            $view->ip = $clientIP;
            $view->user_id = $user->id;
            $view->save();
        }
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

    public function getIp(){
         foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){ if (array_key_exists($key, $_SERVER) === true){ foreach (explode(',', $_SERVER[$key]) as $ip)
         { $ip = trim($ip); }
    return $ip;}}}

            // just to be safe if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){ return $ip; } } } } }


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
        if(!empty($request['instagram'])){
            $user->instagram = $request['instagram'];
            $user->save();
        }
        if(($request['presupuesto'])){
            $user->presupuesto = true;
            $user->save();
        }else{
            $user->presupuesto = false;
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

         if(!empty($request['img1'])){
            if($request['img1'] == 'delete'){
                $user->img1 = null;
                $user->save();
            }
        }

        if(!empty($request['img2'])){
            if($request['img2'] == 'delete'){
                $user->img2 = null;
                $user->save();
            }
        }

        if(!empty($request['img3'])){
            if($request['img3'] == 'delete'){
                $user->img3 = null;
                $user->save();
            }
        }


        if($request->hasFile('img1')){
            $file = $request->file('img1');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img-jobs/', $name);
            $user->img1 = $name;
            $user->save();
        }

        if($request->hasFile('img2')){
            $file = $request->file('img2');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img-jobs/', $name);
            $user->img2 = $name;
            $user->save();
        }

        if($request->hasFile('img3')){
            $file = $request->file('img3');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img-jobs/', $name);
            $user->img3 = $name;
            $user->save();
        }

       return redirect()->back()->with('response','success');
    }


    public function welcome(){

        $subcategories = Subcategory::all();
        $users = User::all();
        $array = [];
        $cantidades = [];
        foreach($subcategories as $subcategory){
            $cuenta = User::where('job', '=', $subcategory->name)->count();
            array_add($subcategory, 'cantidad', $cuenta);
        }
        $o = 0;
        for($u = 0; $u<count($users); $u++){
            $bandera = 0;
            for($i = 0; $i<count($subcategories); $i++)
            {
                if($users[$u]->job == $subcategories[$i]->name){
                    $bandera = 1;
                }
            }
            if($bandera == 0){
                $array[$o] = $users[$u]->job;
                $o++;
            }
        }
       foreach($subcategories as $subcategory){
           $array[$o] = $subcategory->name;
           $o++;
       }
       $u = 0;
       foreach($subcategories as $subcategory){
        $cantidades[$u] = $subcategory->cantidad;
        $u++;
        }

        $categories = Category::all();
        $ultimos = User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->take(6)->get();
        $coments = Coment::all();

        return view('welcome', ['cantidadesarray' => $cantidades, 'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $ultimos, 'subcategories' => $subcategories, 'coments' => $coments]);
    }



    public function ordenarPorNombre(Request $request){

        $masvistos = DB::table('views')->selectRaw("users.id, users.name, users.img, users.job,  COUNT('views.*') as views")->join('users', 'users.id', '=', 'views.user_id')->groupBy('users.name')->orderBy('views', 'desc')->take(1)->get();
        $mascomentados = DB::table('coments')->selectRaw("users.id, users.name, users.img, users.job,  COUNT('coments.*') as coments")->join('users', 'users.id', '=', 'coments.user_id')->groupBy('users.name')->orderBy('coments', 'desc')->take(1)->get();
        $users = User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $coments = Coment::all();
        $array = [];
        $cantidades = [];
        $relacionadas = '';
        foreach($subcategories as $subcategory){
            $cuenta = User::where('job', '=', $subcategory->name)->count();
            array_add($subcategory, 'cantidad', $cuenta);
        }
        $o = 0;
        foreach($users as $user){
            $bandera = 0;
            foreach($subcategories as $subcategory)
            {
                if($user->job == $subcategory->name){
                    $bandera = 1;
                }
            }
            if($bandera == 0){
                $array[$o] = $user->job;
                $o++;
            }
        }
       foreach($subcategories as $subcategory){
           $array[$o] = $subcategory->name;
           $o++;
       }
       $u = 0;
       foreach($subcategories as $subcategory){
        $cantidades[$u] = $subcategory->cantidad;
        $u++;
    }

        if(!empty($request['search'])){
            $user = User::where('job', 'like', '%' . $request['search'] . '%')->orderBy('name', 'asc')->paginate(30);
                 if(count($user) == 0){
                    $user = User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->paginate(30);
                     return view('list', ['busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                 }else{
                     return view('list', ['busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                 }
        }else if(!empty($request['category'])){
                $categoria = Category::where('name', 'like', '%' . $request['search'] . '%')->firstOrFail();
                $user = User::Where('category', '=', $categoria->id)->orderBy('name', 'asc')->paginate(30);
                return view('list', ['searchcategory' => $request['category'], 'zone'=> $request['zone'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
        }else if (empty($request['category']) && (empty($request['category']))){
            $user = User::where('rol', '=', 'profesional')->orderBy('name', 'asc')->paginate(30);
            return view('list', ['busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
        }
    }




    public function ordenarPorZona(Request $request){

        $masvistos = DB::table('views')->selectRaw("users.id, users.name, users.img, users.job,  COUNT('views.*') as views")->join('users', 'users.id', '=', 'views.user_id')->groupBy('users.name')->orderBy('views', 'desc')->take(1)->get();
        $mascomentados = DB::table('coments')->selectRaw("users.id, users.name, users.img, users.job,  COUNT('coments.*') as coments")->join('users', 'users.id', '=', 'coments.user_id')->groupBy('users.name')->orderBy('coments', 'desc')->take(1)->get();
        $users = User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $coments = Coment::all();
        $array = [];
        $cantidades = [];
        $relacionadas = '';
        foreach($subcategories as $subcategory){
            $cuenta = User::where('job', '=', $subcategory->name)->count();
            array_add($subcategory, 'cantidad', $cuenta);
        }
        $o = 0;
        foreach($users as $user){
            $bandera = 0;
            foreach($subcategories as $subcategory)
            {
                if($user->job == $subcategory->name){
                    $bandera = 1;
                }
            }
            if($bandera == 0){
                $array[$o] = $user->job;
                $o++;
            }
        }
       foreach($subcategories as $subcategory){
           $array[$o] = $subcategory->name;
           $o++;
       }
       $u = 0;
       foreach($subcategories as $subcategory){
        $cantidades[$u] = $subcategory->cantidad;
        $u++;
    }
        if(!empty($request['category'])){

        }
        if(!empty($request['search'])){
            $user = User::where('job', 'like', '%' . $request['search'] . '%')->orderBy('zone', 'asc')->paginate(30);
                 if(count($user) == 0){
                    $user = User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->paginate(30);
                     return view('list', ['busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                 }else{
                     return view('list', ['busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                 }
        }else{
            $user = User::where('rol', '=', 'profesional')->orderBy('zone', 'asc')->paginate(30);
            return view('list', ['busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
        }
    }


    public function ordenarPorDisponibilidad(Request $request){

    }

    public function ordenarPorPuntaje(Request $request){

        $masvistos = DB::table('views')->selectRaw("users.id, users.name, users.img, users.job,  COUNT('views.*') as views")->join('users', 'users.id', '=', 'views.user_id')->groupBy('users.name')->orderBy('views', 'desc')->take(1)->get();
        $mascomentados = DB::table('coments')->selectRaw("users.id, users.name, users.img, users.job,  COUNT('coments.*') as coments")->join('users', 'users.id', '=', 'coments.user_id')->groupBy('users.name')->orderBy('coments', 'desc')->take(1)->get();
        $users = User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $coments = Coment::all();
        $array = [];
        $cantidades = [];
        $relacionadas = '';
        foreach($subcategories as $subcategory){
            $cuenta = User::where('job', '=', $subcategory->name)->count();
            array_add($subcategory, 'cantidad', $cuenta);
        }
        $o = 0;
        foreach($users as $user){
            $bandera = 0;
            foreach($subcategories as $subcategory)
            {
                if($user->job == $subcategory->name){
                    $bandera = 1;
                }
            }
            if($bandera == 0){
                $array[$o] = $user->job;
                $o++;
            }
        }
       foreach($subcategories as $subcategory){
           $array[$o] = $subcategory->name;
           $o++;
       }
       $u = 0;
       foreach($subcategories as $subcategory){
        $cantidades[$u] = $subcategory->cantidad;
        $u++;
    }

        if(!empty($request['search'])){
            $user = User::where('job', 'like', '%' . $request['search'] . '%')->orderBy('point', 'desc')->paginate(30);
                 if(count($user) == 0){
                    $user = User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->paginate(30);
                     return view('list', ['busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                 }else{
                     return view('list', ['busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
                 }
        }else{
            $user = User::where('rol', '=', 'profesional')->orderBy('point', 'desc')->paginate(30);
            return view('list', ['busqueda' => $request['search'], 'relacionadas' => $relacionadas, 'mascomentados' => $mascomentados, 'masvistos'=>$masvistos, 'cantidadesarray' => $cantidades,'subcategoriesArray' => $array, 'categories' => $categories, 'lastest' => $user, 'subcategories' => $subcategories, 'coments' => $coments]);
        }
    }
}
