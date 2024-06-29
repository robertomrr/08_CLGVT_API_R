<?php
// Original_________________________________________________________________________Nativo
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//    return $request->user();
//});

//Custom_________________________________________________________________________Visão geral do conceito
//use App\Http\Resources\UserResource;
//use App\Models\User;
 
//Route::get('/user/{id}', function (string $id) {
//    return new UserResource(User::findOrFail($id));
//});

//Custom_________________________________________________________________________Coleções de Recursos
//Observe que isso não permite qualquer adição de metadados personalizados que possam precisar ser retornados com sua coleção. 
//use App\Http\Resources\UserResource;
//use App\Models\User;
 
//Route::get('/users', function () {
//    return UserResource::collection(User::all());
//});

//Para personalizar a resposta da coleção de recursos, se criar um recurso dedicado para representar a coleção:  php artisan make:resource UserCollection
//use App\Http\Resources\UserCollection;
//use App\Models\User;
 
//Route::get('/users', function () {
//    return new UserCollection(User::all());
//});

//Custom_________________________________________________________________________Preservando as chaves da coleção
//Quando a preserveKeyspropriedade é definida como true, as chaves de coleção serão preservadas quando a coleção for retornada de uma rota ou controlador:
//    use App\Http\Resources\UserResource;
//    use App\Models\User;
     
//    Route::get('/users', function () {
//        return UserResource::collection(User::all()->keyBy->id);
//    });  

//Custom_________________________________________________________________________Recursos de escrita
//use App\Http\Resources\UserResource;
//use App\Models\User;
 
//Route::get('/user/{id}', function (string $id) {
//    return new UserResource(User::findOrFail($id));
//});

//Custom_________________________________________________________________________Paginação
use App\Http\Resources\UserCollection;
use App\Models\User;
 
Route::get('/users', function () {
    return new UserCollection(User::paginate());
});