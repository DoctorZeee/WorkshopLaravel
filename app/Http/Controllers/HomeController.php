<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        // all digunakan untuk memanggil semua data di table
        $users = User::all();

        // compact digunakan untuk melempar data ke view
        return view ('welcome', compact('users'));
    }

    public function show($id){
        // findorFail digunakan untuk mencari data berdasarkan kolom id
        $user = user::findOrFail($id);

        return view('user-detail',compact('user'));
    }
}
