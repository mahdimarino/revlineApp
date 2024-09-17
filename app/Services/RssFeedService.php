<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RssFeedService
{
    protected $feedUrl;

    public function __construct($feedUrl)
    {
        $this->feedUrl = $feedUrl;
    }

    public function fetchFeed()
    {
        $response = Http::get($this->feedUrl);

        if ($response->failed()) {
            throw new \Exception("Failed to fetch RSS feed");
        }

        return $response->body();
    }

    public function parseFeed($feedContent)
    {
        $xml = simplexml_load_string($feedContent);
        return json_decode(json_encode($xml), true); // Convert XML to array
    }

    public function getLatestPostUrl()
    {
        $feedContent = $this->fetchFeed();
        $feedData = $this->parseFeed($feedContent);

        // Assuming the feed items are sorted by date (most recent first)
        if (isset($feedData['channel']['item'][0])) {
            return $feedData['channel']['item'][0]['link'];
        }

        return null; // No posts found
    }

    public function setFeedUrl($feedUrl)
    {
        $this->feedUrl = $feedUrl;
    }
}
