<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;

use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users = Client::where('id_user', $request->user()->id);

        if ($request->has('status') && $request->status != "") {
            $users->where('status', $request->status);
        }

        if ($request->has('id') && $request->id != "") {
            $users->where('id', $request->id);
        }

        if ($request->has('email') && $request->email != "") {
            $users->where('email_client','like', '%' . $request->email . '%');
        }

        if ($request->has('nume') && $request->nume != "") {
            $users->where('nume_client','like', '%' . $request->nume . '%');
        }

        if ($request->has('prenume') && $request->prenume != "") {
            $users->where('prenume_client','like', '%' . $request->prenume . '%');
        }

        if ($request->has('judet') && $request->judet != "") {
            $users->where('judet', 'like',  '%' . $request->judet . '%');
        }

        return $users->get();
    }

    /**
     * Display a single resource
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $id = $request->all()['id'];
        $client = $request->user()->clients->where('id', $request->id)->first();;
        
        return $client;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Validator::make($request->all(), [
            'nume_client' => ['required'],
            'prenume_client' => ['required'],
        ])->validate();

        $complete_request = $request->all();

        $complete_request["id_user"] = $request->user()->id;
        // print_r($complete_request);

        $client = Client::create($complete_request);

        return response()->json($client);
    }

    // Actualizare profil user
    public function update(Request $request){
    
        $client = Client::find($request->all()['id']);
        

        Validator::make($request->all()['client'], [
            'putere_panou' => ['nullable','numeric'],
            'nr_panouri' => ['nullable','numeric'],
            'putere_invertor' => ['nullable','numeric'],
        ])->validate();

        $client->update($request->all()['client']);

        return response()->json("Actualizat cu succes!");
    }


    /**
     * Destroy
     *
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        $clients = $request->user()->clients->where('id', $id)->first()->delete();

        return response()->json("Deleted");
    }
}
