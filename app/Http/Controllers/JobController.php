<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function index()
    {
        return Job::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'summary' => 'required',
            'description' => 'required',
            'status' => 'required',
            'property_id' => 'required'
        ]);

        return Job::create($request->all());
    }

    public function show($id)
    {
        return Job::find($id);
    }

    public function edit(Job $job)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $product = Job::find($id);
        $product->update($request->all());
        return $product;
    }

    public function destroy($id): int
    {
        return Job::destroy($id);
    }
}
