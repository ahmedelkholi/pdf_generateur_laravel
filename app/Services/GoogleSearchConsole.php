<?php

namespace App\Services;

use Google_Client;
use Google_Service_Webmasters;
use Google_Service_Webmasters_SearchAnalyticsQueryRequest;

class GoogleSearchConsole
{
    protected $client;
    protected $webmastersService;

    public function __construct()
    {
        // Create the client
        $this->client = new Google_Client();
        $this->client->setApplicationName("Google Search Console Integration");
        $this->client->setScopes([Google_Service_Webmasters::WEBMASTERS_READONLY]);
        $this->client->setAuthConfig(storage_path('app/google-api-credentials.json')); // Path to your credentials file
        $this->client->setAccessType('offline');

        // Initialize the webmasters service
        $this->webmastersService = new Google_Service_Webmasters($this->client);
    }

    // Function to get Search Console data
    public function getSearchAnalyticsData($siteUrl, $startDate, $endDate)
    {
        // Query for search analytics data
        $queryRequest = new Google_Service_Webmasters_SearchAnalyticsQueryRequest();
        $queryRequest->setStartDate($startDate);
        $queryRequest->setEndDate($endDate);
        $queryRequest->setDimensions(['query']);  // Example: Get search queries

        $response = $this->webmastersService->searchanalytics->query($siteUrl, $queryRequest);

        return $response;
    }
}
