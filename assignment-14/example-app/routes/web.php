<?php

use App\Http\Controllers\AssignmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/hello', [AssignmentController::class, 'assignmentAction']);
// Route::controller(AssignmentController::class)->group(function(){
//     Route::get('/hello', 'assignmentAction');
//     Route::get('/hello/{page}', 'scanApi');
//     Route::post('/hello', 'scanFormInput');
//     // Route::get('/photo', 'uploadUserFile');
// });

// Question 1
Route::post( '/user-info', [AssignmentController::class, 'UserInfo'] );

// Question 2
Route::get( '/user-agent', [AssignmentController::class, 'UserAgent'] );

// Question 3
Route::get( '/query', [AssignmentController::class, 'queryParameter'] );

// Question 4
Route::get( '/json-response', [AssignmentController::class, 'JsonResponse'] );

// Question 5
Route::post( '/upload', [AssignmentController::class, 'FileUploads'] );

// Question 6
Route::post( '/cookie', [AssignmentController::class, 'SetCookie'] );

// Question 7
Route::post( '/submit', function ( Request $request ) {
    $email = $request->input( 'email' );

    $response = array(
        "success" => true,
        "message" => "Operation successful!",
    );

    if ( $email ) {
        return response()->json( $response );
    } else {
        return "You must provide an email!";
    }
} );