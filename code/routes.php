<?php

// config/routes.php

use App\Controller\BlogController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {

                //('blog_test', '/blog')
    $routes->add('test', '/test')
          
    //controle_class, nome_metodo
        ->controller([BlogController::class, 'test']);


};


return function (RoutingConfigurator $routes) {
    $routes->add('api_post_show', '/api/posts/{id}')
        ->controller([BlogApiController::class, 'show'])
        ->methods(['GET', 'HEAD'])
    ;
    $routes->add('api_post_edit', '/api/posts/{id}')
        ->controller([BlogApiController::class, 'edit'])
        ->methods(['PUT'])
    ;
};


};

?>
