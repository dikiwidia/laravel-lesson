<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function main()
    {
        $datas = User::all();
        return view("user.index", compact("datas"));
    }

    public function create()
    {
        return view("user.create");
    }

    public function store(Request $request)
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $password = $request->input("password");
        $is_admin_flag = $request->input("is_admin_flag");

        // rumus yang harus diikutin
        $inputan = [
            "name" => $name,
            "email" => $email,
            "password" => bcrypt($password),
            "is_admin_flag" => $is_admin_flag ?? false,
        ];
        // Model::create($inputan)
        User::create($inputan);
        return redirect()->route("user.main")->with("success", "Berhasil simpan data");
    }

    public function show($id)
    {
        $data = User::find($id);
        return view("user.show", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $password = $request->input("password");
        $is_admin_flag = $request->input("is_admin_flag");

        // rumus yang harus diikutin
        $data = [
            "name" => $name,
            "email" => $email,
            "is_admin_flag" => $is_admin_flag ?? false,
        ];

        if (!empty($password)) {
            $data["password"] = bcrypt($password);
        }

        $post = User::find($id);
        $post->update($data);
        return redirect()->route("user.main")->with("success", "Berhasil perbarui data");
    }

    public function delete(Request $request)
    {
        $id = $request->input("id");

        User::destroy($id);
        return redirect()->route("user.main")->with("success", "Berhasil perbarui data");
    }
}
