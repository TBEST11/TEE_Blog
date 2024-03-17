<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::all();

        return view('contact.about_us');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['fullname'=>'required|string',
        'email'=>'required|string',
        'subject'=>'required|string',
        'message'=>'required|string']);



$contact = new contact;
$contact->fullname = $request->fullname;
$contact->email = $request->email;
$contact->subject = $request->subject;
$contact->message = $request->message;
$contact->save();

return redirect()->back()->withSuccess(' Request Sent');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contact.create', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate(['title'=>'required|string',
        'email'=>'required|string',
        'subject'=>'required|string',
        'message'=>'required|string']);

$contact->fill($request->all());
$contact->save();

return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->back()->withSuccess('Request Deleted.');
    }
}
