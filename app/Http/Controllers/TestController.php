<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $filename = storage_path('attachments/pdfs/');
        dd($filename);

        return response()->file($filename);
    }
}
