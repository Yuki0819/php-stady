<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;//追加
use Illuminate\Support\Facades\Validator;//追加

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tasks.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task_name = $request->input('task_name');
  dd($task_name);

  $rules = [
    'task_name' => 'required|max:100',
];
 
$messages = ['required' => '必須項目です', 'max' => '100文字以下にしてください。'];
 
Validator::make($request->all(), $rules, $messages)->validate();
 

  //モデルをインスタンス化
  $task = new Task;

  //モデル->カラム名 = 値 で、データを割り当てる
  $task->name = $request->input('task_name');

  //データベースに保存
  $task->save();

  //リダイレクト
  return redirect('/tasks');
        //
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
}
