<?php

namespace App\Http\Controllers;

use App\Http\Requests\job\JobStoreRequest;
use Illuminate\Http\Request;

class MyJobController extends Controller
{
    public function __construct()
    {
//        dd(1);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('my_job.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('my_job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobStoreRequest $request)
    {
        $request->user()->employer->jobs()->create($request->validated());

        return redirect()->route('my-jobs.index')->with('success', 'Job has been created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
