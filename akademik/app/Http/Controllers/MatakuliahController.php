<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Matakuliah;
class MatakuliahController extends Controller
{
public function index()
{
return view('matakuliah.index');

}
public function apiIndex()
{
    $matakuliah = Matakuliah::all();

    return response()->json([
        'success' => true,
        'message' => 'Berhasil mengambil daftar data mata kuliah',
        'data' => $matakuliah
    ], 200);
}
}