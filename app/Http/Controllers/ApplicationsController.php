<?php

namespace App\Http\Controllers;

use App\Application;
use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Facades\Auth;
use finfo;
class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $id = Auth::user()->id;
        $applications = Application::orderBy('created_at', 'asc')->paginate(3);
        $Vacancies = Vacancy::pluck('title', 'id');
        return view('applications.index',compact('applications', 'Vacancies'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $application = Application::find($id);

        $application->delete();

        return redirect('/application')->with('success', 'Application Handled');
    }

    public function download($id)
    {

        $application = Application::find($id);


         $image = $application->CVfile; // your base64 encoded
         $image = str_replace('data:image/jpeg;base64,', '', $image);
         $image = str_replace(' ', '+', $image);
         $imageName = str_random(10).'.'.'jpeg';
         \File::put(storage_path(). '/' . $imageName, base64_decode($image));
         $path = storage_path().'/'.$imageName;
         if (file_exists($path)) {
             return response()->download($path);
         }

    }



}