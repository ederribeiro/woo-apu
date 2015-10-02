<?php

namespace Woo\ApuBundle\Client;

use WC_API_Client;

class WooApuClient extends WC_API_Client
{
    
    public function __construct($consumerKey, $consumerSecret, $shop, $debug)
    {
        parent::__construct($shop, $consumerKey, $consumerSecret);
    }
}
