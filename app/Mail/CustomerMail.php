<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $customer_pass = "";
    public $customer_name = "";
    public $customer_email = "";
    public function __construct($customer_password, $customer_n, $customer_e)
    {
        $this->customer_pass = $customer_password;
        $this->customer_name = $customer_n;
        $this->customer_email = $customer_e;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('backend.mail.customer-mail', [
            'customer_rand_pass' => $this->customer_pass,
            'customer_name' => $this->customer_name,
            'customer_email' => $this->customer_email,
        ]);
    }
}
