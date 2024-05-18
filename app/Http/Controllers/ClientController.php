<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    // private $columns = ['ClientName', 'phone', 'email', 'website'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
       return view('clients' , compact('clients'));

    // $clients = DB::table('clients')->get();
    // return view('clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //   $client = new Client;
    //   $client->ClientName = "Egypt Air";
    //   $client->phone = "02123456789";
    //   $client->email = "EgyptAir@gmail.com";
    //   $client->website = "http://egyptair.com";
    //   $client->save();
    //   return "Inserted Successfully";
$data= $request->validate([
    'ClientName' => 'required|max:100|min:5',
    'phone' =>'required|min:11',
    'email' =>'required|email:rfc|ends_with:gmail.com|unique:clients,email,except,id',
    'website' => 'required',
]);
         Client::create($data);
         return redirect('clients');


        // DB::table('clients')->insert($request->only($this->columns));
        // return redirect('clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client=Client::findOrFail($id);
        return view('showClient', compact('client'));

        // $client = DB::table('clients')->where('id', $id)->first();
        // return view('showClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client=Client::findOrFail($id);
        return view('editClient', compact('client'));

        // $client = DB::table('clients')->where('id', $id)->first();
        // return view('editClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data= $request->validate([
            'ClientName' => 'required|max:100|regex:/^[a-zA-Z\s]+$/|min:5',
            'phone' =>'required|min:11|numeric|digits:11',
            'email' =>'required|email:rfc|ends_with:gmail.com|unique:clients,email,except,id',
            'website' => 'required',
        ]);

        Client::where('id' , $id)->update($data);
        return redirect('clients')->with('success', 'Client updated successfully');

        // DB::table('clients')->where('id', $id)->update($request->only($this->columns));
        //  return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request -> id;
        Client::where('id' , $id)->delete();
        return redirect('clients');

        // $id = $request->id;
        // DB::table('clients')->where('id', $id)->delete();
        // return redirect('clients');
    }



    public function trash()
    {

        $trashed=Client::onlyTrashed()->get();
        return view('trashClient', compact('trashed'));


    }

    public function restore(string $id)
    {

        Client::where('id' , $id)->restore();
        return redirect('clients');


    }
    public function forceDelete(Request $request)
    {
        $id = $request -> id;
        Client::where('id' , $id)->forceDelete();
        return redirect('trashClient');
    }
}
