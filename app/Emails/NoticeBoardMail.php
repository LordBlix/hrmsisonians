<?php

namespace App\Emails;

use App\Models\Employee;
use App\Models\Setting;

class NoticeBoardMail extends BaseMail
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
            ->subject('Leave Request')
            ->with('fullName', $this->user->fullName)
            ->with('email', $this->user->email)
            ->view('emails.admin.noticeboard', $this->viewData);
    }

}
