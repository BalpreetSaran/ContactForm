<?php

namespace ContactForm\Http\Controllers;

use ContactForm\contactFormSubmission;
use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function create()
    {
        return view('contact');
	}

    public function index()
    {
        $data = contactFormSubmission::all();
        return $data;
    }

    public function search(Request $request){
        $search = $request->get('search');
        $submissions = contactFormSubmission::where('name', 'like', '%' .$search. '%')
            ->orWhere('email', 'like', '%' .$search. '%')
            ->orWhere('subject', 'like', '%' .$search. '%')
            ->orWhere('message', 'like', '%' .$search. '%')
            ->paginate(10);

        $submissions->setPath('/submissions');

		return view('submissions')->with('submissions', $submissions);
    }

    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'query' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
        // Save Data in DB
        \ContactForm\contactFormSubmission::create($data);

        
        return redirect('/contact')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
