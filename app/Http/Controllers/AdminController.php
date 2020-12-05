<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use View;

class AdminController extends Controller
{
 
    public function index()
    {
        $question = Question::all();

        // load the view and pass the sharks
        return View::make('admin.home')
            ->with('question', $question);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quizes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer1' => 'required',
            'answer2' => 'required',
            'answer3' => 'required',
            'answer4' => 'required',
        ]);

        $question = $request->input('question');
        $answer1 = $request->input('answer1');
        $answer2 = $request->input('answer2');
        $answer3 = $request->input('answer3');
        $answer4 = $request->input('answer4');

        $Question = new Question();
        $Question->question =$question;
        $Question->save();

        
        $Answer1 = new Answer();
        $Answer1->Answer =$answer1;
        $Answer1->questionID =$Question->id;

        $Answer2 = new Answer();
        $Answer2->Answer =$answer2;
        $Answer2->questionID =$Question->id;
        
        $Answer3 = new Answer();
        $Answer3->Answer =$answer3;
        $Answer3->questionID =$Question->id;
        
        $Answer4 = new Answer();
        $Answer4->Answer =$answer4;
        $Answer4->questionID =$Question->id;
        
        

        $Question->save();
        $radio = $request->input('result');
        switch ($radio) {
            case '1':
                $Answer1->iscorrect =1;
               
                break;
            case '2':
    
                $Answer2->iscorrect =1;
                break;
            case '3':

                $Answer3->iscorrect =1;
                break;
            case '4':

                $Answer4->iscorrect =1;
                break;
        }

        $Answer1->save();
        $Answer2->save();
        $Answer3->save();
        $Answer4->save();
        
        $question = Question::all();
        return View::make('admin.home')
            ->with('question', $question);
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
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_ADMIN');
    }
}
