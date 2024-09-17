<?php

namespace App\Services;

class HubSpotFeedService extends RssFeedService
{
    public function __construct()
    {
        parent::__construct('https://blog.hubspot.com/feed');
    }
}
