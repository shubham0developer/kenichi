<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Contact;
use App\Models\Feedbacks;
use App\Models\Testimonial;
use App\Models\Subscription;
use Hash;
use Auth;


use Illuminate\Http\Request;

class BackendController extends Controller
{
    // public function cret()
    // {
        
        
    //     $user = User::create(['name'=>'admin', 'email'=>'admin@gmail.com','password' => Hash::make('admin@123')]);
        
    //     // auth()->login($user);
        
    //     return "true";
    // }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            
            return redirect('/admin/dashboard');
        }else{
            return redirect('/admin/login')->with('msg','Username or Password are wrong.');
        }
    }
    public function logout()
    {
        Auth()->logout();
    return redirect('/admin/login');
    }

    public function contactindex()
    {
        $contact = Contact::where('status',1)->get();
        return view('backend.contact',compact('contact'));
    }
    public function emarketingindex()
    {
        return view('backend.emarketing');
    }
    public function dashboardindex()
    {
        return view('backend.dashboard');
    }public function settingsindex()
    {
        return view('backend.settings');
    }public function feedbackindex()
    { 
        $feedback  = Feedbacks::all();
        // return $feedback;
        return view('backend.feedback',compact('feedback'));
    }public function testimonialsindex()
    {
        $testimonial = Testimonial::all();
        // return $testimonials;
        return view('backend.testimonials',compact('testimonial'));
    }
    public function createtestimnials(Request $request)
    {
        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->feedback = $request->feedback;
        $imageName = NULL;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images/testimonials_images'), $imageName);
        $testimonial->image  = $imageName;
        $testimonial->save();

    }
    public function deltestimonials()
    {
        
       
    }
    public function contactdel($id){
        $contact = Contact::find($id);
        $contact->status = 0;
        $contact->update();
        return redirect()->back()->with('msg','Delete Successfully');
    }
    public function subscriptionindex()
    {
        $subscribe = Subscription::all();
        return view('backend.subscription',compact('subscribe'));
    }
}
