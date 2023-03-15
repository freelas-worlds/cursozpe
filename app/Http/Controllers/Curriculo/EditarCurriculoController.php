<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Curriculo\EditarCurriculoRequest;
use App\Models\Curriculo\Curriculo;
use Exception;

class EditarCurriculoController extends Controller
{
    private $curriculo;

    public function __construct(Curriculo $curriculo)
    {
        $this->curriculo = $curriculo;
    }

    public function __invoke(EditarCurriculoRequest $request, $id = null)
    {
        try {
            $curriculo = $this->curriculo->findOrFail($id ?? $request->id);
            $curriculo->update($request->only([
                'first_name',
                'last_name',
                'email',
                'confirmado'
            ]));

            return response()->json($curriculo, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
