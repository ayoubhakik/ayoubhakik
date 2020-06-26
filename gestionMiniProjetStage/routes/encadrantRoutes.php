<?php
     Route::get('/encadrant', 'encadrantController@accueil');
     Route::get('/encadrant/profile', 'encadrantController@profile');
     Route::get('/encadrant/afficherGrp/{id}', 'encadrantController@afficherGrp');
     Route::get('/encadrant/listerGroupes/{id}', 'encadrantController@listerGroupes');
     Route::get('/encadrant/listerEtudiants', 'encadrantController@listerEtudiants');
     Route::post('/encadrant/modifierProfile', 'encadrantController@modifierProfile');


     Route::post('/encadrant/evaluer', 'encadrantController@evaluer');
     Route::post('/encadrant/sendMail', 'encadrantController@sendMail');
