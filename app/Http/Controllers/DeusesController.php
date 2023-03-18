<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deus;

class DeusesController extends Controller
{
    public function index()
    {
        $deuses = Deus::all();

        return view('deuses.index', compact('deuses'));
    }


    public function create()
    {
        return view('deuses.create');
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
