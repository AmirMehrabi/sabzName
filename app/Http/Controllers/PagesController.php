<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function showIndex(){
    	return View('index');
    }

    public function showBooks(){
      $books = Book::all();

      function getExcerpt($str, $startPos=0, $maxLength=100) {
      	if(strlen($str) > $maxLength) {
      		$excerpt   = substr($str, $startPos, $maxLength-3);
      		$lastSpace = strrpos($excerpt, ' ');
      		$excerpt   = substr($excerpt, 0, $lastSpace);
      		$excerpt  .= ' ...';
      	} else {
      		$excerpt = $str;
      	}

      	return $excerpt;
      }
      foreach ($books as $book) {
        $book->description = getExcerpt($book->description, 0, 1000);
      }
    	return View('books', compact('books'));
    }


    public function showBook($id){
      $book = Book::findOrFail($id);
      return View('book', compact('book'));
    }

    public function showAboutUs(){
    	return View('about');
    }

    public function showContactUs(){
    	return View('contact');
    }

    public function authTest(){
		if (Auth::user()) {
		    echo "test";
		}
		else {
			echo "not logged in";
		}
    }
}
