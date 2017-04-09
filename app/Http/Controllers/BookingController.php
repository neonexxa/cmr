<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Venue;
use App\Status;
use App\Session;
use Auth;

class BookingController extends Controller
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
    *
    *   Changes for History
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function all_booking (Request $request){
        $parameters         = $request->all();
        $bookings           = Booking::all();
        $statuses           = Status::pluck('label','id');
        return view('all_booking',compact('bookings','statuses'));
    }
        
    /**
    *
    *   Changes for Index
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function index (Request $request){
        $parameters = $request->all();
        $bookings = Booking::all()->where('user_id',Auth::id());
        return view('my_booking_history',compact('bookings'));
    }
    
    /**
    *
    *   Changes for Store
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function store (Request $request){
        $parameters = $request->all();

        $booking = new Booking;
        $booking->start             = $parameters['start'];
        $booking->end               = $parameters['end'];
        $booking->venue_id          = $parameters['venue_id'];
        $booking->status_id         = 7;// pending
        $booking->user_id           = Auth::id();
        $booking->session_id        = json_encode($parameters['session_id']);
        $booking->remark            = $parameters['remark'];
        $booking->save();

        return redirect()->route('user_booking.index');
    }
    
    /**
    *
    *   Changes for Create
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function create (Request $request){
        $parameters = $request->all();
        $sessions   = Session::pluck('when','id');
        $venues   = Venue::pluck('name','id');
        return view('booking.add',compact('sessions','venues'));
    }
    
    /**
    *
    *   Changes for Update
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function update (Request $request, $id){
        $parameters = $request->all();
        
        $booking = Booking::find($id);
        $booking->start             = $parameters['start'];
        $booking->end               = $parameters['end'];
        $booking->venue_id          = $parameters['venue_id'];
        $booking->session_id        = json_encode($parameters['session_id']);
        $booking->remark            = $parameters['remark'];
        $booking->save();

        return redirect()->route('user_booking.index');
    }
    
    /**
    *
    *   Changes for Admin Update
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function admin_update (Request $request, $id){
        $parameters = $request->all();
        
        $booking = Booking::find($id);
        $booking->status_id            = $parameters['status_id'];
        $booking->save();

        return redirect()->route('admin_booking.all');
    }
    
    
    /**
    *
    *   Changes for Destroy
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function destroy ($id){
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->route('user_booking.index');
    }
    
    /**
    *
    *   Changes for Show
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function show ($id){
        
    }
    
    /**
    *
    *   Changes for Edit
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function edit ($id){
        $booking        = Booking::find($id);
        $statuses       = Status::pluck('label','id');
        $venues         = Venue::pluck('name','id');
        $sessions       = Session::pluck('when','id');
        $booked_session = [];
        foreach (json_decode($booking->session_id,true) as $bskey => $bsvalue) {
            $booked_session[$bsvalue] = $bsvalue;
        }
        return view('booking.edit',compact('booking','statuses','venues','sessions','booked_session'));
    }
    	
}
