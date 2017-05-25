<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Course;
use App\Folder;
use Illuminate\Http\Request;

class CourseController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        $courses = Course::where('user_id','=',auth()->user()->id)->get();

        return view('course.main', compact('courses'));
    }

    public function create()
    {
    	$folders = Folder::all();
        
    	return view('course.create', compact('folders'));
    }

    public function store()
    {
    	$this->validate(request(),[
			'course_name' => 'required|min:2',
			'folder_id' => 'required'
    		]);

    	$course_folderid  = implode(" , ", request('folder_id'));

    	$course = Course::create([
    		'course_name' => request('course_name'),
    		'folder_id' => $course_folderid,
    		'user_id' => auth()->user()->id
    		]);

    	return redirect()->back()->with('message', 'Course has been successfully added.');
    }

    public function edit($id)
    {
    	$folders = Folder::all();
    	$course = Course::findorFail($id);
    	return view('course.edit', compact('folders','course'));
    }

    public function update($id)
    {
    	$this->validate(request(),[
    		'course_name' => 'required|min:2',
			'folder_id' => 'required'
    		]);

    	$course_folderid  = implode(" , ", request('folder_id'));

    	$course = Course::find($id);
    	$course->course_name = request('course_name');
    	$course->folder_id = $course_folderid;
    	$course->save();

    	session()->flash('message','Course has been successfully updated');

    	return redirect()->back();
    }

    public function destroy($id)
    {
    	$course = Course::find($id);
    	$course->delete();

    	session()->flash('message','Successfully deleted the course!');

    	return redirect()->back();
    }
}
