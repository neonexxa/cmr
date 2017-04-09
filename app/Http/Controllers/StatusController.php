<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class StatusController extends Controller
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
    *   Changes for Store
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function store (Request $request){
        $parameters = $request->all();

        $status = new Status;
        $status->label           = $parameters['label'];
        $status->save();

        return redirect()->route('admin_status.index');

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
        return view('status.add');
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

        $status = Status::find($id);
        $status->label        = $parameters['label'];
        $status->save();

        return redirect()->route('admin_status.index');
    }
    
    /**
    *
    *   Changes for Destroy
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function destroy ($id){
        $status = Status::find($id);
        $status->delete();

        return redirect()->route('admin_status.index');
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
        $status = Status::find($id);
        return view('status.edit',compact('status'));
    }
    	
}
