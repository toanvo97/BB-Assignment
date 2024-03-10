<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('client.pages.login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (blank($user)) {
            return redirect()->back()->with(['error' => __('your_email_is_invalid')]);
        }

        try {
            if (!Hash::check($request->get('password'), $user->password)) {
                return redirect()->back()->with(['error' => 'Invalid Credentials !']);
            }

            Sentinel::authenticate($request->all());

            return redirect()->route('product.index')->with(['success' => 'Login successfully']);
        } catch (NotActivatedException $e) {
            return redirect()->back()->with(['error' => __('your_account_is_not_activated')]);
        }
    }

    public function showRegistrationForm()
    {
        return view('client.pages.signup');
    }

    public function register(SignupRequest $request)
    {
        try {

            $user = User::where('email', $request->email)->first();

            if(!blank($user)){
                $user->password             = bcrypt($request->password);
                $user->name                 = $request->name;
                $user->save();

                $activation         = Activation::create($user);
                Activation::complete($user, $activation->code);
            }

            $user               = Sentinel::register($request->all());
            $role               = Sentinel::findRoleBySlug('user');
            $activation         = Activation::create($user);
            Activation::complete($user, $activation->code);
            $role->users()->attach($user);
            return redirect()->route('user.client.login.index')->with('success', 'Sign up new user successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', __('Error register new user'));
        }
    }

    public function logout()
    {
        Sentinel::logout();

        return redirect()->back();
    }
}
