<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Curriculo\CriarCurriculoRequest;
use App\Models\Curriculo\Curriculo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CriarCurriculoController extends Controller
{
    private $curriculo;

    public function __construct(Curriculo $curriculo)
    {
        $this->curriculo = $curriculo;
    }

    public function __invoke(CriarCurriculoRequest $request)
    {
        try {
            $curriculo = $this->curriculo->create($request->only([
                'first_name',
                'last_name',
                'email',
                'confirmado'
            ]));

            return response()->json($curriculo, 201);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
