<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Question 1
Route::post( '/user-info', [AssigmentController::class, 'UserInfo'] );

// Question 2
Route::get( '/user-agent', [AssigmentController::class, 'UserAgent'] );

// Question 3
Route::get( '/query', [AssigmentController::class, 'queryParameter'] );

// Question 4
Route::get( '/json-response', [AssigmentController::class, 'JsonResponse'] );

// Question 5
Route::post( '/upload', [AssigmentController::class, 'FileUploads'] );

// Question 6
Route::post( '/cookie', [AssigmentController::class, 'SetCookie'] );

// Question 7
Route::post( '/submit', function ( Request $request ) {
    $email = $request->input( 'email' );

    $response = array(
        "success" => true,
        "message" => "Form submitted successfully.",
    );

    if ( $email ) {
        return response()->json( $response );
    } else {
        return "Email should not be empty!";
    }
} );