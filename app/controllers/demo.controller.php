<?php

//GET route
$app->get('/', function () use ($app) {

    $options = array();
    $options['appPage'] = array(
        "title"=>"RedMars",
        "description"=>"A bootstrap for your PHP development",
        "keywords"=>"RedMars, PHP, RedSlim, Slim, RedBean PHP, Twig, Twitter Bootstrap, jQuery",
        "author"=>"Elvis Salaris elvis@mars1982.com"
    );

    $options['pmenu'] = array(
        array('desc' => 'Slim', 'url' => 'http://www.slimframework.com/'),
        array('desc' => 'Redbean', 'url' => 'http://redbeanphp.com/'),
        array('desc' => 'Twig', 'url' => 'http://twig.sensiolabs.org/'),
        array('desc' => 'Twitter Bootstrap', 'url' => 'http://getbootstrap.com/'),
    );

    $options['smenu'] = array(
        array('desc' => 'GitHub Repository', 'url' => 'https://github.com/vanting/RedSlim'),
        array('desc' => 'Composer/Packagist', 'url' => 'https://packagist.org/packages/redslim/redslim'),
        array('desc' => 'Pagoda Box App Cafe', 'url' => 'https://pagodabox.com/cafe/vanting/redslim'),
    );

    $app->view()->appendData($options);
    $app->render('demo.html.twig');
})->name('home');

?>