<?php


namespace App\Http\Controllers;
use App\User;
use App\Model\eregistration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eregisterController extends Controller
{
    public function index()
    {
        return view('adminEvent.Eregistration');
    }

   


        public function store(Request $request){

            $events= new eregistration;
        
        
        $events->description = $request->input('description');
        $events->location= $request->input('location');
        $events->time= $request->input('time');
        $events->date= $request->input('date');
        $events->organization=$request->input('organization');
        
        $events->save();
        
        return redirect('/events')->with('status','New Event Registered');
        }



    


public function allevents(){

    $events = eregistration::all();

    
   return view('adminEvent.Eregistration')->with("events", $events);

}


public function registerdelete($id){
    $events =eregistration::findOrFail($id);
    $events->delete();
    
    return redirect('/events')->with('status','Event Deleted Successfully');
    }

}
