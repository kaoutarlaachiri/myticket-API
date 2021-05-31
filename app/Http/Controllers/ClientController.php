<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function addClient(Request $request)
    {

        $client = new Client;


        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->num_tel = $request->num_tel;






        $client->save();
    }
}
