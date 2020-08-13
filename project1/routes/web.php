<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function(){
    $posts1 = "My first post";
    $posts2 = "<script>alert('This is BAD');</script>";
    $names =["Milica", "Lana", "Natasa"];
    return view('/posts',['post1'=>$posts1, "post2"=>$posts2, "names"=>$names]);
});

Route::get('/post', function(){
    return view('/post');
});


Route::get('/oglasi', function(){
    $oglasi =[
        "1"=>"Lenovo laptop",
        "2"=>"Golf 5",
        "3"=>"AT mikrofon"
    ];

    return view("/oglasi", ["oglasi"=>$oglasi]);

});

Route::get("/oglas/{id}", function($id){
    $oglasi =[
        "1"=>"Lenovo laptop",
        "2"=>"Golf 5",
        "3"=>"AT mikrofon"
    ];
    // $id = Route::input('id');

    if(key_exists($id, $oglasi)){
        $oglas = $oglasi[$id];

        return view("/oglas", ["oglas"=>$oglas]);
        
    }else{
        abort(404, "Takav oglas nije u nasoj bazi");
    }

    

});

Route::get("/about", function(){

    $cars = [
        "1"=>"Audi",
        "2"=>"Mercedes",
        "3"=>"Fiat",
        "4"=>"Toyota",
        "5"=>"Golf",
    ];
    
    return view("/about", ["cars"=>$cars]);


    
});