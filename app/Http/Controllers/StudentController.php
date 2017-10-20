<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\User;
use App\subject;
use Input;
use Auth;
use App\Enrolsubject;

class StudentController extends Controller
{
   public function subjects(Request $request){
   if(Auth::check()){
   if((subject::where('subject',request('subject1'))
      ->where('course',Auth::user()->course)->exists()) == null ){
       session()->flash('wrong','First Subject not exist');
     return redirect('/about')->withInput(); 
   }
   if((subject::where('subject',request('subject2'))
      ->where('course',Auth::user()->course)->exists()) == null ){
       session()->flash('wrong','Second Subject not exist');
      return redirect('/about')->withInput();
   }
   if((subject::where('subject',request('subject3'))
      ->where('course',Auth::user()->course)->exists()) == null ){
       session()->flash('wrong','Third Subject not exist');
     return redirect('/about')->withInput();
   }
   if((subject::where('startclass',request('startclass1'))
      ->where('course',Auth::user()->course)->exists()) == null ){
       session()->flash('wrong','First Subject wrong sched');
     return redirect('/about')->withInput();
   }
    if((subject::where('startclass',request('startclass2'))
      ->where('course',Auth::user()->course)->exists()) == null ){
       session()->flash('wrong','Second Subject wrong sched');
      return redirect('/about')->withInput();  
   }
    if((subject::where('startclass',request('startclass3'))
      ->where('course',Auth::user()->course)->exists()) == null ){
       session()->flash('wrong','Third Subject wrong sched');
     return redirect('/about')->withInput();
   }
	if( (request('subject1')) == (request('subject2')) || (request('subject2')) == (request('subject3')) || (request('subject1')) == (request('subject3')) )
	{
		session()->flash('wrong','Dont input same subject');
		return redirect('/about')->withInput();
	}  
	if( (request('startclass1')) == (request('startclass2')) || (request('startclass2')) == (request('startclass3')) || (request('startclass1')) == (request('startclass3')) )
	{
		session()->flash('wrong','Dont input same time');
		return redirect('/about')->withInput();
	}  
   	if(
   	(subject::where('subject',request('subject1'))
   	->where('startclass',request('startclass1'))
   	->where('course',Auth::user()->course)->exists()) && 
      (subject::where('subject',request('subject2'))
   	->where('startclass',request('startclass2'))
   	->where('course',Auth::user()->course)->exists()) &&
      (subject::where('subject',request('subject3'))
   	->where('startclass',request('startclass3'))
   	->where('course',Auth::user()->course)->exists())
   	)
   	{
   		$newclass = new Enrolsubject;
   		$newclass->subject = $request->subject1;
   		$newclass->course = Auth::user()->course;
   		$newclass->startclass = $request->startclass1;
   		$newclass->endclass = $request->startclass1+1;
   		$newclass->user_id = Auth::user()->id;
   		$newclass->save();
   		$newclass = new Enrolsubject;
   		$newclass->subject = $request->subject2;
   		$newclass->course = Auth::user()->course;
   		$newclass->startclass = $request->startclass2;
   		$newclass->endclass = $request->startclass2+1;
   		$newclass->user_id = Auth::user()->id;
   		$newclass->save();
   		$newclass = new Enrolsubject;
   		$newclass->subject = $request->subject3;
   		$newclass->course = Auth::user()->course;
   		$newclass->startclass = $request->startclass3;
   		$newclass->endclass = $request->startclass3+1;
   		$newclass->user_id = Auth::user()->id;
   		$newclass->save();
   		session()->flash('message','Congratulations');
   		return back();
   	}else{
   		session()->flash('wrong','Something is wrong with your input data');
   		return redirect('/about')->withInput();
   	}
   }else{
      return redirect('/');
   }
}
   public function about(){
      if(Auth::check()){
      $subjects = Enrolsubject::all();
      $subj = Enrolsubject::where('user_id',Auth::user()->id)->exists();
      return view('about',compact('subjects','subj'));
      }else{
          return redirect('/');
      }
   }
   public function welcome(){
        if(Auth::check()){
            return redirect('/about');
        }
        else{
            return view('welcome');
        }
    }
}
