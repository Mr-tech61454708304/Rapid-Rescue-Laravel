<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
public function adminsignup(Request $request)
{
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:admins,email',
        'password' => 'required|min:6',   // ⬅️  yahan se confirmed hata diya
    ]);

    \App\Models\Admin::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => \Hash::make($request->password),
    ]);

    return redirect()->route('adminlogin')->with('success', 'Account created!');
}





public function movieupload(Request $req){

    $movieupload = DB::table('movies')->insert([

        'title'=>$req->title,
        'poster'=>$req->poster,
        'description'=>$req->description,
        'release_date'=>$req-> release_date,
    ]);

     return redirect()->route('admindashboard');
}


 // Movie upload form (GET)
    public function createMovie()
    {
        return view('admin.movies.create'); // form ka view
    }

    // Movie store karna (POST)
    public function storeMovie(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'release_date' => 'nullable|date',
        ]); 



        $posterPath = null;

        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public'); // images ko storage/app/public/posters me save karega
        }

        // Movie create karen
        Movie::create([
            'title' => $request->title,
            'poster' => $posterPath,
            'description' => $request->description,
            'release_date' => $request->release_date,
        ]);

        return redirect()->route('movies.index')->with('success', 'Movie uploaded successfully.');


    }

  

public function moviesdisplay()
{
    $movies = DB::table('patients')->get(); // Query Builder
    return view('adminlayout.index', ['data' => $movies]);
}

public function deletemovie($id)
{
    DB::table('movies')->where('id', $id)->delete();
    return redirect()->route('admindashboard')->with('success', 'Movie deleted successfully');
}

public function editmovie($id)
{
    $movie = DB::table('movies')->where('id', $id)->first();
    return view('adminlayout.editmovie', compact('movie'));
}

public function updatemovie(Request $request, $id)
{
    // Validate karna (optional)
    $request->validate([
        'title' => 'required|string|max:255',
        'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'description' => 'nullable|string',
        'release_date' => 'nullable|date',
    ]);

    $data = [
        'title' => $request->title,
        'description' => $request->description,
        'release_date' => $request->release_date,
    ];

    if ($request->hasFile('poster')) {
        $posterPath = $request->file('poster')->store('posters', 'public');
        $data['poster'] = $posterPath;
    }

    DB::table('movies')->where('id', $id)->update($data);

    return redirect()->route('admindashboard')->with('success', 'Movie updated successfully');
}


}

