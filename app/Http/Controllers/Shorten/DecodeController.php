<?php

namespace App\Http\Controllers\Shorten;

use App\Helpers\ShortLink;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DecodeController extends Controller
{
    public function decodeShortLink(Request $request)
    {
        $tranId = ShortLink::decode($request->i);
        $tran = Transaction::find($tranId);
        if (!$tran) {
            \abort(404);
        }
        return redirect()->away($tran->origin_link);
    }
}
