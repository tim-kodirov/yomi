<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use Session;
use Purifier;
use Image;
use Storage;
use Str;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $isDep = $request->isDepartment ? 1 : 0;

        $news = News::where('isDepartment', $isDep)->orderBy('id', 'DESC')->paginate(20);

        return view('news.index')->withNews($news)->with('isDepartment', $isDep);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
            'title_uz'    => 'required|max:255',
            'title_ru'    => 'required|max:255',
            'image'       => 'required|image',
            'overview_uz' => 'required|max:255',
            'overview_ru' => 'required|max:255',
            'body_uz'     => 'required',
            'body_ru'     => 'required',
            'isDepartment'=> 'boolean'
        ]);


        $news = new News;

        $news->title_uz = $request->title_uz;
        $news->title_ru = $request->title_ru;
        $news->overview_uz = $request->overview_uz;
        $news->overview_ru = $request->overview_ru;
        $news->isDepartment = $request->isDepartment;

        $slug = str_slug($news->title_ru, '-');
        $count = News::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $news->slug = $count ? ($slug.'-'.$count) : $slug;

        $image = $request->image;
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        Image::make($image)->save($location);

        $news->image = $filename;

        $news->body_uz = Purifier::clean($request->body_uz);
        $news->body_ru = Purifier::clean($request->body_ru);

        $news->save();


        Session::flash('success', 'News has successfully been added!');

        return redirect()->route('news.show', $news->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);

        return view('news.show')->withNews($news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);

        return view('news.edit')->withNews($news);
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
            'title_uz'    => 'required|max:255',
            'title_ru'    => 'required|max:255',
            'image'    	  => 'image',
            'overview_uz' => 'required|max:255',
            'overview_ru' => 'required|max:255',
            'body_uz'     => 'required',
            'body_ru'     => 'required',
            'isDepartment'=> 'boolean'
        ]);


        $news = News::find($id);

        $news->title_uz = $request->title_uz;
        $news->title_ru = $request->title_ru;
        $news->overview_uz = $request->overview_uz;
        $news->overview_ru = $request->overview_ru;
        $news->isDepartment = $request->isDepartment;

        $slug = str_slug($news->title_ru, '-');
        $count = News::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $news->slug = $count ? ($slug.'-'.$count) : $slug;

        if( $request->hasFile('image'))
        {

            $image = $request->image;
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->save($location);

            $oldImage = $news->image;

            $news->image = $filename;

            Storage::delete($oldImage);
        }
        

        

        $news->body_uz = Purifier::clean($request->body_uz);
        $news->body_ru = Purifier::clean($request->body_ru);

        $news->save();


        Session::flash('success', 'News has successfully been updated!');

        return redirect()->route('news.show', $news->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $news = News::find($id);
        Storage::delete($news->image);
        

        $news->delete();

        Session::flash('success', 'The news has successfully been deleted!');

        return redirect()->route('news.index');
    }
}
