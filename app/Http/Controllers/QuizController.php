<?php

namespace App\Http\Controllers;
use App\Models\Quiz;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        $quiz = Quiz::select('*')->get();
       
        return view("create-quiz/quiz", ['quizzes' => $quiz]);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view("create-quiz/add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
           
                'question' => 'required',
                'optionone' => 'required',
                'optiontwo' => 'required',
                'optionthree' => 'required',
                'optionfour' => 'required',
                'answer' => 'required',
           
            ]
        );
        $quiz = new Quiz();
        $ans= $request->input('answer');
        $quiz->question = $request->input('question');
        $quiz->optionone = $request->input('optionone');
        $quiz->optiontwo = $request->input('optiontwo');
        $quiz->optionthree =$request->input('optionthree');
        $quiz->optionfour =$request->input('optionfour');
        $quiz->answer = $request->input($ans);
        $quiz->save();
        return redirect("/create-quiz")->with('status' , "Inserted Successfuly");
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
        $quiz = Quiz::where('id',$id)->first();
        return view('/create-quiz/update', ['quiz' => $quiz]);
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
        $request->validate(
            [
                'question' => 'required',
                'optionone' => 'required',
                'optiontwo' => 'required',
                'optionthree' => 'required',
                'optionfour' => 'required',
                'answer' => 'required',
                
            ]
        );
        
       
            $quiz = Quiz::where('id', $id)
            ->update(
            [
                'question'=>$request->input('question'),
                'optionone'=>$request->input('optionone'),
                'optiontwo'=>$request->input('optiontwo'),
                'optionthree'=>$request->input('optionthree'),
                'optionfour'=>$request->input('optionfour'),
                'answer'=>$request->input('answer'),
              
            ]);
       
     if($quiz)
     { 
         return redirect("/create-quiz")->with('status', "Inserted Successfuly");
     }
     else
     {
         print_r("An error occurd");
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Quiz::where('id',$id)->delete();
        if($result)
        {
            return redirect("/create-quiz");
            session()->flash('message', 'Deleted Successfuly.');
        }
        else
        {
            print_r("An error Occurd while deleting");
        }
    }
 
}
