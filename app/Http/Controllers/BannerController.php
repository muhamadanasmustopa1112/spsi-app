<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use Illuminate\Support\Facades\Storage; // Import the Storage facade
use App\Models\BannerModel;


class BannerController extends Controller
{

    public function index()
    {
        // Fetch all images from the database
        $items = BannerModel::all(); 

        return view('admin.index')->with([
            'items' => $items
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = BannerModel::all(); 

        return view('admin.banner-store')->with([
            'item' => $items
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BannerRequest $request)
    {

        $data = $request->all();
        $data['images'] = $request->file('images')->store(
            'img', 'public'
        );

        BannerModel::create($data);

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
        $items = BannerModel::findOrFail($id); 

        return view('admin.editbanner')->with([
            'item' => $items
        ]);     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerRequest $request, $id)
    {
        $banner = BannerModel::findOrFail($id);

        $data = $request->all();

        // Check if a new image is uploaded
        if ($request->hasFile('images')) {
            // Delete the old image if it exists
            if ($banner->images && Storage::disk('public')->exists($banner->images)) {
                Storage::disk('public')->delete($banner->images);
            }

            // Store the new image in the 'img' directory within the 'public' disk
            $data['images'] = $request->file('images')->store('img', 'public');
        }

        // Update the banner with the new data
        $banner->update($data);

        return back()->with('success', 'Banner updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $item = BannerModel::findOrFail($id);
    
        $item->delete();

        return back()->with('success', 'Deleted successfully.');
    }
}
