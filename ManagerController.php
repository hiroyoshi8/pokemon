<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\First_generation;
use App\Models\Second_generation;
use App\Models\Third_generation;
use App\Models\Fourth_generation;
use App\Models\Fifth_generation;
use App\Models\Sixth_generation;
use App\Models\Seventh_generation;
use App\Models\Eighth_generation;
use App\Models\Ninth_generation;


class ManagerController extends Controller{

    public function insert(Request $request){
        $generation = $request->generation;
        $problem = $request->problem;
        $Choice_1 = $request->Choice_1;
        $Choice_2 = $request->Choice_2;
        $Choice_3 = $request->Choice_3;
        $Choice_4 = $request->Choice_4;
        $correct = $request->correct;
        $explanation = $request->explanation;
       
        switch($generation){
            case "1":
                $First_generation = new First_generation();
                $First_generation->problem = $problem;
                $First_generation->Choice_1 = $Choice_1;
                $First_generation->Choice_2 = $Choice_2;
                $First_generation->Choice_3 = $Choice_3;
                $First_generation->Choice_4= $Choice_4;
                $First_generation->correct = $correct;
                $First_generation->explanation = $explanation;
                $First_generation->save();
                break;
            case "2":
                $Second_generation = new Second_generation();
                $Second_generation->problem = $problem;
                $Second_generation->Choice_1 = $Choice_1;
                $Second_generation->Choice_2 = $Choice_2;
                $Second_generation->Choice_3 = $Choice_3;
                $Second_generation->Choice_4= $Choice_4;
                $Second_generation->correct = $correct;
                $Second_generation->explanation = $explanation;
                $Second_generation->save();
                break;
            case "3":
                $Third_generation = new Third_generation();
                $Third_generation->problem = $problem;
                $Third_generation->Choice_1 = $Choice_1;
                $Third_generation->Choice_2 = $Choice_2;
                $Third_generation->Choice_3 = $Choice_3;
                $Third_generation->Choice_4= $Choice_4;
                $Third_generation->correct = $correct;
                $Third_generation->explanation = $explanation;
                $Third_generation->save();
                break;
            case "4":
                $Fourth_generation = new Fourth_generation();
                $Fourth_generation->problem = $problem;
                $Fourth_generation->Choice_1 = $Choice_1;
                $Fourth_generation->Choice_2 = $Choice_2;
                $Fourth_generation->Choice_3 = $Choice_3;
                $Fourth_generation->Choice_4= $Choice_4;
                $Fourth_generation->correct = $correct;
                $Fourth_generation->explanation = $explanation;
                $Fourth_generation->save();
                break;
            case "5":
                $Fifth_generation = new Fifth_generation();
                $Fifth_generation->problem = $problem;
                $Fifth_generation->Choice_1 = $Choice_1;
                $Fifth_generation->Choice_2 = $Choice_2;
                $Fifth_generation->Choice_3 = $Choice_3;
                $Fifth_generation->Choice_4= $Choice_4;
                $Fifth_generation->correct = $correct;
                $Fifth_generation->explanation = $explanation;
                $Fifth_generation->save();
                break;
            case "6":
                $Sixth_generation = new Sixth_generation();
                $Sixth_generation->problem = $problem;
                $Sixth_generation->Choice_1 = $Choice_1;
                $Sixth_generation->Choice_2 = $Choice_2;
                $Sixth_generation->Choice_3 = $Choice_3;
                $Sixth_generation->Choice_4= $Choice_4;
                $Sixth_generation->correct = $correct;
                $Sixth_generation->explanation = $explanation;
                $Sixth_generation->save();
                break;
            case "7":
                $Seventh_generation = new Seventh_generation();
                $Seventh_generation->problem = $problem;
                $Seventh_generation->Choice_1 = $Choice_1;
                $Seventh_generation->Choice_2 = $Choice_2;
                $Seventh_generation->Choice_3 = $Choice_3;
                $Seventh_generation->Choice_4= $Choice_4;
                $Seventh_generation->correct = $correct;
                $Seventh_generation->explanation = $explanation;
                $Seventh_generation->save();
                break;   
            case "8":
                $Eighth_generation = new Eighth_generation();
                $Eighth_generation->problem = $problem;
                $Eighth_generation->Choice_1 = $Choice_1;
                $Eighth_generation->Choice_2 = $Choice_2;
                $Eighth_generation->Choice_3 = $Choice_3;
                $Eighth_generation->Choice_4= $Choice_4;
                $Eighth_generation->correct = $correct;
                $Eighth_generation->explanation = $explanation;
                $Eighth_generation->save();
                 break;
            case "9":
                $Ninth_generation = new Ninth_generation();
                $Ninth_generation->problem = $problem;
                $Ninth_generation->Choice_1 = $Choice_1;
                $Ninth_generation->Choice_2 = $Choice_2;
                $Ninth_generation->Choice_3 = $Choice_3;
                $Ninth_generation->Choice_4= $Choice_4;
                $Ninth_generation->correct = $correct;
                $Ninth_generation->explanation = $explanation;
                $Ninth_generation->save();
                break;                    
        }
        return view('manager');
    }

    public function index(){
        return view('index');
    }
    
}