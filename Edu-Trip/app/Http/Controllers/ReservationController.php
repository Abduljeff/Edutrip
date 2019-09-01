<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Image;
use App\Event;
use App\Category;
use App\Reservation;
use Calendar;
use Carbon\Carbon;

class ReservationController extends Controller
{
  public function schedATrip(Request $request, $id = null){
    // if(!Auth::check()) 
    // {
    //   return redirect('/login-register')->with('flash_message_error','You need to login first!');
    // }
    if($request->isMethod('post')){
      $user = Auth::user();
      $data = $request->all();
      $res = new Reservation;
      $res->current_id = $user->id;
      $res->owner_id = $data['owner_id'];
      $res->event_id = $data['event_id'];
      $res->title = $data['event_name'];
      $res->start_date = $data['date'];
      $res->nop = $data['nop'];
      $res->save();
    		//return view('/');
      return redirect()->back()->with('flash_message_success','Reservation created successfully wait for approval!');
    }

    $categoriesAll = Category::where(['parent_id'=>0])->get();
        // Event detail
    $eventSched = Event::where(['id'=>$id])->first();
    return view('events.reservation')->with(compact('eventSched','categoriesAll'));
  }

  public function viewReservation(Request $request){
    if(Auth::user()->admin == 2){
      $reservations = Reservation::get();
      return view('admin.reservations.view_reservations')->with(compact('reservations'));
    }if(Auth::user()->admin == 1){
      $reservations = Reservation::where(['owner_id'=>Auth::user()->id])->get();
      return view('owner.reservations.view_reservations')->with(compact('reservations'));
    }
  }

  public function myReservation(){
    // if(!Auth::check()) 
    // {
    //   return redirect('/login-register')->with('flash_message_error','You need to login first!');
    // }
    $res = [];
    $user = Auth::user();
    $data = Reservation::where(['status'=>1, 'current_id'=>$user->id])->get();
    if($data->count()){
      foreach ($data as $key => $value) {
        $res[] = Calendar::event(
          $value->title,
          true,
          new \DateTime($value->start_date),
          new \DateTime($value->end_date.' +1 day'),
          null,
                    // Add color and link on event
          [
            'color' => '#f05050',
          ]
        );
        echo $value->started_date->subDays(3);
      }
    }
    $calendar = Calendar::addEvents($res);
    $categoriesAll = Category::where(['parent_id'=>0])->get();
    return view('events.my_reservations')->with(compact('categoriesAll','calendar','data','cancel'));
  }
}
