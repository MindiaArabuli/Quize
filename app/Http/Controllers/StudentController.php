<?php

namespace App\Http\Controllers;
use App\Question;
use App\Answer;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {

        $question = Question::all();
        $answer = Answer::all();
        return view('student.home') ->with('question', $question,'answer',$answer);
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_STUDENT');
    }
}
