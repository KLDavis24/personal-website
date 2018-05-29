<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class PersonalController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function contact()
    {
    	return view('pages.contact');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function portfolio()
    {
    	return view('pages.portfolio');
    }

    public function privacy()
    {
    	return view('pages.privacy-policy');
    }

    public function processForm(ContactRequest $request)
    {
    	$this->sendEmail($request);
	    $request->session()->flash('status', 'Your message has been sent. I will be sure to get back to you as soon as I can!');
	    return back();
    }

    public function sendEmail($post)
    {
    	$subject = 'Website Inquiry';
    	$email = $post->email;
    	Mail::send('email.website-inquiry', ['post' => $post], function($m) use ($subject, $email) {
    		$m->from('kldavis.244@gmail.com', 'KLDavis24');
    		$m->to('kldavis.244@gmail.com')->subject($subject);
	    });
    }
}
