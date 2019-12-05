<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/index.php');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->see('Основная общеобразовательная школа с. Колосово'); // ! Проверка что заголовок отображается
$I->amOnPage('/aboutus.php');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->see('Основные сведения о школе'); // !проверить отображается ли H1