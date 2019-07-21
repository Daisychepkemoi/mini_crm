<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class NewCompany extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($company)
    {
            $this->company = $company;    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       $users =User::where('email','admin@admin.com')->pluck('email')->toArray();
        // dd($users->f_name);
        return $this->from('dchepkemoi409@gmail.com')
                    ->subject('new User created')->to('dchepkemoi408@gmail.com')->markdown('company.createcompanymail')
                    ->with([
                    'companyname' => $this->company->name,
                    'companyemail' => $this->company->email,
            ]); ;
    }
}
