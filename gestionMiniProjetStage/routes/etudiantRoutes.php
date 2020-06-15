<?php
Route::get('/layoutEtudiant',function(){
    return view('layoutEtudiant');
});
Route::get('/etudiant/login',function(){
    return view('Etudiant/login');
});
Route::get('/etudiant/listEtudiant',function(){
    return view('Etudiant/listEtudiant');
});
Route::get('/etudiant/stage',function(){
    return view('Etudiant/Stage');
});
Route::get('/etudiant/mp',function(){
    return view('Etudiant/Mprojet');
});

Route::get('/etudiant/message',function(){
    return view('Etudiant/message');
});
