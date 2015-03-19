<?php

$projectDir = realpath(dirname(__FILE__) . '/../../');
$authDir = $projectDir . '/src/Common/Authentication';
$commonDir = $projectDir . '/src/Common';
$controllersDir = $projectDir . '/src/Controllers';
$configDir = $projectDir . '/src/Config';
$httpDir = $projectDir . '/src/Common/Http';
$routerDir = $projectDir . '/src/Common/Routers';
$srcDir = $projectDir . '/src';
$viewsDir = $projectDir . '/src/Views';


$config = [
    'app' => [
        'classes'      => [
            'Common\\Authentication\\IAuthentication'           =>  $authDir . '/IAuthentication.php',
            'Common\\Authentication\\FileBased'                 =>  $authDir . '/FileBased.php',
            'Common\\Authentication\\InMemory'                  =>  $authDir . '/InMemory.php',
            'Common\\Authentication\\DataBaseAuthentication'    =>  $authDir . '/DataBaseAuthentication.php',
            'Common\\Http\\IRequest'                            =>  $httpDir . '/IRequest.php',
            'Common\\Http\\SimpleRequest'                       =>  $httpDir . '/SimpleRequest.php',
            'Common\\Routers\\IRouter'                          =>  $routerDir . '/IRouter.php',
            'Common\\Routers\\SimpleRouter'                     =>  $routerDir . '/SimpleRouter.php',
            'Controllers\\AuthController'                       =>  $controllersDir . '/AuthController.php',
            'Controllers\\Controller'                           =>  $controllersDir . '/Controller.php',
            'Controllers\\MainController'                       =>  $controllersDir . '/MainController.php',
            'Controllers\\TestController'                       =>  $controllersDir . '/TestController.php',
            'Views\\LoginForm'                                  =>  $viewsDir . '/LoginForm.php',
            'Views\\View'                                       =>  $viewsDir . '/View.php',
            'Views\\TestView'                                   =>  $viewsDir . '/TestView.php',
            'Views\\AuthenticationSuccessView'                  =>  $viewsDir . '/AuthenticationSuccessView.php',
            'Views\\AuthenticationFailView'                     =>  $viewsDir . '/AuthenticationFailView.php',
        ],
        'dir'          => [
            'authentication' => $authDir,
            'common'         => $commonDir,
            'controllers'    => $controllersDir,
            'config'         => $configDir,
            'http'           => $httpDir,
            'routers'        => $routerDir,
            'src'            => $srcDir,
            'views'          => $viewsDir
        ],
        'uri-mappings' => [
            '/auth' => 'Controllers\\AuthController',
            '/'     => 'Controllers\\MainController',
            '/test' => 'Controllers\\TestController'
        ],
        'db'            => [
            'host'              => '127.0.0.1',
            'dbname'            => 'cs4350',
            'sqlitedbname'      => $commonDir . 'cs4350.sqlite',
            'dbuser'            => 'cs4350',
            'dbpassword'        => 'cs4350'
        ]
                
    ]
];

