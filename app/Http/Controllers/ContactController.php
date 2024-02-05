<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('contact.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData= $request->validate([
            'contact_name'=> 'required|min:5',
            'contact_email'=> 'required',
            'contact_description'=>'required|min:5',
        ]);

        // $contact = new contact ([
        //     'contact_name'=> $request->input('contact_name'),
        //     'contact_email'=> $request->input('contact_email'),
        //     'contact_description'=> $request->input('contact_description')
        // ]);
        // $contact->save();
        $contact = contact::create($request->all());
        return redirect()->route('contact')->with('success', 'Dear '.  $contact['contact_name'].' Thanks for contacting us');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
