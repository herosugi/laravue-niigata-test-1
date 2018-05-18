<?php

use Illuminate\Http\Request;

use App\Entry;
use App\Http\Resources\Entry as EntryResource;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/entry', function () {
    return EntryResource::collection(Entry::all());
});

Route::post('/entry', function (Request $request) {
    $entry = new Entry;
    $entry->title = $request->input('title');
    $entry->content = $request->input('content');

    $entry->save();
    return ['ok'];
});
