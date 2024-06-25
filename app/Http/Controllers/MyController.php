<?php
namespace App\Http\Controllers;
use App\Models\Client;
use App\Mail\ContactClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function Pest\Laravel\put;

class MyController extends Controller
{
    public function my_data(){
        return view('test');
    }

    public function myVal(){
        session()->put('test', 'My first Session');
        // session()->flash('test1', 'My first Session');  //used one only then disappear.
        return 'Session Created';
    }
    public function restoreVal(){
        return 'My Session Value is ' . session('test1');
    }
    public function DeleteVal(){
        // session()->forget('test'); //delete one only
        // session()->flush();
        return 'My Session removed';
    }
// ***************************************************
    public function sendClientEmail(){
        $data = Client::findOrFail(1)->toArray();
        $data['theMessage']= 'My First Message';
        //  dd($data);
        Mail::to($data['email'])->send(
            new ContactClient($data)
        );
        return "Mail Sent";
    }
}
