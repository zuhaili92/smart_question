<?php

namespace App\Http\Controllers;

use App\Course;
use App\Selected_question;
use App\Question;
use Illuminate\Http\Request;

class FileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{

		$courses = Course::where('user_id','=',auth()->user()->id)->get();

		return view('file.index', compact('courses'));
	}

	public function show($id)
	{
		$files = Selected_question::where('course_id','=',$id)->where('user_id','=',auth()->user()->id)
		->join('folders', 'selected_questions.question_category','=','folders.id')->get();

		return view('file.show', compact('files'));
	}

	public function destroy($id)
	{
		$files = Selected_question::find($id);
		$files->delete();

		session()->flash('message','Successfully deleted the file!');

		return redirect()->back();
	}

	public function getData(Selected_question $id)
	{
		$question_ids = explode(" , ",$id->question_id);

		$questions = array();

		foreach ($question_ids as $question_id) {

			$questions[] = Question::findorFail($question_id);

		}

		return view('file.list', compact('id','questions'));
	}

	public function documents(Selected_question $id)
	{
		$question_ids = explode(" , ",$id->question_id);

		$questions = array();

		foreach ($question_ids as $question_id) 
		{
			$questions[] = Question::findorFail($question_id);
		}

		return view('file.documents', compact('questions'));
	}
}
