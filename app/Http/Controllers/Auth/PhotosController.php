<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Photo;
use Session;
use Storage;
use Image;

class PhotosController extends Controller
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
        $photos = Photo::orderBy('id', 'DESC')->paginate(30);

        return view('photos.index')->withPhotos($photos);
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
                'image' => 'required|image',
                'title_uz' => 'required|max:191',
                'title_ru' => 'required|max:191',
            ]);

        $photo = new Photo;

        $image = $request->image;
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        Image::make($image)->resize(800,400)->save($location);

        $photo->photo = $filename;
        $photo->title_uz = $request->title_uz;
        $photo->title_ru = $request->title_ru;
        $photo->save();

        Session::flash('success', 'Photo has successfully been added!');

        return redirect()->route('photos.index');
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
        $photo = Photo::find($id);

        return view('photos.edit')->withPhoto($photo);
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
                'photo' => 'image',
                'title_uz' => 'required|max:191',
                'title_ru' => 'required|max:191',
            ]);

        $photo = Photo::find($id);

        if($request->hasFile('image'))
        {
            $image = $request->image;
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->save($location);

            $oldphoto = $photo->photo;

            $photo->photo = $filename;

            Storage::delete($oldphoto);
        }
        
        $photo->title_uz = $request->title_uz;
        $photo->title_ru = $request->title_ru;
        $photo->save();

        Session::flash('success', 'Photo has successfully been updated!');

        return redirect()->route('photos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        Storage::delete($photo->image);

        $photo->delete();

        Session::flash('success', 'Photo has successfully been deleted!');

        return redirect()->route('photos.index');
    }
}
