<?php

Route::get('/etudiant/profile',function(){
    return view('Etudiant/profile');
});
Route::get('/etudiant/login',function(){
    return view('Etudiant/login');
});
Route::get('/etudiant/stage',function(){
    return view('Etudiant/Stage');
});
Route::get('/etudiant/mp',function(){
    return view('Etudiant/Mprojet');
});
Route::get('/etudiant/inv',function(){
    return view('Etudiant/invitation');
});
Route::get('/etudiant/notifications',function(){
    return view('Etudiant/notification');
});
Route::get('/etudiant/login',function(){
    return view('Etudiant/login');
});
Route::get('/etudiant/groupe',function(){
    return view('Etudiant/groupe');
});
Route::get('/etudiant/Espacestage',function(){
    return view('Etudiant/groupeminiprojet');
});
Route::get('/etudiant/mp',"etudiantController@getEtudiant");
Route::get('/etudiant/stage',"etudiantController@getEtudiant");
Route::post('/etudiant/login',"etudiantController@login");
Route::get('/etudiant/listEtudiant',"etudiantController@getEtudiant");
Route::get('/etudiant/profile', "etudiantController@profile");
Route::get('/etudiant/deconnecter',"etudiantController@deconnecter");
Route::get('/etudiant/home', "etudiantController@home");
Route::post('/etudiant/user',"etudiantController@submit");
Route::post('/etudiant/modifierProfile', 'etudiantController@modifierProfile');
Route::get('/etudiant/modifierProfile', 'etudiantController@profile');
Route::post('/etudiant/storeImage', 'etudiantController@storeImage');

