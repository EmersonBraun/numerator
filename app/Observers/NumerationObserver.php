<?php

namespace App\Observers;

use App\Models\Numeration;

class NumerationObserver
{
    /**
     * Handle the Numeration "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function retrieved(Numeration $numeration)
    {
        //
    }

    /**
     * Handle the Numeration "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function creating(Numeration $numeration)
    {
        //
    }

    /**
     * Handle the Numeration "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function created(Numeration $numeration)
    {
        //
    }

    /**
     * Handle the Numeration "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function updating(Numeration $numeration)
    {
        //
    }

    /**
     * Handle the Numeration "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function updated(Numeration $numeration)
    {
        //
    }

    /**
     * Handle the Numeration "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function saving(Numeration $numeration)
    {
        //
    }

    /**
     * Handle the Numeration "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function saved(Numeration $numeration)
    {
        //
    }

    /**
     * Handle the Numeration "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function deleting(Numeration $numeration)
    {
        //
    }

    /**
     * Handle the Numeration "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function deleted(Numeration $numeration)
    {
        //
    }

    /**
     * Handle the Numeration "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function restoring(Numeration $numeration)
    {
        //
    }

    /**
     * Handle the Numeration "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function restored(Numeration $numeration)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Numeration  $numeration
     * @return void
     */
    public function forceDeleted(Numeration $numeration)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Numeration;
use App\Observers\NumerationObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Numeration::observe(NumerationObserver::class);

... }

