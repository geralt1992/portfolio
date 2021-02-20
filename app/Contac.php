<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contac extends Model
{

public function save_contact($request){
    $request->validate([
        'name' => 'required',
        'mail' => 'email|required',
        'subject' => 'required',
        'services' => 'required',
    ]);

    $new_contact = new Contac;
    $new_contact->name = $request->name;
    $new_contact->mail = $request->mail;
    $new_contact->subject = $request->subject;
    $new_contact->services = $request->services;
    $new_contact->save();
}

}
