<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index() {
        $data = [ 
            'page' => 'Daftar Murid',
            'title' => 'Daftar Murid',
            'murid' =>  Murid::latest()->get()
        ];
        return view('main.home', $data);
    }
    public function detail($id)
    {
        $data = [
            'page' => 'Profil Murid',
            'title' => 'Detail Murid',
            'murid' => Murid::find($id)
        ];
        return view('main.dtl_murid', $data);
    }
    public function create()
    {
        $murid = Murid::all();
        $data = [
            'page' => 'Tambah Murid',
            'title' => 'Tambah Murid',
        ];
        return view('main.add_murid', $data);
    }
    public function store(Request $request)
    { 
        $rules = [
        'nama' => 'required|unique:murids,id',
        'nim' => 'required',
        'jurusan' => 'required',
        'tugas' => 'required',
        'dokumen' => 'required|mimes:doc,docx,pdf|max:1000'
    ];
    $this->validate($request, $rules);

    // $murid = Murid::get()->last();

    $dokumen = $request->file('dokumen');
    $nama_dokumen= 'FT'.date('YMdhis').'.'.$request->file('dokumen')->getClientOriginalName();
    $dokumen->move('dokumen/',$nama_dokumen);

    Murid::create(
        [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
            'tugas' => $request->tugas,
            'dokumen' => $request->dokumen,
        ]
        );
        return redirect('/home');
        // dd($request);
   }
   public function edit($id)
   {
    $data = [
        'page' => 'Update Murid',
        'title' => 'Update Murid',
        'murid' => Murid::find($id),
    ];
    return view('main.edit_murid', $data);
   }    
   public function update(Request $request, $id)
   {
    // $rules = [
    //     'nama' => 'required|unique:murids,id',
    //     'nim' => 'required',
    //     'jurusan' => 'required',
    //     'tugas' => 'required',
    //     'dokumen' => 'required|mimes:doc,docx,pdf|max:1000'
    // ];
    // $this->validate($request, $rules);

    $murid = Murid::find($id);

    $murid->nama = $request->input('nama');
    $murid->nim = $request->input('nim');
    $murid->jurusan = $request->input('jurusan');
    $murid->tugas = $request->input('tugas');
    // $murid->dokumen = $request->input('dokumen');

    if ($request->hasFile('dokumen')) {
        $destination = 'dokumen/' . $murid->dokumen;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('dokumen');
        $extention = $file->getClientOriginalName();
        $filename = $request->foto->getClientOriginalName();
        $file->move('dokumen', $filename);
        $murid->dokumen = $filename;
    }
    $murid->update();

    return redirect('/home');
   }
   public function hapus($id)
   {
    $murid = Murid::find($id);

    $destination = 'dokumen/' . $murid->dokumen;
    if (File::exists($destination)) {
        File::delete($destination);
    }

    $murid->delete();

    return redirect('/home');
   }
}

