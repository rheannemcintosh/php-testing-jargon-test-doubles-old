<?php

namespace App;

class Gateway
{
    protected $stripe;

    public function create()
    {
        // Performs the Stripe HTTP request.
        // $this->stripe->performStripeHTTPRequest();
        var_dump('Slow HTTP request in progress.');
    }
}