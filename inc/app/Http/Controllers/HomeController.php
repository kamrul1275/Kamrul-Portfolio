<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
   public function index()
   {
        return view('frontend.layout.master');
   }




public function contact(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|unique:contacts',
        'message' => 'required',


    ],
    // [

//    'name.required'=> 'Name is required',
//    'email.required'=> 'email is required',
//    'name.unique'=> 'Name is Allready exixst',
//    'message.required'=> 'message is required',
//     ],


);




    $contact = new Contact();


    $contact->name= $request->name;
    $contact->email= $request->email;
    $contact->message= $request->message;
    $contact->save();

    $msg="You'r Message  sent Successfully";
    return response()->json(['success'=> $msg],201);
}

    //return redirect()->back()->with("msg", "You'r Message  sent Successfully");

}








