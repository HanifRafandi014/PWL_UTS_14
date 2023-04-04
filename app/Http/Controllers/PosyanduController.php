<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Collection\links;

class PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posyandu = Posyandu::where([
            ['Nama', '!=', Null],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('nama', 'LIKE', '%' . $search . '%')
                    ->get();
                    $query->orWhere('no_urut', 'LIKE', '%' . $search . '%')
                    ->get();
                    $query->orWhere('alamat', 'LIKE', '%' . $search . '%')
                    ->get();
                    $query->orWhere('tanggal_lahir', 'LIKE', '%' . $search . '%')
                    ->get();
                    $query->orWhere('bb_lahir', 'LIKE', '%' . $search . '%')
                    ->get();
                    $query->orWhere('tb_lahir', 'LIKE', '%' . $search . '%')
                    ->get();
                }
            }]
        ])->paginate(6);  // Mengambil semua isi tabel
        $posts = Posyandu::orderBy('No_urut', 'desc');
        return view('posyandu.index', compact('posyandu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(isset($_POST['tambah'])) {
            // code untuk menambahkan data
            // setelah berhasil menambahkan data
            echo "<script>alert('Data Bayi berhasil ditambahkan!');</script>";
        }
        return view('posyandu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_urut' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
        ]);

        Posyandu::create($request->all());
        return redirect()->route('posyandu.index')
        ->with('success', 'Data Bayi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_urut)
    {
        $Posyandu = Posyandu::find($no_urut);
        return view('posyandu.detail', compact('Posyandu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_urut)
    {
        $Posyandu = Posyandu::find($no_urut);
        return view('posyandu.edit', compact('Posyandu'));

        if(isset($_POST['edit'])) {
            // code untuk mengedit data
            // setelah berhasil mengedit data
            echo "<script>alert('Data Bayi berhasil diubah!');</script>";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_urut)
    {
        $request->validate([
            'no_urut' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Posyandu::find($no_urut)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('posyandu.index')
        ->with('success', 'Data Bayi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_urut)
    {
        Posyandu::find($no_urut)->delete();
        return redirect()->route('posyandu.index')-> with('success', 'Data Bayi Berhasil Dihapus');
    }
}
