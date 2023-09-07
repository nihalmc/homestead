<?php


namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerApplication extends Mailable
{
    use Queueable, SerializesModels;

    public $careersData;

    public function __construct(array $careersData)
    {
        $this->careersData = $careersData;
    }

    public function build()
    {
        return $this->view('website.emails.career_application')
            ->attach($this->careersData['Resume']->getRealPath(), [
                'as' => $this->careersData['Resume']->getClientOriginalName(),
                'mime' => $this->careersData['Resume']->getClientMimeType(),
            ]);
    }
}

