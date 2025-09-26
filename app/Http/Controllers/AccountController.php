<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Fetch posts created by the logged-in user
        $userPosts = Post::where('userID', $user->id)
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('account', [
            'user' => $user,
            'userPosts' => $userPosts,
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
