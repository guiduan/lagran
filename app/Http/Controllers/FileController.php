<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function get(Request $request)
    {
        $id = $request->input('id', '01');
        $type = $request->input('type', 'pdf');
        switch ($type) {
            case 'odt':
                $ext = 'odt';
                break;
            case 'ods':
                $ext = 'ods';
                break;
            case 'video':
                $ext = 'mp4';
                break;
            default:
                $ext = 'pdf';
        }
        $path = storage_path('attachments/' . $type . 's/' . $id . '.' . $ext);
        if (!file_exists($path)) {
            $path = storage_path('attachments/pdfs/01.pdf');
        }
        return response()->file($path, []);
    }
}
