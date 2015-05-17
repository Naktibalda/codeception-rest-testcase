<?php 
$I = new FunctionalTester($scenario);

$I->sendGET('/rest');
$I->seeResponseIsJson();

