<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

/**
 * Class JobController
 * @package App\Http\Controllers
 */
class JobController extends Controller
{

    /**
     * @return Job[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Job::all();
    }

    /**
     * @param Request $request
     * @return mixed
     */
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

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Job::find($id);
    }


    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        $job->update($request->all());
        return $job;
    }

    /**
     * @param $id
     * @return int
     */
    public function destroy($id): int
    {
        return Job::destroy($id);
    }
}
