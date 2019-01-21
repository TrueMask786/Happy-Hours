<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\outletdetail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function search(Request $request)
    {
       // $request->validate([
       //     'place' => 'string|alpha|max:25', 
      //      'restaurant' => 'string|alpha_num|max:40',
      ///      'franchise' => 'string|alpha_num|max:40',             
     //   ]);

        $data = $request->all();

        if($data['place'] != null && $data['restaurant'] != null)
            $results = outletdetail::where(['city','outletName'],[$data['place'],$data['restaurant']]);

        if($data['place'] != null)
            $results = outletdetail::where('city',$data['place'])->get();


        if($data['restaurant'] != null)
            $results = outletdetail::where('outletName',$data['restaurant']);

        //if($data['franchise'] != null)
       //     $results = OutletDetail::where('city',$data['place']);
        dd($result);

    }
}
