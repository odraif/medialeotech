<?php

namespace App\Http\Controllers;

use App\Models\offers;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function get_form_data(Request $request)
    {
        $offer = new offers();
        $offer->Prenom = $request->input("Prenom");
        $offer->Nom = $request->input("Nom");
        $offer->Email = $request->input("Email");
        $offer->Phone = $request->input("Numero");
        $offer->Sujet = $request->input("offer");

        $file = $request->file('cv');

        if (!$file->isValid()) {
            return redirect()->back()->withErrors('Invalid file.');
        }

        $fileName = time().".".$file->getClientOriginalExtension();
        $file->move(public_path("cv/"), $fileName);
        $offer->cv_name = $fileName;
        $offer->save();

        return view("success");
    }
}
