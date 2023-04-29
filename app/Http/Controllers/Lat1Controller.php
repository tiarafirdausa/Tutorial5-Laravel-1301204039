<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    //index
    public function index(){
        $data["nama"]="Tiara Firdausa Abdillah";
        $data["asal"]="Tasikmalaya";
        return view('v_latihan1', $data);
    }

    // public function method2(){
	// 	$data['title'] = "Daftar Mahasiswa";
	// 	$data['daf_mhs'] = array(
	// 		array("nama" => "Tiara", "asal" => "Tasikmalaya"),
    //         array("nama" => "Rahma", "asal" => "Blitar"),
	// 		array("nama" => "Wina", "asal" => "Purwakarta")
	// 	);
	// 	return view('v_latihan2', $data);
	// }

}
