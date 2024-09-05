<?php

namespace App\Http\Controllers;
use App\Models\PartnerModel;
use App\Http\Requests\PartnerRequest;
use Illuminate\Support\Facades\Storage; 

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = PartnerModel::all(); 

        return view('admin.partner')->with([
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
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $data['images'] = $request->file('images')->store(
            'img', 'public'
        );

        PartnerModel::create($data);

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
        $items = PartnerModel::findOrFail($id); 

        return view('admin.editpartner')->with([
            'item' => $items
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerRequest $request, string $id)
    {
        //
        $service = PartnerModel::findOrFail($id);

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

        return back()->with('success', 'Partner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $item = PartnerModel::findOrFail($id);
    
        $item->delete();

        return back()->with('success', 'Deleted successfully.');
    }
}
