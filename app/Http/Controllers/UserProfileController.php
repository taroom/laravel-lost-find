<?php

namespace App\Http\Controllers;

use App\Barang;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::find(Auth::id());
        return view('userprofile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataBaru = true;
        return view('user-profile.form', compact('dataBaru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $p = new Profile();

        $p->nama = $request->nama;
        $p->alamat = $request->alamat;
        $p->no_hp = $request->no_hp;


        $p->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        $dataBaru = false;
        return view('user-profile.form', compact('dataBaru', 'user-profile'));
    }

    public function update_profile()
    {
        $dataBaru = false;
        $model = UserProfile::find(Auth::id());

        if ($model == null) {
            $model = new UserProfile();
            $model->id = Auth::id();
            $model->nama = Auth::user()->name;
            $model->alamat = '-';
            $model->no_hp = '-';
            $model->save();
        }

        return view('user-profile.form', compact('dataBaru', 'model'));
    }

    public function process_profile(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $model = UserProfile::find(Auth::id());

        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->no_hp = $request->no_hp;


        $model->save();
        return redirect()->route('user-profile.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $p = new Profile();

        $p->nama = $request->nama;
        $p->alamat = $request->alamat;
        $p->no_hp = $request->no_hp;


        $p->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
