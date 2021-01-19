<?php

namespace App\Http\Controllers;

use App\issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $issues = new issue();

        $issues->issueTitle = $request->title;
        $issues->issueDescription = $request->des;
        $issues->userId = $request->user;
        
        

        $issues->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(issue $issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(issue $issue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, issue $issue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(issue $issue)
    {
        //
    }
}
