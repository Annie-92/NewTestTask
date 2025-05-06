<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;


class QrPageController extends Controller
{
    public function show(Request $request)
    {
        $code = $request->query('code');
        $device = Device::where('code', $code)->first();

        if (!$device) {
            return view('qr.show', ['deviceNotFound' => true]);
        }

        return view('qr.show', [
            'device' => $device,
            'deviceNotFound' => false
        ]);
    }
}
