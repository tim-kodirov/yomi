<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library;
use Session;
use Storage;

class LibraryController extends Controller
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
        $libraries = Library::orderBy('id', 'DESC')->paginate(30);

        return view('library.index')->withLibraries($libraries); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
                'file' => 'required|mimes:pdf,doc,rar,zip,xls',
                'name' => 'required|max:191',
                'is_russian' => 'boolean'
            ]);

        $book = new Library;
        $bookName = time().'.'.$request->file->getClientOriginalExtension();
        $path = Storage::disk('public')->putFileAs('library', $request->file, $bookName);
        $book->file = $bookName;
        $book->name = $request->name;

        if($request->has('is_russian'))
        {
            $book->is_uzbek = false;
        }

        $book->save();

        Session::flash('success', 'The book has successfully been added!');

        return redirect()->route('library.index');
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
                'name' => 'required|max:191',
                'is_russian' => 'boolean'
            ]);

        $book = Library::find($id);

        $book->name = $request->name;

        
        $book->is_uzbek = $request->has('is_russian') ? false : true;
        

        $book->save();

        Session::flash('success', 'The book has successfully been updated!');

        return redirect()->route('library.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Library::find($id);

        Storage::disk('public')->delete('library/'.$book->file);

        $book->delete();

        Session::flash('success', 'The book has successfully been deleted!');

        return redirect()->route('library.index');
    }
}
