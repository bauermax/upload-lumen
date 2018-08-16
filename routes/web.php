<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
//DEFAULT ROUTE
$router->get('/',function(){return response()->json('api root');});

//APP ROUTES

/* PUBLIC ROUTES */
$router->post('uploadFile','UploadController@uploadFile');
$router->post('auth/login', 'AuthController@authenticate');


/* PRIVATE ROUTES */
