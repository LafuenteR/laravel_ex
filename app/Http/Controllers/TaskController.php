<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;
// use App\Http\Controllers\Auth;

class TaskController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    function createNewList(Request $request){
    $new_list = new Task();
    $new_list->name = $request->name;
    $new_list->description = $request->description;
    $new_list->save();
    $request->session()->Flash('message','Task added successfully');
    return redirect('/home');
	}
	function showList(){
    // if(Auth::user()){
    $tasks = Task::all();
	return view('todolist.createToDoList', compact('tasks'));
    // }else{
        // return redirect("/login");
    // }
    }
    function deleteList($id){
	$task_tbd = Task::find($id);
	$task_tbd->delete();
	return redirect('/home');
	}
}
