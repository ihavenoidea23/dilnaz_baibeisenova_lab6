<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

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
Route::get('/insert', function () {
    DB::insert('insert into students(name,date_of_birth,GPA,advisor) values(?,?,?,?)',["Aruzhan",'04.05.02',2.9,"Ualikhan Sadyk"]);});
Route::get('/insert2', function () {
    DB::insert('insert into students(name,date_of_birth,GPA,advisor) values(?,?,?,?)',["Dilnaz",'04.05.03',3,"Ualikhan Sadyk"]);});
    Route::get('/insert3', function () {
        DB::insert('insert into students(name,date_of_birth,GPA,advisor) values(?,?,?,?)',["Erzhan",'04.09.03',3,"Kuat Berdenov"]);});
        Route::get('/insert4', function () {
            DB::insert('insert into students(name,date_of_birth,GPA,advisor) values(?,?,?,?)',["Nurzhan",'02.05.03',3,"Ualikhan Sadyk"]);});
Route::get('/select',function(){
    $results=DB::select('select*from students where id=?',[1]);
    foreach($results as $students){
        echo "name is:".$students->name;
        echo "<br>";
        echo "date of birth is:".$students->date_of_birth;
    }
});
Route::get('/update', function(){
$updated=DB::update('update students set name="Amina" where id=?',[1]);
return $updated;});
Route::get('/delete',function(){
    $deleted=DB::delete('delete from students where id=?',[1]);
    return $deleted;
});
Route::get('/students/add', function () {
DB::table('students')->insert([
    'name'=>'Abylay',
    'date_of_birth'=>"09.08.02",
    'GPA'=>2,
    'advisor'=>"Aslan Good"
]);
});
Route::get('students',function(){
    $students=Post::find(1);
    return $students;
});
Route::get('/destroy',function(){
    Post::destroy(6);
});
Route::get('/delete',function(){
    Post::where('id',5)->delete();

});