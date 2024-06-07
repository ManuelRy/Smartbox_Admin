<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Locker;

class AdminController extends Controller
{
    public function dashboard()
    {
        $userCount = User::count();
        $lockerCount = Locker::count();

        return view('admin.dashboard', compact('userCount', 'lockerCount'));
    }
}
