<?php

namespace App\Http\Controllers;

use App\Services\HubSpotFeedService;
use App\Services\DemandGenFeedService;

class RssFeedController extends Controller
{
    protected $hubSpotFeedService;
    protected $demandGenFeedService;

    public function __construct(HubSpotFeedService $hubSpotFeedService, DemandGenFeedService $demandGenFeedService)
    {
        $this->hubSpotFeedService = $hubSpotFeedService;
        $this->demandGenFeedService = $demandGenFeedService;
    }

    public function resources()
    {
        $latestHubSpotPostUrl = $this->hubSpotFeedService->getLatestPostUrl();
        $latestDemandGenPostUrl = $this->demandGenFeedService->getLatestPostUrl();

        return view('resources', [
            'latestHubSpotPostUrl' => $latestHubSpotPostUrl,
            'latestDemandGenPostUrl' => $latestDemandGenPostUrl,
        ]);
    }
}
