<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::all()->toArray();
        return view('adminFeedback.viewFeedback', compact('feedback'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);
        $feedback = new Feedback([
            'name' => $request->get('name'),
            'email' => $request ->get('email'),
            'comment' => $request -> get('comment')
        ]);
        $feedback->save();
        return redirect()->route('feedback')->with('success','Form Submitted Successfully');*/
        $feedback= new Feedback();

        $feedback->name= $request->input('name');
        $feedback->email = $request->input('email');
        $feedback->comment= $request->input('comment');
       
       
        $feedback->save();
    
       return redirect()->route('feedback.create')->with('success', 'Your Comment has been saved successfully.Thankyou for your Contribution to the Ministry Of Health,Kenya.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect()->route('feedback.index')->with('success','Comment Deleted Successfully');
    }
}
