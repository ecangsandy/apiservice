<?php

namespace App\Http\Controllers;

use App\Models\TableModel;
use Illuminate\Http\Request;

class TableController extends Controller
{
    //
    public function getdata(Request $reques)
    {
    //    $inp= Input::get();
       $data = TableModel::join('tb_kecamatan', 'tb_kecamatan.kode_kecamatan', '=', 'tb_desa.kode_kecamatan')
       ->where('tb_desa.nama_desa', 'like', '%'.$reques->title.'%')
       ->paginate(10);
    //    ->get();
        return response()->json($data);
    }
}
