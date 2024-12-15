<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class DirectoryController extends Controller
{
    public function showDirectory()
    {
        $users = User::orderBy('last_name', 'asc')
                        ->orderBy('first_name', 'asc')
                        ->paginate(5);

        return view('directory.showDirectory', compact('users'));
    }
}
