<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        // query from table 'visitors' using model Visitor
        $visitors = \App\Models\Visitor::all();

        // return view = resources/views/visitors/index.blade.php
        return view('visitors.index', ['visitors' => $visitors]);
    }

    public function create()
    {
        return view('visitors.create');
    }

    public function store(Request $request)
    {
        $visitor = new \App\Models\Visitor();
        $visitor->name = $request->name;
        $visitor->phone = $request->phone;
        $visitor->email = $request->email;
        $visitor->save();
        return redirect()->route('visitors');
    }
}
