<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'digits_between:10,14', 'numeric', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        // generate code and save to database
        // send code sms

        session()->flash('phone', $validate_data['phone']);
        return view('auth.verify');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function attempt(Request $request)
    {
        $validate_data = $request->validate([
            'phone' => ['required', 'digits_between:10,14', 'numeric', 'in:users'],
        ]);
        session()->flash('phone', $validate_data['phone']);
        return view('auth.verify');
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
        //
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
        //
    }

    public function verify()
    {
        if (!session('phone')) {
            return redirect()->back();
        }
        return view('auth.verify');

    }
}
