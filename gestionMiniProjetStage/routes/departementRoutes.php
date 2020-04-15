<?php

Route::get('/departement/home',function(){
    return view('Departement/home');
});

Route::get('/departement/notifications',function(){
    return view('Departement/notifications');
});

Route::get('/departement/table',function(){
    return view('Departement/table');
});

Route::get('/departement/typography',function(){
    return view('Departement/typography');
});

Route::get('/departement/user',function(){
    return view('Departement/user');
});

Route::get('/departement/',function(){
    return view('Departement/home');
});

Route::get('/departement/groupes/listGroupes',function(){
    return view('Departement/Groupes/listGroupes');
});

Route::get('/departement/EncadrentsStage/list',function(){
    return view('Departement/EncadrentsStage/list');
});