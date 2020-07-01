<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Vacancy;
use App\Application;
use App\Post;
use Illuminate\Support\Facades\Http;
use App\Model\eregistration;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $client = new \GuzzleHttp\Client( [ 'headers' => ['Content-Type' => 'application/json']]);
        if (count($request->all())>0) {
            // foreach here.

            $this->validate($request, [

            'start' => 'required',

            'end' => 'required'
        ]);
        $response = Http::get('https://api.covid19api.com/dayone/country/kenya/status/confirmed?',[
            'from'=>$request->start,
            'to'=>$request->end

        ]);

        $vacancies=Vacancy::all();
        $applications=Application::all();
        $posts=Post::all();
$events=eregistration::all();



 $body = json_decode($response->getBody(), true);

        return view('adminEvent.dashboard',compact('vacancies','applications','posts','events','body'));


    }else{



        $response = $client->request('GET', 'https://api.covid19api.com/dayone/country/kenya/status/confirmed?from=2020-06-04T00:00:00Z&to=2020-04-01T00:00:00Z');
        $vacancies=Vacancy::all();
        $applications=Application::all();
        $posts=Post::all();
$events=eregistration::all();



 $body = json_decode($response->getBody(), true);

        return view('adminEvent.dashboard',compact('vacancies','applications','posts','events','body'));

    }


    }
    public function rona(){

    }
}