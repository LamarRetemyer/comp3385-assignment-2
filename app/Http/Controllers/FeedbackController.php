<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.feedback-form');
    }

    public function send(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);

        

        // Redirect to success page
        return redirect('/feedback/success')->with('success', 'Feedback submitted successfully!');
    }
}
