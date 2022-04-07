<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $admin_pass = "";
    public $admin_name = "";
    public $admin_email = "";
    public function __construct($admin_password, $admin_n, $admin_e)
    {
        $this->admin_pass = $admin_password;
        $this->admin_name = $admin_n;
        $this->admin_email = $admin_e;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('backend.mail.admin-mail', [
            'admin_rand_pass' => $this->admin_pass,
            'admin_name' => $this->admin_name,
            'admin_email' => $this->admin_email,
        ]);
    }
}
