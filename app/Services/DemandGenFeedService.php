<?php

namespace App\Services;

class DemandGenFeedService extends RssFeedService
{
    public function __construct()
    {
        parent::__construct('https://www.demandgenreport.com/feed/');
    }
}
