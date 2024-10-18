<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
  // タスク取得
  public function index(Request $request)
  {
    if ($request->title) {
      $tasks = Task::where('title', 'like', '%' . $request->title . '%')->orderBy('created_at', 'desc')->get();

    }
    $tasks = Task::orderBy('created_at', 'desc')->get();
    return response()->json($tasks);
  }

  // タスク詳細取得
  public function show($id)
  {
    $task = Task::findOrFail($id);
    return response()->json($task);
  }

  // タスク登録
  public function store(Request $request)
  {
    $task = new Task();
    $task->title = $request->title;
    $task->description = $request->description;
    $task->save();
    return response()->json($task, 201);
  }

  // タスク更新
  public function update(Request $request, $id)
  {
    $task = Task::findOrFail($id);
    $task->title = $request->title;
    $task->description = $request->description;
    $task->save();
    return response()->json($task);
  }

  // タスク削除
  public function delete($id)
  {
    $task = Task::findOrFail($id);
    $task->delete();
    return response()->json(null, 204);
  }
}
