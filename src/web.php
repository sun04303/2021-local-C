<?php
    use App\Route;

    Route::get("/", "ViewController@main");
    Route::get('/sub1', "ViewController@sub1");
    Route::get('/year', 'ViewController@year');
    Route::get('/month', 'ViewController@month');
    Route::get('/phone', 'ViewController@phone');
    Route::get('/photo', 'ViewController@photo');
    Route::get('/showEdit', 'ViewController@showEdit');
    Route::get('/editnih', 'ViewController@editnih');
    Route::get('/history', 'ViewController@history');
    Route::get('/nihstatus', 'ViewController@nihstatus');
    Route::get('/showstatus', 'ViewController@showstatus');
    Route::get('/openAPI/nihList.php', 'ViewController@viewNihStatus');
    Route::get('/openAPI/showList.php', 'ViewController@viewShowStatus');

    Route::post("/del", "ActionController@del");
    Route::post("/load", "ActionController@load");
    Route::post("/load1", "ActionController@load1");
    Route::post("/enroll", "ActionController@enroll");
    Route::post("/upload", "ActionController@upload");
    Route::post('/showDel', "ActionController@showDel");
    Route::post('/loadShow', 'ActionController@loadShow');
    Route::post('/showDate', 'ActionController@showDate');
    Route::post('/showUpdate', 'ActionController@showUpdate');
    
    
    //Route::get("/test", "ViewController@test");

    Route::start();