<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AudioUploadsController extends Controller
{
    public function tmpUpload(Request $request)
    {
        if($request->hasFile('audio_comp') || $request->hasFile('audio_med')){
            $audio = $request->file('audio_comp') ?: $request->file('audio_med');
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

    public function tmpDelete()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first(); // filepond sends a delete request of the folder name with request body
        if($tmp_file){
            Storage::deleteDirectory('uploads/tmp/'.$tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }
}
