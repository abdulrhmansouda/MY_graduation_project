<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function company_store(Request $request)
    {
        //    dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'unique:users', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'description' => ['nullable', 'min:10', 'max:1000'],
            'image' => ['nullable', 'image'],
            'country' => ['required'],
            'city' => ['required'],
            'agree' => [ 'required',],
        ]);
        //    dd($request->all());
        $image = $request->get('imgae');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $image = $image->store('companies', 'images');
        }

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'role' => 'company',
            'password' => Hash::make($request->password),
            'image' => $image,
        ]);

        Company::create([
            'name' => $request->name,
            'user_id' => $user->id,
            'description' => $request->description,
            'country' => $request->country,
            'city' => $request->city,
        ]);



        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function employee_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'unique:users', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'description' => ['nullable', 'min:10', 'max:1000'],
            'image' => ['nullable', 'image'],
            'country' => ['required'],
            'city' => ['required'],
            'agree' => [ 'required',],
        ]);
        //    dd($request->all());
        $image = $request->get('imgae');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $image = $image->store('employees', 'images');
        }

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'role' => 'employee',
            'password' => Hash::make($request->password),
            'image' => $image,
        ]);

        Employee::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'user_id' => $user->id,
            'description' => $request->description,
            'country' => $request->country,
            'city' => $request->city,
        ]);

        session()->flash('success', 'You are sign in successfully.');


        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
