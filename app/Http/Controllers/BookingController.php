<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
    public function BookingOne()
    {
        return view('bookings.booking-step-one');
    }

    public function BookingOneVerify(Request $request)
    {

    }

    public function BookingTwo()
    {
        return view('bookings.booking-step-two');
    }

    public function BookingTwoVerify(Request $request)
    {

    }

    public function BookingThree()
    {
        return view('bookings.booking-step-three');
    }

    public function BookingThreeVerify(Request $request)
    {

    }

    public function store(Request $request)
    {
        // this is just a overview how you move uploaded files
        // from tmp to the final destination
        $tmp_file = TemporaryFile::where('folder', $request->audio_comp)->first();
        if($tmp_file){
            Storage::copy('uploads/tmp/'.$tmp_file->folder.'/'.$tmp_file->file, 'uploads/'.$tmp_file->folder.'/'.$tmp_file->file);

            // then you can now insert into bookings the available details
            /**
             * for instance
             * Booking::create({
             *  bla bla bla
             * })
             */
            Storage::deleteDirectory('uploads/tmp/'.$tmp_file->folder);
            $tmp_file->delete();
            return redirect(); // so redirect as desired
        }
    }
}
