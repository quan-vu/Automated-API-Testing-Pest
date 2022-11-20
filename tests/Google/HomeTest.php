<?php

it('Get google homepage', function () {
    $content = file_get_contents('https://google.com');
    $this->assertNotEmpty($content);
});