<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use App\Category;
use Session;


class DocumentsController extends Controller
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
        $categories = Category::all();
        return view('documents.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('documents.create')->withCategories($categories);
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
                'title_uz' => 'required|max:400',
                'title_ru' => 'required|max:400',
                'body_uz'  => 'required',
                'body_ru'  => 'required',
                'category_id' => 'exists:categories,id',
            ]);

        $category = Category::find($request->category_id);

        $document = new Document;
        $document->title_uz = $request->title_uz;
        $document->title_ru = $request->title_ru;
        $document->body_uz = $request->body_uz;
        $document->body_ru = $request->body_ru;
        $document->category()->associate($category);
        $document->save();

        Session::flash('success', 'The document has successfully been added!');

        return redirect()->route('documents.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = Document::find($id);

        return view('documents.show')->withDocument($document);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document = Document::find($id);
        $categories = Category::all();

        return view('documents.edit')->withDocument($document)->withCategories($categories);
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
                'title_uz' => 'required|max:400',
                'title_ru' => 'required|max:400',
                'body_uz'  => 'required',
                'body_ru'  => 'required',
                'category_id' => 'exists:categories,id',
            ]);

        $category = Category::find($request->category_id);

        $document = Document::find($id);
        $document->title_uz = $request->title_uz;
        $document->title_ru = $request->title_ru;
        $document->body_uz = $request->body_uz;
        $document->body_ru = $request->body_ru;
        $document->category()->associate($category);
        $document->save();

        Session::flash('success', 'The document has successfully been updated!');

        return redirect()->route('documents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Document::find($id);
        $document->delete();

        Session::flash('success', 'The document has successfully been deleted');

        return redirect()->route('documents.index');
    }
}
