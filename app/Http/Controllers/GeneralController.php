<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Datatoko;
use App\Models\Categories;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    // public function index(){
    //     return view('frontend.home');
    // }
    // public function homePage($logo){
    //     $datatoko = DB::table('datatoko')->where('logo',$logo)->first();
    //         return view('nonlogin.home')->with('datatoko', $datatoko);
    //         //  echo $logo;
    //     }
    public function create()
    {
    // Mengambil semua spesialisasi dari tabel datatoko
    $logo = Datatoko::select('logo')->distinct()->get();
    
    // Mengirim data logo ke view
    return view('nonlogin.home', compact('logo'));
    }

    public function kategoricreate()
    {
    // Mengambil semua spesialisasi dari tabel datatoko
    $categories = Categories::distinct()->get();
    
    // Mengirim data logo ke view
    return view('nonlogin.menu', compact('categories'));
    }

    public function sellercreate()
    {
    // Mengambil semua spesialisasi dari tabel datatoko
    $seller = Seller::distinct()->get();
    
    // Mengirim data logo ke view
    return view('profile', compact('seller'));
    }
}
