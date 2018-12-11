<?php

namespace App\Emails;

use App\Models\Admin;
use App\Models\Employee;
use App\Models\Setting;

class LeaveRequestToAdminMail extends BaseMail
{

    private $admin = null;
    private $website = null;

    public function __construct(Admin $admin, $website)
    {
        $this->admin = $admin;
        $this->website = $website;
        $this->setting = Setting::firstOrFail();
    }

    public function build()
    {
        return parent::build()
            ->subject('Leave Request - '.$this->website)
            ->with('fullName', $this->admin->name)
            ->with('email', $this->admin->email)
            ->view('emails.admin.leave_request', $this->viewData);
    }

}
