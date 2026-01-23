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
