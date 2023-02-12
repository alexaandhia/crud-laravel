<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Playlist::where(['playlist', '=', 'day'])->get();

        return view('home.index', compact('data'));
    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $request){
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        //ambil input bagian email dan password
        $user = $request->only('email', 'password');
        if (Auth::attempt ($user)){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('error', 'login failed');  
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

            $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'playlist' => 'required',
            'link' => 'required',
        ]);

        Playlist::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'genre' => $request->genre,
            'playlist' => $request->playlist,
            'link' => $request->link,
        ]);

            return redirect('/')->with('successAdd', 'Create Succeed!');

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
        $data = Playlist::where('id', '=', $id)->firstOrFail();
        return view('home.edit', compact('data'));
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
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'playlist' => 'required',
            'link' => 'required',
        ]);

        Playlist::where('id', '=', $id)->update([
            'title' => $request->title,
            'artist' => $request->artist,
            'genre' => $request->genre,
            'playlist' => $request->playlist,
            'link' => $request->link,
        ]);
        return redirect()->route('home')->with('successUpdate', 'Edit Succeed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Playlist::where('id', '=', $id)->delete();

        return redirect()->back()
        ->with('successDelete','Delete Success!');
    }
}
