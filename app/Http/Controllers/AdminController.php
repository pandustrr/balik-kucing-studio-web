<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Models\HeroSection;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // ... existing login/auth methods ...

    // Hero Section Management
    public function heroIndex()
    {
        $heroes = HeroSection::all();
        return view('admin.hero.index', compact('heroes'));
    }

    public function heroEdit($id)
    {
        $hero = HeroSection::findOrFail($id);
        return view('admin.hero.edit', compact('hero'));
    }

    public function heroUpdate(Request $request, $id)
    {
        $hero = HeroSection::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'heading' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $hero->title = $request->title;
        $hero->heading = $request->heading;
        $hero->description = $request->description;

        if ($request->hasFile('background_image')) {
            // Delete old image if exists
            if ($hero->background_image) {
                Storage::disk('public')->delete($hero->background_image);
            }
            $path = $request->file('background_image')->store('hero-images', 'public');
            $hero->background_image = $path;
        }

        $hero->save();

        return redirect()->route('admin.hero.index')->with('success', 'Hero section berhasil diperbarui! 🚀');
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah ya, Fresh! 😊',
        ])->onlyInput('username');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function updateUsername(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . Auth::id()],
        ]);

        /** @var User $user */
        $user = Auth::user();
        $user->username = $request->username;
        $user->save();

        return redirect()->route('admin.settings')->with('success', 'Username berhasil diperbarui! 🎉');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);


        /** @var User $user */
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('admin.settings')->with('success', 'Password berhasil diperbarui! 🔒');
    }

    public function updateName(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        /** @var User $user */
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();

        return redirect()->route('admin.settings')->with('success', 'Nama berhasil diperbarui! ✨');
    }

    public function merchandiseIndex()
    {
        return view('admin.merchandise.index');
    }
}
