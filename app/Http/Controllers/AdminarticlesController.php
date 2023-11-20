<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AdminarticlesController extends Controller
{
    public function show()
    {
        if(Auth::check()){
            $artikel = Article::all();
            return view('adminarticles',[
               "articles" => $artikel
            ]);
        }else{
            redirect('/login');
        }
    }

  public function add(Request $request)
    {
        $judul = $request->input('judul');
        $gambar = $request->input('gambar');
        $tanggal = $request->input('tanggal');
        $isi = $request->input('isi');
        $penulis = 'Admin';

        $response = Http::post(
            'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-oiyyq/endpoint/createArticles',
            [
                'judul' => $judul,
                'gambar' => $gambar,
                'tanggal' => $tanggal,
                'isi' => $isi,
                'penulis' => $penulis
            ]
        );

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/adminarticles');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    }
}