<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use App\Models\Contact;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function setfeedback(Request $request)
    {
        $feedback = new Feedback;
        $feedback->name = $request->name;
        $feedback->position = $request->position;
        $feedback->images = $request->images;
        $feedback->feedback = $request->feedback;
        $feedback->testimonial = 0;
        $feedback->status = 1;
        $feedback->save();
        return redirect()->back()->with('success', 'Your feedback form submitted successfully');

    }
    public function updateastestimonials(Feedback $feedback)
    {
        $feedback->testimonials = (($feedback->testimonials)==0)?1:0;
        $feedback->save();
        return redirect()->back()->with('msg', 'tesimonial updates');
    }
    public function setcontact(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->contact = $request->contact;
        $contact->service = $request->service;
        $contact->massage = $request->massage; 
        $contact->status = 1;
        $contact->save();
        return redirect()->back()->with('msg', 'Your Contact form submitted successfully');
    }  
    public function setsubcription(Request $request)
    {
        $subscription = new subscription;
        $subscription->email = $request->email;
        $subscription->save();
        return redirect()->back()->with('success', 'Your are suscribed successfully');
    }
  

}

