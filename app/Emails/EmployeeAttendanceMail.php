<?php

namespace App\Emails;

use App\Models\Employee;
use App\Models\Setting;
use Illuminate\Support\Facades\Log;

class EmployeeAttendanceMail extends BaseMail
{

    private $employee = null;
    private $date = null;

    public function __construct(Employee $employee, $date)
    {
        Log::debug($employee);
        $this->employee = $employee;
        $this->date = $date;
        $this->setting = Setting::firstOrFail();
    }

    public function build()
    {
        return parent::build()
            ->subject('Attendance marked ')
            ->with('fullName', $this->employee->fullName)
            ->with('email', $this->employee->email)
            ->with('date', $this->date)
            ->view('emails.admin.attendance', $this->viewData);
    }

}
