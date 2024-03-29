<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminCarController extends Controller
{
    public static function brandlist()
    {
        return Brand::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        $data=Car::all();
        return view('admin.car.index',[
        'data' => $data,
            'brands' => $brands
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $brands = Brand::all();
        $data=Category::all();
        return view('admin.car.create',[
            'data' => $data,
            'brands' => $brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car,$id)
    {
        $brands = Brand::all();
        $data = Car::find($id);
        return view('admin.car.show', [
            'data' => $data,
            'brands' => $brands
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car,$id)
    {
        $brands = Brand::all();
        $data= Car::find($id);
        $datalist= Category::all();
        return view('admin.car.edit',[
            'data' => $data,
            'datalist'=> $datalist,
            'brands'=> $brands
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car,$id)
    {
        $data= Car::find($id);
        $data->category_id = $request->category_id;
        $data->brand_id = $request->brand_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
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
        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/car');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car,$id)
    {
        //
        $data= Car::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/car');
    }
}
