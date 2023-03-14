<?php

use App\Http\Controllers\Curriculo\CriarCurriculoController;
use App\Http\Controllers\Curriculo\ListarCurriculosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/dependencia/{id}', function (Request $request, int $id) {
    if ($request->has('nome_completo')) {
        return response()->json([
            'Aluno salvo',
            $id
        ], 200);
    }
    return response()->json('Ops! houve um problema', 500);
})
    ->name('dependencia')
    ->where(['id' => '[0-9]+']);


Route::get('/curriculo/listar', ListarCurriculosController::class);
Route::post('/curriculo/salvar', CriarCurriculoController::class);
