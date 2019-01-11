<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\KetuaKoperasi;
use App\Admin;
use App\Transaksi;
use Illuminate\Http\Request;

class KetuaKoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $admin = Admin::pluck('username','level_user','id');
        $transaksi = Transaksi::pluck('jenis_pembayaran','jml_pembayaran_dan_bunga_pinjaman','id');

        if (!empty($keyword)) {
            $ketua_koperasis = KetuaKoperasi::paginate($perPage);
        } else {
            $ketua_koperasis = KetuaKoperasi::paginate($perPage);
        }

        return view('admin.ketua_koperasis.index', compact('ketua_koperasis','admin','transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $admin = Admin::pluck('username','level_user','id');
        $transaksi = Transaksi::pluck('jenis_pembayaran','jml_pembayaran_dan_bunga_pinjaman','id');
        return view('admin.ketua_koperasis.create', compact('ketua_koperasis','admin','transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        KetuaKoperasi::create($requestData);

        return redirect('admin/ketua_koperasis')->with('flash_message', 'KetuaKoperasi added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $ketua_koperasi = KetuaKoperasi::findOrFail($id);

        return view('admin.ketua_koperasis.show', compact('ketua_koperasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $admin = Admin::pluck('username','level_user','id');
        $transaksi = Transaksi::pluck('jenis_pembayaran','jml_pembayaran_dan_bunga_pinjaman','id');
        $ketua_koperasi = KetuaKoperasi::findOrFail($id);

        return view('admin.ketua_koperasis.edit', compact('ketua_koperasi','admin','transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $ketua_koperasi = KetuaKoperasi::findOrFail($id);
        $ketua_koperasi->update($requestData);

        return redirect('admin/ketua_koperasis')->with('flash_message', 'KetuaKoperasi updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        KetuaKoperasi::destroy($id);

        return redirect('admin/ketua_koperasis')->with('flash_message', 'KetuaKoperasi deleted!');
    }
}
