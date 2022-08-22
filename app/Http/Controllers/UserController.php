<?php

namespace App\Http\Controllers;

use App\Models\ActiveCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

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
        if (\auth()->check()) {
            \auth()->logout();
        }
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
            'phone' => ['required', 'digits_between:10,14', 'numeric', 'unique:users', 'regex:/(\+98|0)?9\d{9}/i'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        User::create($validate_data);

        session()->flash('phone', $validate_data['phone']);

        return Redirect::route('verify');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function attempt(Request $request)
    {
        $validate_data = $request->validate([
            'phone' => ['required', 'digits_between:10,14', 'numeric','regex:/(\+98|0)?9\d{9}/i',
                Rule::in(User::all()->pluck('phone')->toArray())
                ],
        ]);

        session()->flash('phone', $validate_data['phone']);

        return Redirect::route('verify');

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

    public function getPhoneVerify()
    {
        if (!session()->has('phone')) {
            return redirect()->back();
        }

        session()->flash('phone', session('phone'));

        // Get user
        $user = User::wherePhone(session('phone'))->first();

        // TODO Generate code and Store, Send sms
        $time = ActiveCode::generateCode($user);

        session()->flash('user', $user->id);

        return view('auth.verify', ['time' => $time]);
    }

    public function postPhoneVerify(Request $request)
    {
        $code = $request->validate([
            'code' => ['required', 'numeric','min:100000']
        ])['code'];


        $user = User::find(session('user'));

        $verified = ActiveCode::verifyCode($code, $user);

        if ($verified) {
            Auth::login($user);
            $user->activeCode()->delete();
            $user->update([
                'phone_verified_at' => now(),

            ]);
            return \redirect('/');
        } else{
            session()->flash('user', $user->id);
            return \redirect()->back()->withErrors(['code' => 'کد نامعتبر است.']);
        }

    }
}
