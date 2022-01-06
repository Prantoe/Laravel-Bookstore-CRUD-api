<?php

namespace App\Http\Controllers;

use App\Models\BookAuthor;
use Illuminate\Http\Request;
use App\Http\Resources\BookAuthorResource;

class BookAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BookAuthorResource::collection(BookAuthor::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookAuthorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function show(BookAuthor $bookAuthor)
    {
    return new BookAuthorResource($bookAuthor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function edit(BookAuthor $bookAuthor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookAuthorRequest  $request
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookAuthor $bookAuthor)
    {
          $bookAuthor->update([
            'book_id' => $request->input('book_id')
        ]);

        return new BookAuthorResource($bookAuthor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookAuthor $bookAuthor)
    {
          $bookAuthor->delete();
        return response(null, 204);
    }
}
