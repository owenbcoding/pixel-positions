<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $employerAttributes = $request->validate([
            'employer_name' => ['required'],
            'logo' => ['required', File::types(['png', 'jpg', 'webp'])],
        ]);

        $user = User::create($userAttributes);

        if ($user) {
            $logoPath = $request->file('logo')->store('logos');
            $user->employer()->create([
                'name' => $employerAttributes['employer_name'],
                'logo' => $logoPath,
            ]);

            Auth::login($user);
            return redirect('/');
        } else {
            return back()->withErrors(['msg' => 'User creation failed']);
        }
    }
}