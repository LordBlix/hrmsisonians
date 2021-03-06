<?php

namespace App\Emails;

use App\Models\Employee;
use App\Models\Setting;

class ChangePasswordMail extends BaseMail
{

    private $user = null;

    public function __construct(Employee $user)
    {
        $this->user = $user;
        $this->setting = Setting::firstOrFail();
    }

    public function build()
    {
        return parent::build()
            ->subject('Change Password')
            ->with('fullName', $this->user->fullName)
            ->with('email', $this->user->email)
            ->view('emails.changePassword', $this->viewData);
    }

}
