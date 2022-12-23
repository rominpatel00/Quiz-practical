<?php

namespace App\Http\Controllers;
use App\Models\Result;
use App\Models\Quiz;

use Illuminate\Http\Request;

class ExamController extends Controller
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
       
        return view("quiz/quiz", ['quizzes' => $quiz]);
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
      
        $correct_ans = 0;
        $wrong_ans = 0;
        foreach($request->question_id as $qid){
            $ans = Quiz::where('id',$qid)->first();
            if($ans->answer == $request->input('answer'.$qid)){
                $correct_ans++;
            }   
            else{
                $wrong_ans++;
            }
        }
        $result = new Result();
        $result->studentname = $request->studentname;
        $result->correctanswer = $correct_ans;
        $result->wronganswer = $wrong_ans;
        $result->save();
        return view("/quiz/thank",['result' => $result]);
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Result::where('id',$id)->delete();
        if($result)
        {
            return redirect("/result");
            session()->flash('message', 'Deleted Successfuly.');
        }
        else
        {
            print_r("An error Occurd while deleting");
        }
    }
 
}
