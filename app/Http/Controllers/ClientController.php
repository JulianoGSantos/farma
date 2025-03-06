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

    public function store(RequestClient $request)
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

        return redirect('cliente');
    }

    public function search(Client $client)
    {
        $clients = $client->all();

        $search_client = request('search');
        $clients = Client::where('name', 'like', '%'.$search_client.'%')->get();

        return view('site.client.search', compact('clients'));
    }

    public function show(string $id, Client $client)
    {
        $clients = $client->all();

        if(!$client = Client::find($id))
        {
            return back();
        }
        return view('site.client.show', compact('client'));
    }

    public function edit(Client $client, string $id)
    {
        if(!$client = $client->find($id))
        {
            return back();
        }
        return view('site.client.edit', compact('client'));
    }
}
