<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Wanted;
use Session;
use Storage;
use Image;

class WantedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wanted = Wanted::orderBy('id', 'DESC')->paginate(20);

        return view('wanted.index')->withWanted($wanted);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'first_name' => 'required|max:191',
                'last_name' => 'required|max:191',
                'middle_name' => 'required|max:191',
                'dob' => 'required|date',
                'image' => 'required|image',
                'is_lost' => 'required|boolean'
            ]);

        $wanted = new Wanted;

        $wanted->first_name = $request->first_name; 
        $wanted->last_name = $request->last_name; 
        $wanted->middle_name = $request->middle_name;
        $wanted->date_of_birth = $request->dob;
        $wanted->is_lost = $request->is_lost;

        $image = $request->image;
        $filename = time().".".$image->getClientOriginalExtension();
        $location = public_path('images/wanted/'.$filename); 

        Image::make($image)->save($location);

        $wanted->image = $filename;
        $wanted->save();

        Session::flash('success', 'The wanted has successfully been added!');

        return redirect()->route('wanted.index');
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
        $this->validate($request, [
                'first_name' => 'required|max:191',
                'last_name' => 'required|max:191',
                'middle_name' => 'required|max:191',
                'dob' => 'required|date',
                'image' => 'image',
                'is_lost' => 'required|boolean'
            ]);

        $wanted = Wanted::find($id);

        $wanted->first_name = $request->first_name; 
        $wanted->last_name = $request->last_name; 
        $wanted->middle_name = $request->middle_name;
        $wanted->date_of_birth = $request->dob;
        $wanted->is_lost = $request->is_lost;
        
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $filename = time().".".$image->getClientOriginalExtension();
            $location = public_path('images/wanted/'.$filename); 

            Image::make($image)->save($location);
            $oldImage = $wanted->image;

            Storage::delete('wanted/'.$oldImage);
            $wanted->image = $filename;
        }
        
        $wanted->save();

        Session::flash('success', 'The wanted has successfully been updated!');

        return redirect()->route('wanted.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wanted = Wanted::find($id);

        Storage::delete('wanted/'.$wanted->image);
        $wanted->delete();

        Session::flash('success', 'The wanted has successfully been deleted!');

        return redirect()->route('wanted.index');
    }
}
