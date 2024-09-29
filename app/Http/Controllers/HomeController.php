<?php

namespace App\Http\Controllers;

use App\Models\restaurantTableBook;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.index');
    }

    // restaurant_book_list
    function restaurant_book_list(){
        $restaurant_book_list = restaurantTableBook::all();
        return view('backend.restaurantBookList.index',[
            'restaurant_book_list'=>$restaurant_book_list,
        ]);
    }
    // restaurant_book_destroy
    function restaurant_book_destroy($id){
        restaurantTableBook::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
