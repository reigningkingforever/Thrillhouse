<?php

namespace App\Observers;

use App\Appliance;

class ApplianceObserver
{
    /**
     * Handle the appliance "created" event.
     *
     * @param  \App\Appliance  $appliance
     * @return void
     */
    public function created(Appliance $appliance)
    {
        //
    }

    /**
     * Handle the appliance "updated" event.
     *
     * @param  \App\Appliance  $appliance
     * @return void
     */
    public function updated(Appliance $appliance)
    {
        //
    }

    /**
     * Handle the appliance "deleted" event.
     *
     * @param  \App\Appliance  $appliance
     * @return void
     */
    public function deleted(Appliance $appliance)
    {
        //
    }

    /**
     * Handle the appliance "restored" event.
     *
     * @param  \App\Appliance  $appliance
     * @return void
     */
    public function restored(Appliance $appliance)
    {
        //
    }

    /**
     * Handle the appliance "force deleted" event.
     *
     * @param  \App\Appliance  $appliance
     * @return void
     */
    public function forceDeleted(Appliance $appliance)
    {
        //
    }
}
