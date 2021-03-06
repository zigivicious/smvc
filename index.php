<?php

require 'app/bootstrap.php';

//initiate config
new \core\config();

//create alias for Router
use \core\router,
    \helpers\url;

//define routes
Router::any('', '\controllers\welcome@index');
Router::any('/order', '\controllers\order@index');
Router::any('/subpage', '\controllers\welcome@subpage');
Router::any('/order/new', '\controllers\Order@newOrder');

//if no route found
Router::error('\core\error@index');

//turn on old style routing
Router::$fallback = false;

//execute matched routes
Router::dispatch();
