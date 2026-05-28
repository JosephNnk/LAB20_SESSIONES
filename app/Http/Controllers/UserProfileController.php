<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserProfileController extends Controller
{
    public function show(): View
    {
        $user = Auth::user();

        if (! $user) {
            abort(403);
        }

        return view('user.profile', compact('user'));
    }
}
