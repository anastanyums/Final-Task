<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
use App\authors;
use App\booksCategory;

class BooksController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $books = books::all();
    return view('booksList', ['books'=> $books]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    $auths = authors::all();
    $cats = booksCategory::all();

    return view('addBooks', ['auths' => $auths, 'cats'=> $cats ]);

      //return "Create Function called";
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $book = new books();

    $book->bookTitle = $request->title;
    $book->edition = $request->edition;
    $book->authId = authors::where('name', $request->author)->first()->authId;
    $book->catId = booksCategory::where('catName', '=', $request->cat)->first()->catId;
    $book->totalAvail = $request->booksAvail;

    $book->save();
    return redirect('/home');

  }

  /**
   * Display the specified resource.
   *
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $book = books::where ('bookId', $id)->first();
    
    $auths = authors::all();
    $cats = booksCategory::all();

    return view('editBook', ['book' => $book, 'auths' => $auths, 'cats'=> $cats ]);
    books::where('bookId', $id)->show();
    return view('editBook');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function edit(booksCategory $booksCategory)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function update($id, Request $request)
  {

    books::where('bookId', $id)
          ->update([
            'bookTitle' => $request->title,
            'edition' => $request->edition,
            'authId' =>  authors::where('name', $request->author)->first()->authId,
            'catId' => booksCategory::where('catName', '=', $request->cat)->first()->catId,
            'totalAvail' => $request->booksAvail
            ]);
            return redirect('/booksList');
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\booksCategory  $booksCategory
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    books::where('bookId', $id)->delete();
    return redirect('/booksList');
  }
}
