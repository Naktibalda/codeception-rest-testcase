<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('make GET request with custom reques header');
$I->haveHttpHeader('X-Auth-Token', 'verySecureToken');
$I->sendGET('/rest');

$expectedResponse = array(
    'requestMethod' => 'GET',
    'queryParams' => array(),
    'headers' => array(
        'X_AUTH_TOKEN' => 'verySecureToken',
    ),
);
$I->seeResponseContainsJson($expectedResponse);