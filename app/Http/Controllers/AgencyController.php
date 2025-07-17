<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agency;

class AgencyController extends Controller
{

    public function index()
    {

        $data = Agency::latest()->get();
        return view('agency.index', [
            'data' => $data,
        ]);
    }

    public function create()
    {
        return view('agency.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'CEO' => 'nullable|string',
            'logo' => 'required|image',
            'website' => 'nullable',
        ]);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        } else {
            $logoPath = null;
        }

        $agency = new Agency();
        $agency->name = $validated['name'];
        $agency->CEO = $validated['CEO'] ?? null;
        $agency->logo = $logoPath;
        $agency->website = $validated['website'] ?? null;
        $agency->save();

        return redirect('/agency')->with('success', 'Data agency berhasil disimpan.');
    }


    public function edit(string $id)
    {
        $agency = Agency::findOrFail($id);
        return view('agency.edit', compact('agency'));
    }

    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'CEO' => 'nullable|string',
            'logo' => 'nullable|image',
            'website' => 'nullable',
        ]);


        $agency = Agency::findOrFail($id);


        $agency->name = $validated['name'];
        $agency->CEO = $validated['CEO'] ?? null;


        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $agency->logo = $logoPath;
        }

        $agency->website = $validated['website'] ?? null;
        $agency->save();


        return redirect('/agency')->with('success', 'Data agency berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $agency = Agency::findOrFail($id);
        $agency->delete();

        return redirect('/agency')->with('success', 'Data agency berhasil dihapus.');
    }
}
