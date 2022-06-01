<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('id', 'asc')->paginate(15);
        return view('pages.car.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('id', 'asc')->get();
        return view('pages.car.create', ['brands' =>$brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'brand_id' => 'required',
        'registration' => 'required',
        'year_of_manufacture' => 'required',
        'color' => 'required'
        ]);

        Car::create([
            'brand_id' => $request->brand_id,
             'registration' => $request->registration,
         'year_of_manufacture' => $request->year_of_manufacture,
         'color' => $request->color
        ]);
        return redirect('cars')->with('status','Car created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return (view('pages.car.show', ['car' =>$car]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $brands = Brand::orderBy('id', 'asc')->get();
        return (view('pages.car.edit', ['car' =>$car],['brands' =>$brands] ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        return redirect('cars')->with('status','Car edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('cars')->with('status','Car deleted successfully!');
    }
}
