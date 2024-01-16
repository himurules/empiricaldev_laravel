<?php

namespace App\Http\Controllers;

use App\Mail\EmpiricalEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function services()
    {
        return view('services');
    }

    public function ourteam()
    {
        return view('ourteam');
    }

    public function projects()
    {
        return view('projects');
    }

    public function ourprocess()
    {
        return view('ourprocess');
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function faq()
    {
        return view('faq');
    }

    public function requestQuote(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Mail::to('info@empiricaldev.com.au')
            ->cc('adam@empiricaldev.com.au')
            ->cc('daniel@empiricaldev.com.au')
            ->send(new EmpiricalEmail($validatedData));

        $response = [
            'success' => true,
            'message' => 'Email sent successfully!',
        ];

        return response()->json($response);
    }
}
