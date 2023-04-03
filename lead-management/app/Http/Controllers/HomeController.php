<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use App\Models\lead;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }else
        {
            return view('dashboard');
        }
    }

    //Delete lead 
    public function delete_lead($id)
    {
        $data=lead::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Lead Deleted Successfully');
    }

    public function show_lead($id)
    {
        $lead=lead::find($id);
        return view('admin.leads.show_lead',compact('lead') );
    }
  
}
