<?php

namespace App\Http\Controllers;

// use App\Models\Rayons as ModelsRayons;

use App\Helpers\ApiFormatter;
use Exception;
use App\Models\Rayons;
use Illuminate\Http\Request;

class RayonsController extends Controller
{
    // public function store(Request $request){

       
    //     try{
    //          $request->validate([
    //             "user_id" => "reqired",
    //             "rayon " =>'required'
    //         ]);

    //         $rayon = Rayons::create([
    //             'user_id' => $request->user_id,
    //             'rayon' => $request->rayon
    //         ]);
    //         $data = Rayons::find($rayon->user_id)->get();
            
    //         if($data){
    //             return ApiFormatter::createApi(200,'Success',$data);
    //         }else{
    //             return ApiFormatter::createApi(400,'error');

    //         }
    //     }catch(Exception $e){
            
    //     }


    // }
}
