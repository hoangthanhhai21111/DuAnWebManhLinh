<?php

namespace App\Http\Controllers;

use App\Models\Hang;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;

class KhoaHocController extends Controller
{
   function index(Request $request){
    $key = $request->key??'';
    $hang_id = $request->hang_id??'';
    $name = $request->name??'';
    $query = KhoaHoc::query(true);
 if($key){
    $query->orWhere('id', $key);
    $query->orWhere('hang_id', $key);
    $query->orWhere('ten_khoa_hoc', 'LIKE', '%' . $key . '%');
 }
 if($hang_id){
    $query->Where('hang_id', $hang_id);
 }
 if($name){
    $query->Where('ten_khoa_hoc', 'LIKE', '%' . $key . '%');
 }
    $hangs = Hang::all();
    $khoahocs=$query->orderBy('id', 'DESC')->paginate(5);
    $params=[
        'hangs' => $hangs,
        'khoahocs' => $khoahocs,
        'f_hang_id' => $hang_id,
    ];
    return view('backend.khoahoc.index',$params);
   }
   function create(){
    $hangs = Hang::all();
     return view('backend.Khoahoc.create', compact('hangs'));
   }
}
