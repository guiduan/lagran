<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function player(Request $request)
    {
        $url = $request->input('url', '');
        return response()->view('video.player', ['url' => $url]);
    }

    public function get(Request $request, $vid, $file)
    {
        //dd(storage_path('attachments/videos/' . $vid . '/' . $file));
        return response()->file(storage_path('attachments/videos/' . $vid . '/' . $file));
    }
}
