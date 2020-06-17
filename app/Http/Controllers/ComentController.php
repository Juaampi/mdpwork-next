<?php

namespace App\Http\Controllers;

use App\Coment;
use App\User;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    public function addcoment(Request $request){
        if(!empty($request['point']) && !empty($request['coment'])){
            $coment = new Coment;
            $coment->coment = $request['coment'];
            $coment->point = $request['point'];
            $coment->user_id = $request['user_id'];
            $coment->guest_id = $request['guest_id'];
            $coment->save();
            $coments = Coment::where('user_id', '=', $request['user_id'])->get();
            $user = User::find($request['user_id']);
            $points = $user->points;
            foreach($coments as $com){
                $points += $com->point;
            }
            $totalPoints = $points/(count($coments)+1);
            $user->points = $totalPoints;
            $user->save();



            return redirect()->back()->with('response', 'success');
        }else{
            return redirect()->back()->with('noresponse', 'error');
        }
    }
}
