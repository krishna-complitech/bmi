<?php
    //Route::group(['namespace' => 'Complitech\BMI\Controllers','prefix' => 'complitech/bmi'],function(){
    //   Route::get('/',['as' => 'bmi_path','uses' => 'BMIController@index']); 
    //});
    
    Route::get('/complitech/bmi',['as'=>'bmi_path','uses'=>'Complitech\BMI\Controllers\BMIController@index']);
?>
