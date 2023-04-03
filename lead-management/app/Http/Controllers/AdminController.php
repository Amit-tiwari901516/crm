<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lead;
use App\Models\user;
use App\Models\account;
use App\Models\deal;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;
use App\Http\controller\HomeController;


class AdminController extends Controller
{
    //lead page
    public function view_lead()
    {
        $lead=lead::all();
        return view('admin.leads.add_lead',compact('lead'));
    }

    //add_leads
    public function add_lead(Request $request)
    {
        $lead=new lead;
        $lead->first_name=$request->first_name;
        $lead->last_name=$request->last_name;
        $lead->phone=$request->phone;
        $lead->title=$request->title;
        $lead->email=$request->email;
        $lead->company=$request->company;
        $lead->street=$request->street;
        $lead->city=$request->city;
        $lead->state=$request->state;
        $lead->zip_code=$request->zip_code;
        $lead->country=$request->country;
        $lead->description=$request->description;

        $lead->lead_source=$request->lead_source;
        $lead->lead_status=$request->lead_status;
        
        $lead->save();

        return redirect()->back()->with('message', 'Lead added Successfully');
    }

    //manage_leads
    public function manage_leads()
    {
        $lead=lead::all();
        return view('admin.leads.manage_leads',compact('lead'));
    }

    //delete_lead
   

    //edit_lead
    public function edit_lead($id)
    {
        $lead=lead::find($id);
        return view('admin.leads.edit_lead',compact('lead'));
    }

    //update_lead
    public function update_lead(Request $request,$id)
    {
        $lead=lead::find($id);
        $lead->first_name=$request->first_name;
        $lead->last_name=$request->last_name;
        $lead->phone=$request->phone;
        $lead->title=$request->title;
        $lead->email=$request->email;
        $lead->company=$request->company;
        $lead->street=$request->street;
        $lead->city=$request->city;
        $lead->state=$request->state;
        $lead->zip_code=$request->zip_code;
        $lead->country=$request->country;
        $lead->description=$request->description;

        $lead->lead_source=$request->lead_source;
        $lead->lead_status=$request->lead_status;
        
        $lead->save();

        return redirect()->back()->with('message', 'Lead updated Successfully');
    }

    //convert lead
    public function convert_lead($id)
    {
        $lead=lead::find($id);
        return view('admin.leads.convert_lead',compact('lead') );
    }

    public function convert_lead_confirm($id, Request $request)
    {
        //create account
        $lead=lead::find($id);
        $account = new account;
        $account->account_name = $lead->company;
        $account->phone = $lead->phone;
        $account->save();

        $account_id = $account->id;
    
        //create contact
        $contact = new contact;
        $contact->contact_name = $lead->first_name.' '.$lead->last_name;
        $contact->account_id = $account_id;
        $contact->email = $lead->email;
        $contact->phone = $lead->phone;
        $contact->save();

        $contact_id = $contact->id; 
    
        //create deal
        $deal = new deal;
        $deal->amount = $request['amount'];
        $deal->deal_name = $request['deal_name'];
        $deal->closing_date = $request['closing_date'];
        $deal->deal_stage = $request['deal_stage'];
        $deal->account_id = $account_id;
        $deal->contact_id = $contact_id;
        $deal->save();

        //delete old lead
        $lead->delete();

        return redirect('/manage_leads')->with('message', 'Deal Created Successfully');

    }

    //view add account
    public function view_account()
    {
        return view('admin.accounts.add_account');
    }

    //add_account
    public function add_account(Request $request)
    {
        $account=new account;
        $account->account_name=$request->account_name;
        $account->phone=$request->phone;
        $account->website=$request->website;
        $account->save();
        return redirect('/manage_accounts')->with('message', 'Account Created Successfully');
    }

    //manage_accounts
    public function manage_accounts()
    {
        $account=account::all();
        return view('admin.accounts.manage_accounts',compact('account'));
    }
    
    //Edit_page
    public function edit_account($id)
    {
        $account=account::find($id);
        return view('admin.accounts.edit_account', compact('account')); 
    }

    public function edit_account_confirm(Request $request, $id)
    {
        $account=account::find($id);
        $account->account_name=$request->account_name;
        $account->phone=$request->phone;
        $account->website=$request->website;
        $account->save();
        return redirect('/manage_accounts')->with('message', 'Account Edited Successfully');
    }

    //manage_contact
    public function manage_contact()
    {
        $contact=contact::with('getAccountDetail')->get();
        return view('admin.contacts.manage_contact', compact('contact'));
    }

    //manage_deal
    public function manage_deal()
    {
        $deal=deal::with('getAccountDetail')->with('getContactDetail')->get();
        return view('admin.deals.manage_deal',compact('deal'));
    }

   
}


