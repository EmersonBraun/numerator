<?php

namespace App\Observers;

use App\Models\Option;

class OptionObserver
{
    /**
     * Handle the Option "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function retrieved(Option $option)
    {
        //
    }

    /**
     * Handle the Option "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function creating(Option $option)
    {
        //
    }

    /**
     * Handle the Option "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function created(Option $option)
    {
        //
    }

    /**
     * Handle the Option "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function updating(Option $option)
    {
        //
    }

    /**
     * Handle the Option "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function updated(Option $option)
    {
        //
    }

    /**
     * Handle the Option "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function saving(Option $option)
    {
        //
    }

    /**
     * Handle the Option "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function saved(Option $option)
    {
        //
    }

    /**
     * Handle the Option "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function deleting(Option $option)
    {
        //
    }

    /**
     * Handle the Option "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function deleted(Option $option)
    {
        //
    }

    /**
     * Handle the Option "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function restoring(Option $option)
    {
        //
    }

    /**
     * Handle the Option "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function restored(Option $option)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Option  $option
     * @return void
     */
    public function forceDeleted(Option $option)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Option;
use App\Observers\OptionObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Option::observe(OptionObserver::class);

... }

