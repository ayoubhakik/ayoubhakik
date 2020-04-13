<?php 
     Route::get('/encadrant/accueil', 'encadrantController@accueil');
     Route::get('/encadrant/profile', 'encadrantController@profile');
     Route::get('/encadrant/afficherGrp', 'encadrantController@afficherGrp');
     Route::get('/encadrant/listerGroupes', 'encadrantController@listerGroupes');
     Route::get('/encadrant/listerEtudiants', 'encadrantController@listerEtudiants');
     Route::post('/encadrant/modifierProfile', 'encadrantController@modifierProfile');
    // Route::get('/encadrant/profile/{id}', function($id){
    //     $vars = [
    //         'my-first-var' => 'Hello there one',
    //         'my-second-var' => 'Hello there two',
    //     ];
        
    //     if (! array_key_exists($id, $vars)) {
    //         abort(404,"gomen, this elmt doesn't exist !");
    //     }
        
    //     return view('encadrantViews/profile', [
    //         'var' => $vars[$id] ?? 'Oh là, vous depassez les limites la'
    //     ]);




    // });