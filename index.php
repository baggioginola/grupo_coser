<?php

require_once __DIR__ . '/includes/header.inc.php';

require_once __DIR__ . '/routes.frontend.php';

$app->post('/contacto/sendMessage', function() use($app){
    require_once __CONTROLLER__.'CContactController.class.inc.php';
    if(!$result = Contact::singleton()->sendMessage()){
        echo 'Fail';
    }
    echo $result;

});


$app->run();