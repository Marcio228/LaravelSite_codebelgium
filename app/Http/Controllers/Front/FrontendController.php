<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\Models\Testimonial;
use App\Models\Post;
use App\Models\Application;

use App\Mail\ApplicationMail;

use App\Models\ContactSubmission;
use App\Mail\ContactUsMail;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::where('featured',true)->latest()->limit(3)->get();
        return view('front.index', compact("posts"));
    }

    public function about()
    {
        //
        return view('front.about');
    }

    public function contact()
    {
        //
        return view('front.contact');
    }

    public function apply()
    {
        //
        return view('front.apply');
    }

    public function applyStore(Request $request)
    {
        //
        //dd($request);
        $request->validate([
            'name'      => 'required|max:255|min:3',
            'email'     => 'email|required',
            'phone'   => 'required',
        ]);

        $application = Application::create([
            'name'          => $request->get('name'),
            'email'         => $request->get('email'),
            'phone'         => $request->get('phone'),
            'gender'        => $request->get('gender'),
            'course'        => $request->get('course'),
            'batch'         => $request->get('batch'),
            'referral'      => $request->get('referral'),
            'privacy'       => $request->get('privacy'),
            'newsletter'    => $request->get('newsletter'),
            'captcha_data'  => "null", 
            ]);

        Mail::to('contact@codebelgium.com')->send(new ApplicationMail($application));
            return back()->with('success', 'Thanks for Applying!');

    }

    public function contactSubmission(Request $request)
    {
        //
        $request->validate([
            'name'      => 'required|max:255|min:3',
            'email'     => 'email|required',
            'message'   => 'required',
        ]);

        $contactSubmission = ContactSubmission::create([
            'name'          => $request->get('name'),
            'email'         => $request->get('email'),
            'phone'         => $request->get('phone'),
            'message'       => $request->get('message'),
            'captcha_data'  => "null",   
            ]);

        //flash('Thanks! Your message is sent to our team.')->success();
            Mail::to('contact@codebelgium.com')->send(new ContactUsMail($contactSubmission));
            return back()->with('success', 'Thanks for contacting us!');
    }

    public function privacy()
    {
        //
        return view('front.privacy');
    }

    public function terms()
    {
        //
        return view('front.terms');
    }

    public function faq()
    {
        //
        $newposts = Post::latest()->limit(5)->get();
        return view('front.faq', compact('newposts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
