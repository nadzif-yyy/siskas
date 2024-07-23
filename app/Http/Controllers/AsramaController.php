<?php

namespace App\Http\Controllers;

use App\Models\asrama;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AsramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = asrama::paginate(3);

        // drakify('success')->success('Welcome to Laravel Notify ⚡️', 'My custom title');
        // smilify('success', 'You are awesome, your data was successfully created');
        return view('admin.asrama.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin.asrama.create');

    }

    public function pdf()
    {

        $data = asrama::all();

        $datas = $data->map(function($data){
            return [
                'asrama' => $data->asrama,
                'nama' => $data->nama,
                'sekolah' => $data->sekolah,
                'gender' => $data->gender,
                'jenjang_sklh' => $data->jenjang_sklh,
                'kelas' => $data->kelas,
                'status' => $data->status,
                'kriteria' => $data->kriteria
            ];
        })->toArray();
    
        $pdf = Pdf::loadView('pdf/asrama', $datas);
        return $pdf->download('Data Asrama.pdf');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        

        $request->validate([
            'asrama' => 'required',
            'nama' => 'required',
            'sekolah' => 'required',
            'gender' => 'required',
            'jenjang_sklh' => 'required',
            'kelas' => 'required',
            'status' => 'required',
            'kriteria' => 'required',
        ]);

        asrama::create([
            'asrama.required' => 'asrama tidak boleh kosong',
            'nama.required' => 'nama tidak boleh kosong',
            'sekolah.required' => 'sekolah tidak boleh kosong',
            'gender.required' => 'jenis kelamin tidak boleh kosong',
            'jenjang_sklh.required' => 'jenjang sekolah tidak boleh kosong',
            'kelas.required' => 'kelas tidak boleh kosong',
            'status.required' => 'status tidak boleh kosong',
            'kriteria.required' => 'kriteria tidak boleh kosong',
        ]);
        // dd($validated);
        if ($request == true) {
            smilify('success', 'Success, Your data was successfully created');
        } elseif ($request == false) {
            smilify('error', 'Sorry, your data was not created');
        }
        
        return redirect('data-asrama');
    }

    /**
     * Display the specified resource.
     */
    public function show(asrama $asrama)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = asrama::find($id);
        return view('admin.asrama.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = asrama::find($id);

        $request->validate([
            'asrama' => 'required',
            'nama' => 'required',
            'sekolah' => 'required',
            'gender' => 'required',
            'jenjang_sklh' => 'required',
            'kelas' => 'required',
            'status' => 'required',
            'kriteria' => 'required',
        ],[
            'asrama.required' =>'asrama tidak boleh kosong' ,
            'nama.required' =>'nama tidak boleh kosong' ,
            'sekolah.required' =>'sekolah tidak boleh kosong' ,
            'gender.required' =>'gender tidak boleh kosong' ,
            'jenjang_sklh.required' =>'jenjang tidak boleh kosong' ,
            'kelas.required' =>'kelas tidak boleh kosong' ,
            'status.required' =>'status tidak boleh kosong' ,
            'kriteria.required' =>'kriteria tidak boleh kosong' ,
        ]);

        if ($request == true) {
            notify()->success('Data Berhasil Diupdate', 'Success');
        } elseif ($request == false) {
            notify()->error('Data Gagal Ditambahkan', 'Error');
        } 
    
        return redirect()->route('data-asrama.index', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = asrama::find($id);
        $data->delete();
        notify()->success('Data Berhasil Dihapus', 'Success');
        return redirect()->route('data-asrama.index');
    }

    
}
