<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PelamarController extends Controller
{
    public function index(): View
    {
        $pelamars = Pelamar::latest()->paginate(5);

        return view('pelamars.index', compact('pelamars'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('pelamars.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'posisi'=>'required',
            'nama_lengkap'=>'required',
            'nama_panggilan'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'jk'=>'required',
            'kebangsaan'=>'required',
            'suku'=>'required',
            'agama'=>'required',
            'sekolah'=>'required',
            'jurusan'=>'required',
            'ipk'=>'required',
            'alamat'=>'required',
        ]);

        
        Pelamar::create([
            'posisi' => $request->posisi,
            'nama_lengkap' => $request->nama_lengkap,
            'nama_panggilan' => $request->nama_panggilan,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'kebangsaan' => $request->kebangsaan,
            'suku' => $request->suku,
            'agama' => $request->agama,
            'sekolah' => $request->sekolah,
            'jurusan' => $request->jurusan,
            'ipk' => $request->ipk,
            'alamat' => $request->alamat,
        ]);

        //redirect to index
        return redirect()->route('pelamars.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get pelamar by ID
        $pelamar = Pelamar::findOrFail($id);

        //render view with pelamar
        return view('pelamars.show', compact('pelamar'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get pelamar by ID
        $pelamar = Pelamar::findOrFail($id);

        //render view with pelamar
        return view('pelamars.edit', compact('pelamar'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'posisi'=>'required',
            'nama_lengkap'=>'required',
            'nama_panggilan'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'jk'=>'required',
            'kebangsaan'=>'required',
            'suku'=>'required',
            'agama'=>'required',
            'sekolah'=>'required',
            'jurusan'=>'required',
            'ipk'=>'required',
            'alamat'=>'required',
        ]);

        //get pelamar by ID
        $pelamar = Pelamar::findOrFail($id);
        $pelamar->update([
            'posisi' => $request->posisi,
            'nama_lengkap' => $request->nama_lengkap,
            'nama_panggilan' => $request->nama_panggilan,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'kebangsaan' => $request->kebangsaan,
            'suku' => $request->suku,
            'agama' => $request->agama,
            'sekolah' => $request->sekolah,
            'jurusan' => $request->jurusan,
            'ipk' => $request->ipk,
            'alamat' => $request->alamat,
        ]);
        
        //redirect to index
        return redirect()->route('pelamars.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $pelamar
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get pelamar by ID
        $pelamar = Pelamar::findOrFail($id);

        //delete pelamar
        $pelamar->delete();

        //redirect to index
        return redirect()->route('pelamars.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
