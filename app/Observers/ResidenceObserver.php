<?php

namespace App\Observers;

use App\Models\Residence;

class ResidenceObserver
{
    /**
     * Handle the Residence "creating" event.
     *
     * @param  \App\Models\Residence  $residence
     * @return void
     */
    public function creating(Residence $residence)
    {
        $residence->admin_id = auth()->id();
    }
}
