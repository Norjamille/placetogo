<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class SubsciptionController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Subscriptions/Index');
    }
}
