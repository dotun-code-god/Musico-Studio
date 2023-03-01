<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AudioUploadsController extends Controller
{
    public function tmpUpload(Request $request)
    {
        if($request->hasFile('audio_comp')){
            $audio = $request->file('audio_comp');
            $fileName = $audio->getClientOriginalName();
            $folder = uniqid() . '-' .now()->timestamp;
            $audio->storeAs('uploads/tmp/'.$folder, $fileName);
            TemporaryFile::create([
                'folder' => $folder,
                'file' => $fileName
            ]);
            return $folder;
        }
        return '';
    }

    public function tmpDelete(Request $request)
    {

    }
}
