<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Book;
use App\Author;

class BookController extends Controller
{
    //
    public function index()
    {

        return Book::with('authors')->paginate(20);
    }

    public function store(BookRequest $request)
    {
        //Выбирает из входящего массива  авторов , которые есть в бд
        $k=0;
        for($i=0;$i<count($request->authors_id);$i++)
        {
            if(Author::find($request->authors_id[$i]))
            {
              $arr[$k]=$request->authors_id[$i];
              $k++;
            }
        }
        $book=new Book;
        $book->name=$request->name;
        $book->page_count=$request->page_count;
        $book->save();
        $book->authors()->attach($arr);
        return $book;
    }

    public function show(Book $book)
    {
        return $book=Book::with('authors')->findOrFail($book);
    }

    public function update(BookRequest $request,$id)
    {
        $book=Book::findOrFail($id);
        $book->fill($request->except(['id']));
        $book->save();
        return response()->json($book);
    }

    public function destroy(BookRequest $request,$id)
    {
        $book=Book::findOrFail($id);
        if($book->delete()) return response(null,204);
        $book->authors()->sync([$id]);
    }
}
