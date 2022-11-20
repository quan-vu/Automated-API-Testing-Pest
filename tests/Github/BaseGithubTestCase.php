<?php

namespace Tests\Github;

use GuzzleHttp\Client;

abstract class BaseGithubTestCase {

    public static function client(): Client
    {
        return new Client([
            'base_uri' => Config::GITHUB_API_BASE,
            'timeout'  => 5.0,
        ]);
    }
}