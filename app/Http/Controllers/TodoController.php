<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $activity = [
            "date" => date("Y-m-d"),
            "activity" => "Main Bola",
            "checked_flag" => false,
            "note" => "-"
        ];
        Todo::create($activity);
        return view("todo.index");
    }

    public function main()
    {
        $datas = Todo::all();
        return view("todo.index", compact("datas"));
    }

    public function create()
    {
        return view("todo.create");
    }

    public function store(Request $request)
    {
        $date = $request->input("date");
        $activity = $request->input("activity");
        $note = $request->input("note");
        $checked_flag = $request->input("checked_flag");

        // rumus yang harus diikutin
        $inputan = [
            "date" => $date,
            "activity" => $activity,
            "checked_flag" => $checked_flag ?? false,
            "note" => $note
        ];
        // Model::create($inputan)
        Todo::create($inputan);
        return redirect()->route("todo.main")->with("success", "Berhasil simpan data");
    }

    public function show($id)
    {
        $data = Todo::find($id);
        return view("todo.show", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $date = $request->input("date");
        $activity = $request->input("activity");
        $note = $request->input("note");
        $checked_flag = $request->input("checked_flag");

        $data = [
            "date" => $date,
            "activity" => $activity,
            "checked_flag" => $checked_flag ?? false,
            "note" => $note
        ];
        $post = Todo::find($id);
        $post->update($data);
        return redirect()->route("todo.main")->with("success", "Berhasil perbarui data");
    }

    public function delete(Request $request)
    {
        $id = $request->input("id");

        Todo::destroy($id);
        return redirect()->route("todo.main")->with("success", "Berhasil perbarui data");
    }
}
