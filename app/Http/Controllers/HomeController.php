<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homeslider;
use App\Models\Project;
use App\Models\Newsevents;

use App\Mail\QuickEnquiryMail;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactFormEmail;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    public function home()
    {
        $projectshomepage=Project::all();
        $homeslider = Homeslider::all();
        $news=Newsevents::all();
        return view('website.index', compact('homeslider','projectshomepage','news'));
    }

    public function about()
    {
        return view('website.about');
    }


    // public function  projecdetail(){
    //     $projects=Project::all();
    //     return view('website.allproject', compact('homeslider','projects',));
    // }

    // public function homesendmail(Request $request){
    //     $country = $request->input('country');
    //     $what= $request->input('what');
    //     $name = $request->input('name');
    //     $email = $request->input('email');
    //     $phonenumber = $request->input('phonenumber');

    //     $homesData= [
    //         "country" => $country,
    //         "what" => $what,
    //         "name" => $name,
    //         "email" => $email,
    //         "phonenumber" => $phonenumber,
    //     ];

    //     if($homesData)
    //     {
    //       $adminMail = 'travelure.tours@gmail.com';
    //       $subject = 'New Homes  from ' .$homesData['email'];

    //       Mail::to($adminMail)->send(new Homesmail($homesData, $subject));

    //       return redirect()->route('website.index');

    //     }
    // }

    public function submitQuickEnquiry(Request $request)
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


    // Continue with form processing if reCAPTCHA is verified

    // Get form data
    $name = $request->input('name');
    $mobile = $request->input('mobile');
    $selectproject = $request->input('selectproject');
    $message = $request->input('Message');

    $homesData= [

        "name" => $name,
        "mobile"=>$mobile,
         "selectproject" =>  $selectproject,
        "message" => $message

    ];

    if($homesData)
    {
        $adminMail = 'ofmailwork@gmail.com';
          $subject = 'New Homes  from ' ;
    // Send email
    Mail::to($adminMail)->send(new QuickEnquiryMail($homesData,$subject));

    return redirect()->route('website.index');
    // Redirect with success message
       }
}

public function submitContactForm(Request $request)

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


        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'nullable',
            'message' => 'required',
        ]);

        // Send the email
        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('ofmailwork@gmail.com')->send(new ContactFormEmail($data)); // Update with your email address

        return view('website.contact');

    }

}
