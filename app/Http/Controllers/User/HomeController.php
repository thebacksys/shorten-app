<?php

namespace App\Http\Controllers\User;

use App\Helpers\ShortLink;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Transaction::where('created_by', auth()->user()->id)->select(sprintf('%s.*', (new Transaction())->table));
            $table = Datatables::of($query);

            $table->editColumn('short_link', function ($row) {
                return "<a href=\"{$row->short_link}\">{$row->short_link}</a>";
            });

            $table->rawColumns(['short_link']);

            return $table->make(true);
        }

        return view('user.pages.home.index');
    }

    public function storeShortenLink(Request $request)
    {
        $tran = Transaction::create([
            'origin_link' => $request->origin_link,
            'created_by' => auth()->user()->id,
        ]);
        $tran->short_link = env('APP_URL') . '/dec?i=' . ShortLink::encode($tran->id);
        $tran->save();
        return view('user.pages.home.index');
    }

}
