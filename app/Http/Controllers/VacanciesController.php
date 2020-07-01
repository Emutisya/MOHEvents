<?php

namespace App\Http\Controllers;

use App\User;
use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $id = Auth::user()->id;
        $vacancies = Vacancy::orderBy('created_at', 'asc')->where('user_id',$id)->paginate(3);

        return view('Vacancies.index')->with('vacancies', $vacancies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Vacancies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;

        $this->validate($request, [

            'title' => 'required',

            'description' => 'required'
        ]);

        //create post

        $vacancy = new Vacancy;

        $vacancy->user_id = $id;

        $vacancy->title = $request->input('title');

        $vacancy->description = $request->input('description');


        $vacancy->save();

        return redirect('/vacancy')->with('success', 'Vacancies updated!');
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
        $vacancy = Vacancy::find($id);
        // return view('Vacancies.edit');

        return view('Vacancies.edit')->with('vacancy', $vacancy);
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

        $this->validate($request, [

            'title' => 'required',

            'description' => 'required'
        ]);

        //create post

        $vacancy = Vacancy::find($id);

        $vacancy->title = $request->input('title');

        $vacancy->description = $request->input('description');


        $vacancy->save();

        return redirect('/vacancy')->with('success', 'Vacancies updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancy = Vacancy::find($id);

        $vacancy->delete();

        return redirect('/vacancy')->with('success', 'vacancy removed');
    }
}
