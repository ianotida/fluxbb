<?php

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let's turn on the lights.
| This bootstraps the framework and gets it ready for use, meaning
| it just loads a couple of files that can not be handled by the
| class loader automatically generated by the Composer loaders.
|
*/

$app = Illuminate\Foundation\Lightbulb::on();

/*
|--------------------------------------------------------------------------
| Define The Application Path
|--------------------------------------------------------------------------
|
| Here we just defined the path to the application directory. Most likely
| you will never need to change this value, as the default setup should
| work perfectly fine for the vast majority of all application setups.
|
*/

$app['path'] = __DIR__.'/app';

/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Illuminate takes a dead simple approach to application environments.
| Just specify the hosts that belong to a given environment, and we
| will quickly detect and set the application environment for you.
|
*/

$app->detectEnvironment(array(

	'local' => array('localhost', '*.dev', '*.app'),

));

/*
|--------------------------------------------------------------------------
| Load The Application
|--------------------------------------------------------------------------
|
| Here we will load the Illuminate application. We keep this is in
| a separate location so we can isolate the creation of the it
| from the actual running of the application, allowing us
| to easily test and inspect the application outside
| of a web request context such as with PHPUnit.
|
*/

require_once __DIR__.'/vendor/illuminate/foundation/src/start.php';

return $app;