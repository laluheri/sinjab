<?php

namespace App\Http\Controllers;

use App\Models\Abk;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;
use PDF;
use function PHPUnit\Framework\isNull;

class AbkController extends Controller
{
    function index(){
        $jabtan = Jabatan::where("unit_kerja_id",3)->get();
        return view('abk.abk',['jabatan' => $jabtan]);
    }

    function listJabatan(){
        $jabatans = DB::table('jabatan')->select('jabatan','jabatan.id')->distinct()
        ->join('abk', 'jabatan.id', '=', 'abk.id_jabatan')
        ->get();

        return view('abk.jabatan',['jabatans' => $jabatans]);
    }

    function showAbk($id){
        return view('abk.listabk');
    }

    function cetak($id){
        $jabatan = Jabatan::find($id);


        $pdf = PDF::loadView('abk.cetakAbk',['jabatan'=>$jabatan]);
         return $pdf->stream();
    }

    function save(Request $request){

        $jabatan = $request->input('jabatan');
        //
        $uraian  = $request->input('uraian');

        foreach($uraian as $u){
         
         $uraian = $u['uraian'];
         $satuanHasil = $u['satuan'];
         $abkId = Abk::create(array("uraian_tugas" => $uraian,
                                    "satuan_hasil" => $satuanHasil,
                                    "waktu_penyelesaian" => $u['wp']
                                    ,"waktu_pengerjaan" => $u['wke']
                                    ,"beban_kerja" => $u['beban_kerja']
                                    ,"jumlah" => $u['pyd']
                                    ,'user_id' => '12'
                                    ,'id_jabatan' => $jabatan))->id;
        if (($u['tahapan']) != null){ 
            $index = 0;   
        foreach($u['tahapan'] as $t){
            Abk::create(array(
            "uraian_tugas" => $t,
            "satuan_hasil" => $u['satuan_sub'][$index],
            "waktu_penyelesaian" => $u['wp_sub'][$index]
            ,"waktu_pengerjaan" => $u['wke_sub'][$index]
            ,"beban_kerja" => $u['beban_kerja_sub'][$index]
            ,"jumlah" => $u['pyd_sub'][$index],
            'user_id' => '12',
            'uraian_parent_id'=> $abkId,
            'id_jabatan' => $jabatan,
            ));
            $index++;
                }
            }
        }
        // echo json_encode($uraian);
        return redirect('abk');
        
    }
}
