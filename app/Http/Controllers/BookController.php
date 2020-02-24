<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Book;
use App\Author;
/**
 * @group Books
 *
 * APIs for managing books
 */

class BookController extends Controller
{
    //
    /**
     *Show all books
     *
     *
     */

    public function index()
    {

        return Book::with('authors')->paginate(20);
    }




    /**
     * Store Book
    * @bodyParam name string required Name of book .Example: Мастер и маргарита
    * @bodyParam page_count int required Count pages for books.Example:345
    * @bodyParam authors_id array Array with authors id from table Authors.Example: authors_id[0] 1
     * @response {
     *  "name": "Мастер и Маргарита",
     *  "page_count": "355",
     *  "id": 5
     * }
    */
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



    /**
     * Show Book by ID
     * @urlParam id int required Id of book
     * @response {
     *   "id": 3,
     *   "name": "Одноэтажная Америка",
     *   "page_count": 333,
     *   "authors": [
     *   {
     *   "id": 1,
     *   "name": "Илья",
     *   "surname": "Арнольдович",
     *   "lastname": "Ильиф"
     *   },
     *   {
     *   "id": 2,
     *   "name": "Евгений",
     *   "surname": "Петрович",
     *   "lastname": "Петров"
     *   }
     *  ]
     *  }
     */

    public function show(Book $book)
    {
        return $book=Book::with('authors')->findOrFail($book);
    }




    /**
     * Update Book
     * @urlParam id int required Id of book
     * @bodyParam name string required Name of book .Example: Мастер и маргарита
     * @bodyParam page_count int required Count pages for books.Example:345
     * @bodyParam id int required Id of book
     * @response {
     *  "name": "Мастер и Маргарита",
     *  "page_count": "355",
     *  "id": 5
     * }
     */
    public function update(BookRequest $request,$id)
    {
        $book=Book::findOrFail($id);
        $book->fill($request->except(['id']));
        $book->save();
        return response()->json($book);
    }



    /**
     * Delete Book
     * @urlParam id int required Id of book
     * @bodyParam id int required Id of book
     */
    public function destroy(BookRequest $request,$id)
    {
        $book=Book::findOrFail($id);
        if($book->delete()) return response(null,204);
        $book->authors()->sync([$id]);
    }
}
