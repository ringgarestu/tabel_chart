<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class chart_controller extends Controller
{
    public function index()
    {
        $tanki = DB::select('select * from tanki_air');
        // var_dump($tanki);
        return view('chart', ['tanki' => $tanki]);
    }

    // public function delete($id)
    // {
    //     DB::delete('delete from tanki_air where ID_TANKI= ?', [$id]);
    //     return redirect('home');
    // }
}
