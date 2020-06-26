<?php

Route::get('/departement/home','DepartementsController@home');

Route::get('/departement/user','DepartementsController@user');



Route::get('/departement/etudiant/import','DepartementsController@importEtudiants');
Route::get('/departement/etudiant/list','DepartementsController@listEtud');
Route::get('/departement/enseignant/list','DepartementsController@listEns');
Route::get('/departement/enseignant/list','DepartementsController@listEns');

Route::get('/departement/enseignant/import','DepartementsController@importEnseignants');
Route::get('/departement/encadrantstage/list','DepartementsController@EncadMpStat');
Route::get('/departement/encadrentsMiniProjet/list','DepartementsController@EncadStage');

//Route::get('/departement/encadrentsMiniProjet/list','DepartementsController@listEncadrant');
//Route::get('/departement/encadrantmp/statistique','DepartementsController@EncadMiniProjet');


Route::get('/departement/etudiant/list', 'DepartementsController@listEtud');
Route::post('/list/fetch', 'DepartementsController@fetch')->name('list.fetch');






Route::get('/departement/encadrentsMiniProjet/statistique','DepartementsController@staticMP');





Route::get('/departement/groupes/listChef',function(){
    return view('Departement/Groupes/listChef');
});
Route::get('/departement/groupes/listGroupes',function(){
    return view('Departement/Groupes/listGroupes');
});
Route::get('/departement/encadrentsStage/list','DepartementsController@EncadMpStat');
Route::get('/departement/encadrentsStage/statistique',function(){
    return view('Departement/EncadrentsStage/statistique');
});

Route::get('/departement/notifications',function(){
    return view('Departement/notifications');
});

Route::get('/departement/rapports/rapportsStage',function(){
    return view('Departement/Rapports/rapportsStage');
});
Route::get('/departement/rapports/rapportsMiniProjet',function(){
    return view('Departement/Rapports/rapportsMiniProjet');
});

Route::get('/departement/Setting',function(){
    return view('Departement/Setting');
});
Route::get('/departement/datesoutenance',function(){
    return view('Departement/datesoutenance');
});
//route pour le home
Route::get('/departement/',function(){
    return view('Departement/home');
});

/////RESTFUL METHODS 

//user edit
Route::put('/departement/user/{id}/editInfos','DepartementsController@editUser');
Route::put('/departement/user/{id}/editSocial','DepartementsController@editSocial');
Route::put('/departement/user/{id}/editPassword','DepartementsController@editPassword');
Route::put('/departement/user/{id}/storeImage','DepartementsController@storeImage');

///import students from excel
Route::post('/departement/etudiant/importEtudiants', 'DepartementsController@importEtudiantExcel');

Route::post('/departement/enseignant/importEnseignants', 'DepartementsController@importEnseignantExcel');
