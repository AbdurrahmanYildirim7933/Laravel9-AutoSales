<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderdata = Car :: limit(4)->get();
        $carlist1 = Car :: limit(6)->get();
        return view('home.index',[
            'sliderdata' => $sliderdata,
            'carlist1' => $carlist1
        ]);
    }

    public function aboutus(){
        return view('home.about');
    }

    public function test($id,$name)
    {
        $data['$id']=$id;
        $data['$name']=$name;

        return view('home.test',['id'=>$id,'name'=>$name]);
        echo "ID Number:",$id;
        echo "<br>Name:",$name;
        for($i=1;$i<=$id;$i++){

            echo "<br> $i $name";

        }
    }


}
