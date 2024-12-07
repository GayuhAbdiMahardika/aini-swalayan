<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Supplier;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelians = Pembelian::all();
        return view('pembelian.index', compact('pembelians'));
    }

    public function create()
    {
        $suppliers = Supplier::all()->toArray();
        return view('pembelian.create', compact('suppliers'));
    }

    public function beli(Request $request)
    {
        $request->validate([
            'no_faktur' => 'required|string|max:255|distinct',
            'tanggal' => 'required|date',
            'supplier_id' => 'required',
        ], [
            'no_faktur.required' => 'Kolom No Faktur wajib diisi.',
            'no_faktur.string' => 'Kolom No Faktur harus berupa string.',
            'no_faktur.max' => 'Kolom No Faktur tidak boleh lebih dari 255 karakter.',
            'no_faktur.distinct' => 'Kolom No Faktur harus unik.',
            'tanggal.required' => 'Kolom Tanggal wajib diisi.',
            'tanggal.date' => 'Kolom Tanggal harus berupa tanggal yang valid.',
            'supplier_id.required' => 'Kolom Supplier wajib diisi.',
        ]);

        Pembelian::create($request->all());

        return redirect()->route('pembelian.index')->with('success', 'Pembelian created successfully.');
    }

    public function show(Pembelian $pembelian)
    {
        return view('pembelian.show', compact('pembelian'));
    }

    public function edit(Pembelian $pembelian)
    {
        return view('pembelian.edit', compact('pembelian'));
    }

    public function update(Request $request, Pembelian $pembelian)
    {
        $request->validate([
            'no_faktur' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'status' => 'nullable|string|max:255',
        ]);

        $pembelian->update($request->all());

        return redirect()->route('pembelian.index')->with('success', 'Pembelian updated successfully.');
    }

    public function destroy(Pembelian $pembelian)
    {
        $pembelian->delete();

        return redirect()->route('pembelian.index')->with('success', 'Pembelian deleted successfully.');
    }
}
