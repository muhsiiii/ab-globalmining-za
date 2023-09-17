<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function PdfShow($id)
    {
        $pdf = DB::table('careers')->where('id', decrypt($id))->first();
        if (!$pdf) {
            abort(404);
        }
        $path = public_path('/careers/' . $pdf->file);
        return response()->file($path);
    }
}
