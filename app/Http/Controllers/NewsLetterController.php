<?php

namespace App\Http\Controllers;

use App\Models\newsletter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function getFormData(Request $request)
    {
        $newsletter = new newsletter();
        $newsletter->Email = $request->input('Email');
        $newsletter->save();
    }

}
