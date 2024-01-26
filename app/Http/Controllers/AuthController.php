<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function loginIndex()
    {
        return view('Auth.login');
    }

    public function registerIndex()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
        
        if (session()->get("role") != "admin") {
            return redirect("/noakses")->with("failed", "tidak ada akses");
        }
        return view('Admin.register');
    }

    public function register(Request $request)
    {
        $getUser = DB::table("users")->where("email", $request->email)->first();
        if ($getUser != null) {
            return redirect("/registerIndex")->with("failed", "email sudah terdaftar");
        }

        $getnip = DB::table("users")->where("id", $request->id)->first();
        if ($getnip != null) {
            return redirect("/registerIndex")->with("failed", "NIP sudah terdaftar");
        }

        DB::table("users")->insert([
            "name" => $request->name,
            "email" => $request->email,
            "role" => "admin",
            "password" => Hash::make($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect("/registerIndex")->with("success", "Berhasil Mendaftar");
    }

    public function login(Request $request)
    {   

        $data = DB::table("users")->where("email", $request->email)->first();

        if ($data == null) {

            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        if ($data->role != 'admin') {
            return redirect("/loginIndex")->with("failed", "Anda tidak memiliki akses sebagai admin");
        }
        

        if (Hash::check($request->password, $data->password)) {

            $request->session()->put('remember_token', $data->remember_token);
            $request->session()->put('name', $data->name);
            $request->session()->put('role', $data->role);
            $request->session()->put('id', $data->id);

            return redirect("/dashboard")->with("success", $request->session()->get("remember_token"));
        }

        return redirect("/loginIndex")->with("failed", "gagal login");
    }


    public function logout(Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/")->with("failed", "gagal login");
        }
        $request->session()->flush();
        
        return redirect("/")->with("success", "berhasil logout");
    }
}