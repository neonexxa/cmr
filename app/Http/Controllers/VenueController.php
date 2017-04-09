<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;
use App\Status;
use App\Session;

class VenueController extends Controller
{
    /**
    *
    *   Changes for Index
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function index (Request $request){
        $parameters = $request->all();
        return redirect()->route('admin_venue.all_config');
    }
    
    /**
    *
    *   Changes for Conf
    *   Description :   setting for status and session through session and status controller
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function all_config (Request $request){
        $parameters = $request->all();
        $statuses   = Status::all();
        $sessions   = Session::all();
        $venues     = Venue::all();
        return view('all_config',compact('statuses','sessions','venues'));
    }

    /*
    *
    *   Changes for Store
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function store (Request $request){
        $parameters = $request->all();

        $venue = new Venue;
        $venue->name            = $parameters['name'];
        $venue->location        = $parameters['location'];
        $venue->status_id       = $parameters['status_id'];
        $venue->save();

        return redirect()->route('admin_venue.index');
    }
    
    /*
    *
    *   Changes for Create
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function create (Request $request){
        $parameters = $request->all();
        $statuses   = Status::pluck('label','id');
        return view('venue.add',compact('statuses'));
    }
    
    /*
    *
    *   Changes for Update
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function update (Request $request, $id){
        $parameters = $request->all();
        $venue = Venue::find($id);
        $venue->name            = $parameters['name'];
        $venue->location        = $parameters['location'];
        $venue->status_id       = $parameters['status_id'];
        $venue->save();

        return redirect()->route('admin_venue.index');
    }
    
    /*
    *
    *   Changes for Destroy
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function destroy ($id){
        $venue = Venue::find($id);
        $venue->delete();

        return redirect()->route('admin_venue.index');
    }
    
    /*
    *
    *   Changes for Show
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function show ($id){
        
    }
    
    /*
    *
    *   Changes for Edit
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function edit ($id){
        $venue = Venue::find($id);
        $statuses   = Status::pluck('label','id');
        return view('venue.edit',compact('venue','statuses'));
    }
        
}
