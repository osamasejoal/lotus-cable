<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StaffMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $staff_pass = "";
     public $staff_name = "";
     public $staff_email = "";
    public function __construct($staff_password, $staff_n, $staff_e)
    {
        $this->staff_pass = $staff_password;
        $this->staff_name = $staff_n;
        $this->staff_email = $staff_e;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('backend.mail.staff-mail', [
            'staff_rand_pass' => $this->staff_pass,
            'staff_name' => $this->staff_name,
            'staff_email' => $this->staff_email,
        ]);
    }
}
