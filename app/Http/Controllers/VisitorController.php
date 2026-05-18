<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        // query from table 'visitors' using model Visitor
        $visitors = \App\Models\Visitor::all();
        $deletedvisitors = \App\Models\Visitor::onlyTrashed()->get();

        // return view = resources/views/visitors/index.blade.php
        return view('visitors.index', compact('visitors', 'deletedvisitors'));
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

        auth()->user()->notify(new \App\Notifications\VisitorCreatedNotification());

        return redirect()->route('visitors');
    }



    public function show(\App\Models\Visitor $visitor)
    {
        return view('visitors.show', compact('visitor'));
    }


    public function edit(\App\Models\Visitor $visitor)
    {
        // return to views - resources/views/visitors/edit.blade.php
        return view('visitors.edit', compact('visitor'));
    }

    public function update(\App\Models\Visitor $visitor, Request $request)
    {
        // update data to table 'visitors' using model Visitor Method POPO
        $visitor->name = $request->name;
        $visitor->phone = $request->phone;
        $visitor->email = $request->email;
        $visitor->save();
        
        // redirect to visitors.index
        return redirect()->route('visitors');
    }

    public function delete(\App\Models\Visitor $visitor)
    {
    $visitor->delete();


    auth()->user()->notify(new \App\Notifications\VisitorDeletedNotification());
    return redirect()->route('visitors');

    }

}

