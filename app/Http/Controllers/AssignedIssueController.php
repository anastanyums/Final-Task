<?php

namespace App\Http\Controllers;
use App\books;

use Illuminate\Http\Request;

class AssignedIssueController extends Controller
{
    public function index()
  {
    $books = books::all();
    return view('assignedIssues', ['books'=> $books]);
  }
}
