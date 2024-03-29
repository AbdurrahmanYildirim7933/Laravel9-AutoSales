<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function brandlist()
    {
        return Brand::all();
    }

    public function index()
    {
        $category=Category::all();
        $cars = Car::all();
        $brands = Brand::all();
        $page='home';
        $sliderdata = Car :: limit(4)->get();
        $carlist1 = Car :: limit(6)->get();
        $setting = Setting::first();
        return view('home.index',[
            'page' => $page,
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'carlist1' => $carlist1,
            'brands' => $brands,
            'category' => $category,
            'cars' => $cars
        ]);
    }

    public function about()
    {
        $setting = Setting::first();
        return view('home.about',[
            'setting' => $setting,
        ]);
    }

    public function references()
    {

        $setting = Setting::first();
        return view('home.references',[
            'setting' => $setting,
        ]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',[
            'setting' => $setting,

        ]);
    }

    public function faq()
    {

        $setting = Setting::first();
        $datalist= Faq::all();
        return view('home.faq',[
            'setting' => $setting,
            'datalist' => $datalist
        ]);
    }

    public function storemessage(Request $request)
    {
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent, Thank you.');
    }


    public function storecomment(Request $request)
    {
        //dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->car_id = $request->input('car_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('car',['id'=>$request->input('car_id')])->with('info','Your comment has been sent, Thank you.');
    }


    public function car ($id)
    {
        $brands = Brand::all();
        $sliderdata = Category :: limit(4)->get();
        $images = DB::table('images')->where('car_id', $id)->get();
        $reviews= Comment::where('car_id',$id)->get();
        $data = Car :: find($id);
        $carlist1 = Car :: limit(6)->get();
        return view('home.car',[
            'data' => $data,
            'images' => $images,
            'carlist1' => $carlist1,
            'sliderdata' => $sliderdata,
            'reviews' => $reviews,
            'brands' => $brands

        ]);

    }
    public function categorycars ($id)
    {

        //dd($request);
        //echo "$id";
        //exit();
        $data = Car :: all();
        $category=Category::find($id);
        $cars = DB::table('cars')->where('category_id', $id)->get();
        return view('home.categorycars',[
            'category' => $category,
            'cars' => $cars,
            'data' => $data

        ]);

    }
    public function brandcars ($id)
    {
        $brand = Brand::find($id);
        $data = Car::find($id);
        $cars = DB::table('cars')->where('brand_id', $id)->get();

        return view('home.brandcars',[

            'cars' => $cars,
            'brand' => $brand,
            'data' => $data
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

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function usercarsale(Request $request)
    {
        //
        $data= new Car();
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->brand_id = $request->brand_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->model = $request->model;
        $data->kilometer = $request->kilometer;
        $data->year = $request->year;
        $data->color = $request->color;
        $data->body_type = $request->body_type;
        $data->fuel_type = $request->fuel_type;
        $data->gear_type = $request->gear_type;
        $data->traction_type = $request->traction_type;
        $data->engine_power = $request->engine_power;
        $data->engine_size = $request->engine_size;
        $data->equipment = $request->equipment;
        $data->damage_record = $request->damage_record;
        $data->address = $request->address;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/car');
    }

}
