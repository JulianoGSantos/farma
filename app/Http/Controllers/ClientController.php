<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestClient;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('site.client.index');
    }

    public function storeclient(RequestClient $request)
    {
        $client = new Client();

        $client->name = $request->name;
        $client->company = $request->company;
        $client->cnpj = $request->cnpj;
        $client->responsible = $request->responsible; 
        $client->cellphone = $request->cellphone; 
        $client->cellphone2 = $request->cellphone2; 
        $client->email = $request->email; 
        $client->cep = $request->cep; 
        $client->street = $request->street; 
        $client->number = $request->number; 
        $client->complement = $request->complement; 
        $client->city = $request->city;
        $client->state = $request->state;
        $client->save();

        return redirect('home');
    }
}
