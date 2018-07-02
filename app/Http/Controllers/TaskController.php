<?php

namespace App\Http\Controllers;
use DB;
use \App\User;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function form(Request $request){

        if ($request->task_name =='test') return redirect('/N');

        if (is_null($request->task_name) || is_null($request->g)) return redirect('/tasklist');
            DB::table('tasks')->insert([
            'name' => $request->task_name,
            'g' => $request->g
        ]);
        return redirect("/tasklist");
    }
    public  function  delete(Request $request){
        $taskId = request()->get("id");
        DB::delete("delete from tasks where id = ?", [$taskId]);
        return redirect("/tasklist");
    }

    public  function sort(Request $request){

        $searchKey = request()->get("searchkey");
        if($searchKey){
            $tasks = DB::select("select * from tasks where g like ?",["%$searchKey%"]);
        }else{
            $tasks = DB::select("select * from tasks");
        }
        return view("tasklist", [
            "message" => "hello world",
            "tasks" => $tasks
        ]);

    }

}


