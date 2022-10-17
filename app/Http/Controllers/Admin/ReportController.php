<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Transaction::select(sprintf('%s.*', (new Transaction())->table));
            $table = Datatables::of($query);

            $table->editColumn('short_link', function ($row) {
                return "<a href=\"{$row->short_link}\">{$row->short_link}</a>";
            });

            $table->editColumn('created_by', function ($row) {
                $user = User::find($row->created_by);
                return $user->email ?? '-';
            });

            $table->rawColumns(['short_link']);

            return $table->make(true);
        }

        return view('admin.pages.report.index');
    }
}
