<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/index.php');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->see('Основная общеобразовательная школа с. Колосово'); // ! Проверка что заголовок отображается
$I->see('Село Колосово относится к Гостовскому сельскому поселению. На сегодняшний день в школе 11 учеников, 10 дошкольников и 6 педагогов. Учебный план удовлетворяет образовательные потребности школьников в обеспечении качественного образования и развития ключевых ');
$I->amOnPage('/aboutus.php');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->see('Основные сведения о школе'); // !проверить отображается ли H1
$I->see('Точной  даты  основания  школы  нет. Школа расположена в 32 км от пгт.');
$I->see('Элективные курсы по русскому языку и математике расширяют кругозор учащихся, вооружают их практическими навыками.');
$I->see('Разработчик Глушков Иван');
$I->see('личностно-ориентированного обучения;');
$I->amOnPage('/contacts.php');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->see('ИНН 4337000140'); // !проверить отображается ли реквизиты
$I->amOnPage('/documents.php');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->see('Скачать с сервера 58,8 Kb'); // !проверить отображается ли ссылка на скачивание
$I->amOnPage('/photo.php');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->see('Разработчик Глушков Иван'); // !проверить отображается ли наименование разработчика