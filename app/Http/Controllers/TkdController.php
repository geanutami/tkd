<?php

namespace App\Http\Controllers;

use App\Tkd;
use Illuminate\Http\Request;

class TkdController extends Controller
{
    public function index()
    {
        return 'sukses';
    }


    public function data(Request $request)
    {
        if ($request->has('search')) {
            $soal = Tkd::where('jenis_soal', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $soal = Tkd::Paginate(10);
        }
        return view('data', compact('soal'));
    }

    public function input()
    {
        return view('data');
    }

    public function simpan(Request $request)
    {

        $this->validate($request, [
            'jenis_soal' => 'required|min:2|max:3',
            'kunci' => 'required|min:1|max:1',
        ]);


        $tkd = new Tkd();
        $tkd->jenis_soal = $request['jenis_soal'];
        $tkd->soal = $request['soal'];
        $tkd->a = $request['a'];
        $tkd->b = $request['b'];
        $tkd->c = $request['c'];
        $tkd->d = $request['d'];
        $tkd->e = $request['e'];
        $tkd->kunci = $request['kunci'];
        $tkd->save();
        $tkd = Tkd::all();
        //return view('data', compact('soal'));
        return redirect()->route('data')->with('success' . 'Data Berhasil Ditambahkan');
    }

    public function tampil($id)
    {
        $tkd = Tkd::where('id', $id)->first();
        return view('edit', compact('tkd'));
    }

    public function update(Request $request)
    {
        $tkd = Tkd::where('id', $request['id'])->first();

        $tkd->jenis_soal = $request['jenis_soal'];
        $tkd->soal = $request['soal'];
        $tkd->a = $request['a'];
        $tkd->b = $request['b'];
        $tkd->c = $request['c'];
        $tkd->d = $request['d'];
        $tkd->e = $request['e'];
        $tkd->kunci = $request['kunci'];
        $tkd->update();
        $tkd = Tkd::all();
        //return view('data', compact('tkd'));
        return redirect()->route('data');
    }

    public function delete($id)
    {
        $tkd = Tkd::where('id', $id)->first();
        $tkd->delete();

        $tkd = Tkd::all();
        return redirect()->route('data');
    }
}
