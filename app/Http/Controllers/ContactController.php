<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getFormData(Request $request){

        $contact = new contact();
        $contact->Name = $request->input('Name');
        $contact->Job_Title = $request->input('JobTitle');
        $contact->Email = $request->input('Email');
        $contact->Phone_number = $request->input('Phone');
        $contact->Company_Name = $request->input('CompanyName');
        $contact->message  = $request->input('message');
        $contact->save();

    }
}
