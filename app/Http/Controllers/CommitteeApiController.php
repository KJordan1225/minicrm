<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\PermissionEnum;
use App\Models\Client;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CommitteeApiController extends Controller
{
    public function index()
    {
        $committee = Client::all();
        return response()->json($committee);
    }
}
