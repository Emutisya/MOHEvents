<?php

namespace App\Http\Controllers;

use App\Application;
use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        // $pathToFile=public_path('\cvs\public\cvs/');
        // $file_name=$application->CVfile;
        // $download_name='Download-'.$file_name;
        $data = $application->CVfile;
        return response()->make($data, 200, array('Content-type' => $application->mime, 'Content-length' => $application->size));


        // return response()->make($application->CVfile, 200, array(
        //     'Content-Type' => ($application->mime)->buffer($data)
        // ));

        // return response()->download($pathToFile.$file_name, $download_name);

            // return Storage::download($application->CVfile);
       // $url = Storage::url($application->CVfile);
    }



}
