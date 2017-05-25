<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Course;
use App\Question;
use App\Folder;
use App\Selected_question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function create()
	{
		$questions_id = Question::orderBy('id', 'desc')->first();
		
		$num_question = $questions_id->id + 1;
		if($num_question<=9)
		{
			$num_id = "000".$num_question;
		}
		elseif($num_question<=99)
		{
			$num_id = "00".$num_question;
		}
		elseif($num_question<=999)
		{
			$num_id = "0".$num_question;
		}
		else
		{
			$num_id = $num_question;
		}
		
		$courses = Course::where('user_id','=',auth()->user()->id)->get();

		return view('question.create', compact('courses','num_id'));
	}

	public function getquestion(Course $id)
	{
		$folders = explode(" , ", $id->folder_id);

		return view('question.show', compact('folders'));
	}

	public function store()
	{
		$this->validate(request(),[
			'course_id' => 'required',
			'question' => 'required|min:2',
			'question_keyword' => 'required',
			'question_category' => 'required',
			'level' => 'required'
			]);


		if(Question::where('question','=',request('question'))->exists())
		{
			return redirect()->back()->withErrors('Question already exists');
		}

		$question = Question::create([
			'courses_id' => request('course_id'), 
			'question_category' => request('question_category'),
			'question' => request('question'),
			'question_keyword' => request('question_keyword'),
			'level' => request('level'),
			'user_id' => auth()->user()->id
			]);

		return redirect()->back()->with('message', 'Question has been successfully added.');

	}

	public function select_course()
	{
		$courses = Course::where('user_id','=',auth()->user()->id)->get();

		return view('question.select', compact('courses'));
	}

	public function select_folder(Course $courses)
	{	
		$folder_data = explode(' , ', $courses->folder_id);

		return view('question.select1', compact('folder_data','courses'));
	}

	public function select_question($course_id, $folder_id)
	{
		$questions = Question::where('courses_id','=',$course_id)->where('question_category','=',$folder_id)->get();

		return view('question.select2', compact('questions','course_id','folder_id'));
	}

	public function store_question($course_id, $folder_id)
	{
		$this->validate(request(),[
			'question_selected' => 'required'
			]);
		$merge_question = implode(" , ", request('question_selected'));

		session()->put('question_selected', $merge_question); //Store Data Session

		return view('question.select3', compact('course_id','folder_id'));
	}

	public function store_files($course_id, $folder_id)
	{
		$this->validate(request(),[
			'file_name' => 'required|min:2'
			]);
		
		$questions = Selected_question::create([
			'file_name' => request('file_name'),
			'question_id' => session('question_selected'),
			'question_category' => $folder_id,
			'user_id' => auth()->user()->id,
			'course_id' => $course_id
			]);

		session()->forget('question_selected'); //Deleting Data Session

		return redirect('/courses')->with('flash', 'Questions have been successfully saved in the File.');
	}


}
