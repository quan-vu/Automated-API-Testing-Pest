<?php

namespace Tests\Github;

it('Get user information', function () {
    $response = BaseGithubTestCase::client()->get(Config::PUBLIC_USER_INFO);
    $data = json_decode($response->getBody(), true);
    $this->assertNotEmpty($data);
    $this->assertEquals(200, $response->getStatusCode());
    expect($data)->toHaveKeys(['id', 'name']);
});