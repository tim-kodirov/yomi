<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use Session;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $is_citizen = 1;

        if($request->has('is_citizen'))
        {
            $is_citizen = $request->is_citizen ? 1 : 0;
        }

        $questions = Question::where('is_citizen', $is_citizen)->orderBy('id', 'DESC')->paginate(30);

        foreach ($questions as $q) {
            if(!$q->is_seen)
            {
                Session::flash('questions'.$q->id, "Has");
                $q->is_seen = true;
                $q->save();
            }   
        }

        return view('questions.index')->withQuestions($questions)->with('is_citizen', $is_citizen);
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
                'phone_number' => 'required|integer|digits:9',
                'question' => 'required',
                'address' => 'required|max:191',
                'is_citizen' => 'required|boolean'
            ]);

    
        $question = new Question;
        
        $question->first_name = $request->first_name;
        $question->last_name = $request->last_name;
        $question->middle_name = $request->middle_name;
        $question->phone_number = $request->phone_number;
        $question->question = $request->question;
        $question->address = $request->address;
        $question->is_citizen = $request->is_citizen;
        $question->save();

        Session::flash('question_sent', 'Вопрос отправлен!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);

        return view('questions.show')->withQuestion($question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);

        return view('questions.edit')->withQuestion($question);
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
                'phone_number' => 'required|integer|digits:9',
                'question' => 'required',
                'address' => 'required|max:191',
                'is_citizen' => 'required|boolean'
            ]);

    
        $question = Question::find($id);
        
        $question->first_name = $request->first_name;
        $question->last_name = $request->last_name;
        $question->middle_name = $request->middle_name;
        $question->phone_number = $request->phone_number;
        $question->question = $request->question;
        $question->address = $request->address;
        $question->is_citizen = $request->is_citizen;

        $question->save();

        Session::flash('success', 'The question has successfully been updated!');

        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);

        $question->delete();

        Session::flash('success', 'The question has successfully been deleted!');

        return redirect()->route('questions.index');
    }

    public function setAnswer(Request $request, $id)
    {
        $this->validate($request, [
                'answer' => 'required'
            ]);

        $question = Question::find($id);

        $question->answer = $request->answer;
        $question->save();

        Session::flash('success', 'The question has successfully been answered!');
        return redirect()->route('questions.index');
    }
}
