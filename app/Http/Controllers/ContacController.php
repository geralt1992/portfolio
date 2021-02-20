<?php

namespace App\Http\Controllers;

use App\Contac;
use Illuminate\Http\Request;
use App\Mail\Pozdrav;
use Illuminate\Support\Facades\Mail;

class ContacController extends Controller
{

    public function index()
    {
        return view('portfolio');
    }

    public function store(Request $request)
    {
        $contact = new Contac;
        $contact->save_contact($request);

        Mail::to($request->mail)->send(new Pozdrav($request->name));

        return redirect()->route('index')->with('success' , 'Uspješno unesen zahtjev');
    }

    public function getCv(){
        $path= public_path('/downloads/CV.docx');
        return response()->download($path);
    }
}
