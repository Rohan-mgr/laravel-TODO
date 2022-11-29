<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\todoList;

class todoListController extends Controller
{
    public function index() {
        return view('welcome', ['items'=>todoList::all()]);
    }
    public function saveTodo(Request $req) {
        $todoObj = new todoList();
        $todoObj->Title = $req->todoItem;
        $todoObj->save();
        return redirect("/");
    }
    public function deleteItem($id) {
        $todo = todoList::find($id);
        $todo->delete();
        return redirect("/");
    }
    public function EditItem($id) {
        $todo = todoList::find($id); 
        
        return view("edit", ['item' => $todo]);
        
    }
    public function updateItem(Request $req, $id) {
        $todo = todoList::find($id);
        $todo->Title = $req->todoItem;
        $todo->save();
        return redirect("/");
    }
}