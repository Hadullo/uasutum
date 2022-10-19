<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Enquiry;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\DB;

class EnquiriesController extends Controller
{

    public function index()
    {
        $enquiries = Enquiry::latest()->paginate(4);
        return view('dashboard.enquiries.index', compact('enquiries'));
    }

    public function show($id)
    {
         $enquiry  = Enquiry::where('id', $id)->first();
         return view('dashboard.enquiries.single-enquiry-post', compact('enquiry'));
    }

    public function contact()
    {
       return view("pages.contactus");
    }


     public function store(Request  $request)

    {

        $data = $this->validate($request, [

            'name' => "required",
            'email' => "required",
            'mobile' => "required",
            'subject' => "required",
            'comment' => "required",
            'g-recaptcha-response' => "required|captcha"
        ]);



        $query = DB::table('enquiries')->insert([

            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'subject'=>$request->subject,
            'attachement'=>$request->file('attachement'),
            'comment'=>$request->comment
    ]);

    if(($query) =='true')
    {

        //Define your Admin Email
        $admin_email = "info@uasutum.net";

        // Call mailable
        //Pass Data from Form
       Mail::to($admin_email)->send(new contactMail($data));

    return back()->with('success','Email successfuly sent and copied into UASU Database');}
    else{return back()->with('fail','Something went wrong');}

}

}


