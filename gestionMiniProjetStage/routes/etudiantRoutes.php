<?php
Route::get('/etudiant/home',function(){
    return view('Etudiant/home');
});
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
Route::get('/etudiant/message',function(){
    return view('Etudiant/message');
});
Route::get('/etudiant/mp',"etudiantController@getEtudiant");
Route::get('/etudiant/stage',"etudiantController@getEtudiant");
Route::post('/etudiant/login',"etudiantController@login");
