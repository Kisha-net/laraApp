<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// class Task
// {
//     public function __construct(
//         public int $id,
//         public string $title,
//         public string $description,
//         public ?string $long_description,
//         public bool $completed,
//         public string $created_at,
//         public string $updated_at
//     ) {
//     }
// }

// $tasks = [
//     new Task(
//         1,
//         'Buy groceries',
//         'Task 1 description',
//         'Task 1 long description',
//         false,
//         '2023-03-01 12:00:00',
//         '2023-03-01 12:00:00'
//     ),
//     new Task(
//         2,
//         'Sell old stuff',
//         'Task 2 description',
//         null,
//         false,
//         '2023-03-02 12:00:00',
//         '2023-03-02 12:00:00'
//     ),
// ];

Route::get('/', function () {
    return redirect() -> route('tasks.index');
}) -> name('tasks.index');

Route::get('/tasks', function () {
    return view('index',[
        // 'tasks'=> \App\Models\Task::all()
        'tasks'=> \App\Models\Task::latest()->where('completed',true)->get()
    ]);
}) -> name('tasks.index');

Route::view('/tasks/create','create') ->name('tasks.create');

Route::get('/tasks/{id}',function($id) {
    // \App\Models\Task::find($id);
    // $task = collect($tasks) -> firstWhere('id',$id);
        // if(!$task){
        //     abort(Response::HTTP_NOT_FOUND);
        // }
      return view('show',['task'=>\App\Models\Task::findOrFail($id)]);
})-> name('task.show');

Route::post('/tasks', function () {
    dd('this is the store route');
}) -> name('tasks.store');

Route::fallback( function () {
    return 'Still got somewhere';
});



