<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\City;
use App\Manager;
use Session;

class ManagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();

        return view('managers.create')->withCities($cities);
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
                'image' => 'image',
                'info_uz' => 'required|max:255',
                'info_ru' => 'required|max:255',
                'contact' => 'max:191',
                'admission_uz' => 'max:191',
                'admission_ru' => 'max:191',
                'address_uz' => 'required|max:191',
                'address_ru' => 'required|max:191',
                'city_id' => 'exists:cities,id',
            ]);

        $manager = new Manager();
        $manager->info_uz = $request->info_uz;
        $manager->info_ru = $request->info_ru;

        $manager->address_uz = $request->address_uz;
        $manager->address_ru = $request->address_ru;

        $city = City::find($request->city_id);
        $manager->city()->associate($city);

        if($request->has('contact'))
        {
            $manager->contact = $request->contact;
        }
        if($request->has('admission_uz'))
        {
            $manager->admission_days_uz = $request->admission_uz;
        }
        if($request->has('admission_ru'))
        {
            $manager->admission_days_ru = $request->admission_ru;
        }
        if($request->has('admission'))
        {
            $manager->admission_days = $request->admission;
        }
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/managers/'.$filename);
            Image::make($image)->save($location);

            $manager->image = $filename;
        }

        $manager->save();

        Session::flash('success', 'The document has successfully been added!');

        return redirect()->route('managers.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
