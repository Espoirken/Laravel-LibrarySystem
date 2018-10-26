<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use App\Category;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::find(1);
        
        $books = Book::orderBy('id','asc')->paginate(8);
        return view('admin.books.index')->with('books', $books)
                                        ->with('category', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'book_title' => 'required',
            'category_id' => 'required',
            'author' => 'required',
            'source' => 'required',
            'publisher_name' => 'required',
            'copyright_year' => 'required',
            'status' => 'required',
        ]);
        $books = new Book;
        $books->book_title = $request->book_title;
        $books->category_id = $request->category_id;
        $books->author = $request->author;
        $books->source = $request->source;
        $books->publisher_name = $request->publisher_name;
        $books->copyright_year = $request->copyright_year;
        $books->status = $request->status;
        $books->save();
        toastr()->success('The book is created successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Book::find($id);
        return view('admin.books.edit')->with('books', $books);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'book_title' => 'required',
            'category_id' => 'required',
            'author' => 'required',
            'source' => 'required',
            'publisher_name' => 'required',
            'copyright_year' => 'required',
            'status' => 'required',
        ]);

        $books = Book::find($id);
        $books->book_title = $request->book_title;
        $books->category_id = $request->category_id;
        $books->author = $request->author;
        $books->source = $request->source;
        $books->publisher_name = $request->publisher_name;
        $books->copyright_year = $request->copyright_year;
        $books->status = $request->status;
        $books->save();
        toastr()->success('The book is updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Book::find($id);
        $books->delete();
        toastr()->error('The book is deleted!');
        return redirect()->back();
    }
}
