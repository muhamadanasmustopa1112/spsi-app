<?php

namespace App\Http\Controllers;

use App\Models\FieldEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class FieldEmployeeController extends Controller
{
    public function index()
    {
        $items = FieldEmployee::all();
        return view('admin.field-employee', compact('items'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name) . '-' . time();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('employee', 'public');
        }

        FieldEmployee::create($data);

        return back()->with('success', 'Karyawan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = FieldEmployee::findOrFail($id);
        return view('admin.edit-field-employee', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = FieldEmployee::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('photo')) {
            if ($item->photo) {
                Storage::disk('public')->delete($item->photo);
            }
            $data['photo'] = $request->file('photo')->store('employee', 'public');
        } else {
            unset($data['photo']);
        }

        $item->update($data);

        return redirect()->route('field-employee')->with('success', 'Data karyawan berhasil diupdate');
    }

    public function destroy($id)
    {
        $item = FieldEmployee::findOrFail($id);

        if ($item->photo) {
            Storage::disk('public')->delete($item->photo);
        }

        $item->delete();
        return back()->with('success', 'Karyawan dihapus');
    }
}
