<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PelangganAdminController extends Controller
{
    public function index()
    {
        $pelanggan = User::where('role_id', 3)->paginate(10);

        return view('admin.pelanggan', compact('pelanggan'));
    }
}
