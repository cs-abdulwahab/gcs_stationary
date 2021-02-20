<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DilljabaEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $demo;

//     public function __construct($demo)
//     {
//         $this->demo = $demo;
//     }
// // 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //default return $this->view('view.name');
        // return $this->from('sender@example.com')
        //             ->view('mails.dilljaba')
                    ;
    }
}
