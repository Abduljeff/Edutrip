<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Category;
use App\Reservation;
use App\User;
use Auth;
use Calendar;

class IndexController extends Controller
{
    public function index(){
    	//$categoriesAll = Category::get();
    	$categoriesAll = Category::where(['parent_id'=>0])->get();

    	// for all events	
    	$eventsAll = Event::where(['status'=>1])->orderBy('created_at','DESC')->get();
    	return view('index')->with(compact('eventsAll','categoriesAll'));
    }

    public function search(Request $request){
    	$query = $request->input('query');
    	$search_results = Event::where('event_name', 'like', "%$query%")->paginate(10);

    	//$categoriesAll = Category::get();
    	$categoriesAll = Category::where(['parent_id'=>0])->get();

    	// for all events
    	$eventsAll = Event::orderBy('id','DESC')->get();
    	return view('events.search_result')->with(compact('eventsAll','categoriesAll','search_results'));
    }
}
