<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use Storage;
use Session;

class VideosController extends Controller
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
        $videos = Video::orderBy('id', 'DESC')->paginate(20);

        return view('videos.index')->withVideos($videos);
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
                'video'    => 'required|mimetypes:video/mp4,video/ogg,video/webm',
                'title_uz' => 'required|max:191',
                'title_ru' => 'required|max:191',
            ]);

        $video = new Video;
        $videoName = time().'.'.$request->video->getClientOriginalExtension();
        $path = Storage::disk('public')->putFileAs('videos', $request->video, $videoName);
        $video->video = $videoName;
        $video->title_uz = $request->title_uz;
        $video->title_ru = $request->title_ru;

        $video->save();

        Session::flash('success', 'The new video has successfully been added!');

        return redirect()->route('videos.index');
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
        $video = Video::find($id);

        Storage::disk('public')->delete('videos/'.$video->video);

        $video->delete();

        Session::flash('success', 'The video has successfully been deleted!');

        return redirect()->route('videos.index');
    }
}
