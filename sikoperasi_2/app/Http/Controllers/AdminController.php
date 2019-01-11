<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Admin;
use App\Anggota;
use App\Simpanan;
use App\Pinjaman;
use App\Transaksi;
use Illuminate\Http\Request;

class AdminController extends Controller
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

        $anggota = Anggota::pluck('nama_anggota','id');
        $simpanan = Simpanan::pluck('jenis_simpanan','jml_simpanan','id');
        $pinjaman = Pinjaman::pluck('jangka_waktu_pinjaman','jml_pinjaman_dan_bunga_pinjaman','id');
        $transaksi = Transaksi::pluck('jenis_pembayaran','jml_pembayaran_dan_bunga_pinjaman','id');
        
        if (!empty($keyword)) {
            $admins = Admin::paginate($perPage);
        } else {
            $admins = Admin::paginate($perPage);
        }

        return view('admin.admins.index', compact('admins','anggota','simpanan','pinjaman','transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $anggota = Anggota::pluck('nama_anggota','id');
        $simpanan = Simpanan::pluck('jenis_simpanan','jml_simpanan','id');
        $pinjaman = Pinjaman::pluck('jangka_waktu_pinjaman','jml_pinjaman_dan_bunga_pinjaman','id');
        $transaksi = Transaksi::pluck('jenis_pembayaran','jml_pembayaran_dan_bunga_pinjaman','id');
        
        return view('admin.admins.create', compact('admins','anggota','simpanan','pinjaman','transaksi'));
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
        
        Admin::create($requestData);

        return redirect('admin/admins')->with('flash_message', 'Admin added!');
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
        $admin = Admin::findOrFail($id);

        return view('admin.admins.show', compact('admin'));
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
        $anggota = Anggota::pluck('nama_anggota','id');
        $simpanan = Simpanan::pluck('jenis_simpanan','jml_simpanan','id');
        $pinjaman = Pinjaman::pluck('jangka_waktu_pinjaman','jml_pinjaman_dan_bunga_pinjaman','id');
        $transaksi = Transaksi::pluck('jenis_pembayaran','jml_pembayaran_dan_bunga_pinjaman','id');

        $admin = Admin::findOrFail($id);

        return view('admin.admins.edit', compact('admins','anggota','simpanan','pinjaman','transaksi'));
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
        
        $admin = Admin::findOrFail($id);
        $admin->update($requestData);

        return redirect('admin/admins')->with('flash_message', 'Admin updated!');
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
        Admin::destroy($id);

        return redirect('admin/admins')->with('flash_message', 'Admin deleted!');
    }
}
