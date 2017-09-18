<?php
$I = new ApiTester($scenario);
$I->wantTo('create a user via API');
//$I->amHttpAuthenticated('service_user', '123456');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('/getConfig', ['key' => 'Wxu9dutZfOPCCgSxr1uIiPZB', 'ccode' => '1323245454']);
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
$I->seeResponseIsJson();
$I->seeResponseContains('{"result":"ok"}');