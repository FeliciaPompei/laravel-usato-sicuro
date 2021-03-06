<?php

namespace App\Http\Controllers;
use App\Car;
use App\Brand;
use App\Color;
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
        $cars= Car::all();
        return view("cars.index", compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $colors = Color::all();
        return view("cars.create", ['brands' => $brands, 'colors' => $colors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "numero_telaio" => "required|min:8",
            "model"=> "required",
            "porte"=> "required",
            "data_immatricolazione"=> "required",
            "brand_id" => "required",
            "alimentazione" => "required",
            "prezzo"=> "required|numeric",
            "color_id"=> "required",
            "descrizione"=> "required|min:10",
        ]);
        $data = $request->all();

        $car = new Car();

        $car->fill($data);

        $car->save();
        $car->colors()->attach($data['color_id']);
        return redirect()->route("cars.show", $car->id)->with("msg", "$car->model $car->marca è stato aggiunto con successo");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car= Car::findOrFail($id);
        return view("cars.show", compact("car"), );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Car $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $brands = Brand::all();
        $colors = Color::all();
        return view('cars.edit', compact('car'), ['brands' => $brands, 'colors' => $colors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Car $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            "numero_telaio" => "required|min:8",
            "model"=> "required",
            "porte"=> "required",
            "data_immatricolazione"=> "required",
            "brand_id" => "required",
            "alimentazione" => "required",
            "prezzo"=> "required|numeric",
            "color_id" => "required",
            "descrizione"=> "required|min:10",
        ]);
        $data = $request->all();

        $car->fill($data);

        $car->save();
        $car->colors()->sync($data['color_id']);

        return redirect()->route("cars.show", compact('car'))->with("message", "$car->model $car->marca è stato modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  CAR $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with("message", "$car->model $car->marca è stato cancellato dalla pianeta terra");
    }
}
