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

    public function projectsdetails(string $projectName)
    {
        return view('projects_details');
    }

    public function gallery()
    {
        return view('gallery');
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

    public function requestContact(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required', // Full Name
            'email' => 'required|email',
            'phone' => 'required', // Assuming you want to ensure the phone number is entered
            'project_address' => 'nullable', // Project address is optional
            'start_date' => 'nullable|date', // Ideal start date is optional but must be a valid date if provided
            'scope' => 'required', // Brief description of the project scope
            'working_with_designer' => 'required|in:yes,no', // Whether working with a designer; expecting either 'yes' or 'no'
            'plans_acquired' => 'required|in:yes,no', // Whether plans have been acquired; expecting either 'yes' or 'no'
            'council_approval' => 'required|in:yes,no', // Whether council approval is required/obtained; expecting either 'yes' or 'no'
        ]);

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'project_address' => 'nullable',
            'start_date' => 'nullable|date',
            'scope' => 'required',
            'working_with_designer' => 'required|in:yes,no',
            'plans_acquired' => 'required|in:yes,no',
            'council_approval' => 'required|in:yes,no',
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
