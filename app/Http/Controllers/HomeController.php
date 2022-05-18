<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function index()
    {
        $page='home';
        $sliderdata = Car :: limit(4)->get();
        $carlist1 = Car :: limit(6)->get();
        return view('home.index',[
            'page' => $page,
            'sliderdata' => $sliderdata,
            'carlist1' => $carlist1
        ]);
    }

    public function car ($id)
    {
        $sliderdata = Category :: limit(4)->get();
        $images = DB::table('images')->where('car_id', $id)->get();
        $data = Car :: find($id);
        $carlist1 = Car :: limit(6)->get();
        return view('home.car',[
            'data' => $data,
            'images' => $images,
            'carlist1' => $carlist1,
            'sliderdata' => $sliderdata,

        ]);

    }
    public function categorycars ($id)
    {

        $category= Car :: find($id);
        $cars = DB::table('cars')->where('category_id', $id)->get();


        return view('home.categorycars',[
            'category' => $category,
            'cars' => $cars,

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
