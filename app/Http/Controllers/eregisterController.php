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

        //     $events= new eregistration;


        // $events->description = $request->input('description');
        // $events->location= $request->input('location');
        // $events->time= $request->input('time');
        // $events->date= $request->input('date');
        // $events->organization=$request->input('organization');
        // $events->image=$request->input('image');




      //store picture

      $this->validate($request,[
       // 'image' => 'required | mimes:jpeg,jpg,png | max:1000',
        'image'=> 'required'
      ]);
$img=$request->image;
      //handle file upload
      if($request -> hasfile('image')){
          //get file name with extension

        //   $file=$request->file('image');
        //   $filenameWithExt=$request->file('image')->getClientOriginalName();
        //   //get just file name
        //   $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //   //get just extension
        //  // $extension=$file->getClientOriginalExtension();
        //   $extension=$request->file('image')->getClientOriginalExtension();
        //   //filename to store
        //  // $fileNameToStore=time().'.'.$extension;
        //  $fileNameToStore=$filename.'_'.time().'.'.$extension;
        //   //upload Image
        //   $file->move('public/uploads',$fileNameToStore);
        //  $path=$request->file('image')->storeAs('public/uploads',$fileNameToStore);
        $file = $request->file('image');
        $contents = $file->openFile()->fread($file->getSize());
        $filenameWithExt=$request->file('image')->getClientOriginalName();
        $data = file_get_contents($file);
        $base64=base64_encode($data);
      }

      else{
          $fileNameToStore='noimage.jpg';
      }

     /* if($request -> hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads', $filename);
        $events->image = $filename;
    } else{
        return $request;
        $events->image = '';
    } */

      //create post

      $events= new eregistration;

      $events->description = $request->input('description');
      $events->location= $request->input('location');
      $events->time= $request->input('time');
      $events->date= $request->input('date');
      $events->organization=$request->input('organization');
      $events->image=$base64;

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
