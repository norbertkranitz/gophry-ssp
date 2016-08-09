<?php

namespace Gophry\Provider;

use \Pimple\Container;
use \Pimple\ServiceProviderInterface;

use \Gophry\Provider\DTOServiceProvider;
use \Gophry\Provider\ExceptionHandlerServiceProvider;
use \Gophry\Provider\JsonRequestServiceProvider;
use \Gophry\Provider\SecurityServiceProvider;

class GophryServiceProvider implements ServiceProviderInterface {

    public function register(Container $app) {  
        $app->register(new DTOServiceProvider());
        $app->register(new ExceptionHandlerServiceProvider());
        $app->register(new JsonRequestServiceProvider());
        $app->register(new SecurityServiceProvider());
    }

}


