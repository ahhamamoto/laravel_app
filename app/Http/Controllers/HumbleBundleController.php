<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HumbleBundle;

class HumbleBundleController extends Controller
{
    public function index()
    {
        $humbleBundles = HumbleBundle::all();
        return view('humblebundle.index')->with('humbleBundles', $humbleBundles);
    }

    public function show()
    {
        return 'humble bundle show';
    }

    public function create()
    {
        return view('humblebundle.create');
    }

    public function store(Request $request)
    {
        HumbleBundle::create($request->all());
        return redirect('/humblebundle')->with('flash_message', 'Humble Bundle entry created successfully!');
    }

    public function edit()
    {
        return 'humble bundle edit';
    }

    public function update()
    {
        return 'humble bundle update';
    }

    public function destroy()
    {
        return 'humble bundle destroy';
    }
}
