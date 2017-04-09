<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;

class SessionController extends Controller
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

        $session = new Session;
        $session->when           = $parameters['when'];
        $session->save();

        return redirect()->route('admin_session.index');
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
        return view('session.add');
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

        $session = Session::find($id);
        $session->when        = $parameters['when'];
        $session->save();

        return redirect()->route('admin_session.index');
    }
    
    /**
    *
    *   Changes for Destroy
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
    
    public function destroy ($id){
        $session = Session::find($id);
        $session->delete();

        return redirect()->route('admin_session.index');
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
        $session = Session::find($id);
        return view('session.edit',compact('session'));
    }
    	
}
