<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
      return view ('contacts.index')->with('contacts', $contacts);
    }

/**
 * Get a validator for an incoming registration request.
 * 
 * @param array $data
 * @return \Illuminate\Contracts\Validation\Validator
 */
   
    public function create()
    {
        return view('contacts.create');
    }

   
    public function store(ContactRequest $request)
    {
        $input = $request->all();
     //   Contact::create($input);
        $contact = Contact::create($input);

        return redirect('contact')->with('flash_message', 'Contact Addedd!');     

        // return back()->with('success', 'Contact created successfully.'); 
    }

    public function Search(Request $request)
    {
        $contact = Contact::where('name','like','%'.$request->search.'%')->orWhere('email','like','%'.$request->search.'%')->orWhere('mobile','like','%'.$request->search.'%')->get();
        return view('contacts.show', compact('contact'));
    }
   
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }

   
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }

 
    public function update(ContactRequest $request, $id)
    {
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'Contact Updated!');  
    }

   
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact deleted!');  
    }
}