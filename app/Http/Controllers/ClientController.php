<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Validation\Rule;
use App\Traits\UploadFile;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class ClientController extends Controller
{

use UploadFile;

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

    public function eng()
    {
        $url = LaravelLocalization::getLocalizedURL('en', 'a/b/c');
        return view('eng', ['localizedURL' => $url]);
    }

    public function arab()
    {
        $url = LaravelLocalization::getLocalizedURL('ar', 'a/b/c');
        return view('arab', ['localizedURL' => $url]);
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

$messages = $this->errMsg();
$data= $request->validate([
    'ClientName' => 'required|max:100|min:5',
    'phone' =>'required|min:11',
    'email' =>'required|email:rfc|ends_with:gmail.com|unique:clients,email,except,id',
    'website' => 'required',
    'city' => 'required|max:30',
    'active' => 'required',
    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
], $messages);


//  $imgExt = $request->image->getClientOriginalExtension();
//  $fileName = time() . '.' . $imgExt;
//  $path = 'assets/images';
// $request->image->move($path, $fileName);


$fileName = $this->upload($request->image, 'assets/images');
$data['image'] = $fileName;

$data['active'] = isset($request->active);
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

        $messages = $this->errMsg();
        $client = Client::findOrFail($id);
        $data= $request->validate([
            'ClientName' => 'required|max:100|regex:/^[a-zA-Z\s]+$/|min:5',
            'phone' =>'required|min:11|numeric|digits:11',
            // 'email' =>'required|email:rfc|ends_with:gmail.com|unique:clients,email,except,id',
            'email' => [
                'required',
                'email:rfc',
                'ends_with:gmail.com',
                Rule::unique('clients')->ignore($client->id),
            ],
            'website' => 'required',
            'city' => 'required|max:30',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], $messages);

        // if ($request->hasFile('image')) {
        //     $imgExt = $request->image->getClientOriginalExtension();
        //     $fileName = time() . '.' . $imgExt;
        //     $path = 'assets/images';
        //     $request->image->move($path, $fileName);
        //     $data['image'] = $fileName;
        // } else {
        //     $data['image'] = $client->image;
        // }


          if($request->hasFile('image')){
          $fileName = $this->upload($request->image, 'assets/images');
          $data['image'] = $fileName;
            }

        $data['active'] = isset($request->active);
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


    public function errMsg(){
        return [
            'ClientName.required' => 'The client name is missed , Please inset',
            'phone.required' =>'The phone number is missed, Please inset',
            'email.required' =>'Email is missed, Please inset',
            'website.required' => 'Website is missed ,Please inset',
        ];

    }
}