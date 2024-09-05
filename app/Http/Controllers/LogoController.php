<?php

namespace App\Http\Controllers;
use App\Models\LogoModel;
use App\Http\Requests\LogoRequest;
use App\Http\Requests\DetailLogoRequest;
use Illuminate\Support\Facades\Storage; 

use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $items = LogoModel::all(); 

        return view('admin.logo')->with([
            'items' => $items
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LogoRequest $request)
    {
        //
        $data = $request->all();
        $data['images'] = $request->file('images')->store(
            'img', 'public'
        );

        LogoModel::create($data);

        return back()->with('success', 'Image uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $items = LogoModel::findOrFail($id); 

        return view('admin.editlogo')->with([
            'item' => $items
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $item = LogoModel::findOrFail($id);

        $validatedData = $request->validate([
            'active' => 'required|in:Y,N',
        ]);
    

        $countActiveItems = LogoModel::where('active', 'Y')->count();

        if ($countActiveItems <= 2) {
 
            if ($countActiveItems < 2 || $request->input('active') !== 'Y') {
                $item->active = $request->input('active');
                $item->save();
                return response()->json(['success' => true, 'message' => 'Status updated successfully.']);
            }

            return response()->json(['success' => false, 'message' => 'Cannot update status. More than one item is already active.']);
        }

        return response()->json(['success' => false, 'message' => 'Item status cannot be updated because it is already "N".']);
        
    }

    public function updateLogo(DetailLogoRequest $request, $id)
    {
        $service = LogoModel::findOrFail($id);

        $data = $request->all();

        // Check if a new image is uploaded
        if ($request->hasFile('images')) {
            // Delete the old image if it exists
            if ($service->images && Storage::disk('public')->exists($service->images)) {
                Storage::disk('public')->delete($service->images);
            }

            // Store the new image in the 'img' directory within the 'public' disk
            $data['images'] = $request->file('images')->store('img', 'public');
        }

        // Update the banner with the new data
        $service->update($data);

        return back()->with('success', 'Logo updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $item = LogoModel::findOrFail($id);
    
        $item->delete();

        return back()->with('success', 'Deleted successfully.');

    }
}
