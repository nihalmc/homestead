<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

use Illuminate\Support\Facades\Mail;
use App\Mail\CareerApplication;

use Illuminate\Support\Facades\Http;
class CareerController extends Controller
{

    public function edit()
    {
        $career = Career::find(1); // Assuming you only have one row for career information
        return view('admin.career.career', compact('career'));
    }

    public function update(Request $request)
    {
        $career = Career::find(1); // Assuming you only have one row for career information
        $career->text = $request->input('text');
        $career->save();

        return redirect()->route('career.edit');
    }

    public function show()
    {
        $career=Career::orderBy('id','desc')->paginate(5);
        return view('website.careers', compact('career'));
    }
    public function submitCareerForm(Request $request)
    {
        // Validate reCAPTCHA
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $recaptchaSecret = '6Lc_gOsnAAAAAABHon_dEqW34DQ7ULkWhA3wP5-S';

        $recaptchaVerifyResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecret,
            'response' => $recaptchaResponse,
        ]);

        if (!$recaptchaVerifyResponse->json()['success']) {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Please complete the reCAPTCHA challenge.'
            ], 401);
        }


        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $Resume = $request->file('Resume');





        // Prepare data for email
        $careersData = [
            "name" => $name,
            "email" => $email,
            'mobile' => $mobile,
            "Resume"=>  $Resume,

        ];

        if ($careersData) {
            $adminMail = 'ofmailwork@gmail.com';
            $subject = 'New sendmail from ' . $careersData['email'];

            Mail::to($adminMail)->send(new CareerApplication($careersData));




        // Redirect or return a response
        return view('website.careers');
    }

}
}
