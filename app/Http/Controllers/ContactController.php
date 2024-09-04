<?php

namespace App\Http\Controllers;
use App\Models\ContactModel;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $items = ContactModel::all(); 
        $firstContact = $items->first(); 

        return view('admin.contact')->with([
            'items' => $items,
            'item_id' => $firstContact->id,
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, $id)
    {
        //
        $contact = ContactModel::findOrFail($id);

        $data = $request->all();

        $contact->update($data);

        return back()->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
