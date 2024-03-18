<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Ticket::class => \App\Policies\V1\TicketPolicy::class,
        User::class => \App\Policies\V1\UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
