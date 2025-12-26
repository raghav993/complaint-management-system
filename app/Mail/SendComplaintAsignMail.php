<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendComplaintAsignMail extends Mailable
{
    use Queueable, SerializesModels;

    public $engineerName;
    public $complaintNo;
    public $problem;
    public $personName;
    public $sectionName;

    public function __construct($engineerName, $complaintNo, $problem, $personName, $sectionName)
    {
        $this->engineerName = $engineerName;
        $this->complaintNo = $complaintNo;
        $this->problem = $problem;
        $this->personName = $personName;
        $this->sectionName = $sectionName;
    }

    public function build()
    {
        return $this->subject('New Complaint Assigned to You')
                    ->view('mails.send-mail');
    }
}
