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
        $events->image=$request->input('image');

        $events->save();

        return redirect('/events')->with('success','New Event Registered');
        }






public function allevents(){

    $events = eregistration::all();


   return view('adminEvent.Eregistration')->with("events", $events);

}


public function registerdelete($id){
    $events =eregistration::findOrFail($id);
    $events->delete();

    return redirect('/events')->with('success','Event Deleted Successfully');
    }



        
    public function registeredit(Request $request, $id)
    {
    
        $events = eregistration ::findOrFail( $id);
        return view('adminEvent.events-edit')->with("events", $events);
    
    
    }

    
    
    public function registerupdate(Request $request, $id){
        $events= eregistration::find($id);

        $events->description = $request->input('description');
        $events->location= $request->input('location');
        $events->time= $request->input('time');
        $events->date= $request->input('date');
        $events->organization=$request->input('organization');
   


   
    $events->update();
    
    return redirect('/events')->with('success','Your Data is updated');
    }



}
