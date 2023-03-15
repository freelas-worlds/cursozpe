<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use App\Models\Curriculo\Curriculo;
use Exception;

class DeletarCurriculoController extends Controller
{
    private $curriculo;

    public function __construct(Curriculo $curriculo)
    {
        $this->curriculo = $curriculo;
    }

    public function __invoke($id = null)
    {
        try {
            $curriculo = $this->curriculo->findOrFail($id);
            $curriculo->delete();

            return response()->json($curriculo, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
