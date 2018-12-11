<?php

namespace App\Events;

use App\Models\Admin;
use Illuminate\Queue\SerializesModels;

/**
 * Class LeaveRequestEvent
 * @package App\Events
 */
class LeaveRequestToAdminEvent
{
    use SerializesModels;

    public $admin = null;
    public $website = null;

    public function __construct(Admin $admin, $website)
    {
        $this->admin = $admin;
        $this->website = $website;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
    
}
