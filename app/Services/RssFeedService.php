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
        $xml = simplexml_load_string($feedContent, null, LIBXML_NOCDATA);
        $namespaces = $xml->getNamespaces(true);

        $jsonFeed = json_decode(json_encode($xml), true);

        // Handle media:content namespace if it exists
        if (isset($namespaces['media'])) {
            foreach ($xml->channel->item as $item) {
                $media = $item->children($namespaces['media']);
                if (isset($media->content)) {
                    $jsonFeed['channel']['item'][]['media:content'] = (array) $media->content;
                }
            }
        }

        return $jsonFeed; // Convert XML to array and return
    }

    public function getLatestPostUrl()
    {
        $feedContent = $this->fetchFeed();
        $feedData = $this->parseFeed($feedContent);

        if (isset($feedData['channel']['item'][0])) {
            $latestPost = $feedData['channel']['item'][0];

            // Handle image extraction
            $imageUrl = null;
            if (isset($latestPost['media:content']['@attributes']['url'])) {
                $imageUrl = $latestPost['media:content']['@attributes']['url'];
            } elseif (isset($latestPost['enclosure']['@attributes']['url'])) {
                $imageUrl = $latestPost['enclosure']['@attributes']['url'];
            }

            return [
                'title' => $latestPost['title'],
                'link' => $latestPost['link'],
                'description' => $latestPost['description'],
                'image' => $imageUrl
            ];
        }

        return null; // No posts found
    }

    public function setFeedUrl($feedUrl)
    {
        $this->feedUrl = $feedUrl;
    }
}
