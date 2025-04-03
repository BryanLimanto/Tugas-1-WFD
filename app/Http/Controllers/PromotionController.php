<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $promotions = Promotion::when($search, function($query, $search) {
                return $query->where('title', 'like', '%'.$search.'%');
            })
            ->latest()
            ->get();
            
        return view('promotions.index', compact('promotions', 'search'));
    }

    public function create()
    {
        return view('promotions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('promotions', 'public');
            $validated['image'] = $imagePath;
        }

        // Create the promotion
        Promotion::create($validated);

        return redirect()->route('promotions.index')
                         ->with('success', 'Promotion created successfully!');
    }

    public function show(Promotion $promotion)
    {
        return view('promotions.show', compact('promotion'));
    }

    public function edit(Promotion $promotion)
    {
        return view('promotions.edit', compact('promotion'));
    }

    public function update(Request $request, Promotion $promotion)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($promotion->image) {
                Storage::disk('public')->delete($promotion->image);
            }
            
            $imagePath = $request->file('image')->store('promotions', 'public');
            $validated['image'] = $imagePath;
        }

        $promotion->update($validated);

        return redirect()->route('promotions.index')->with('success', 'Promotion updated successfully!');
    }

    public function destroy(Promotion $promotion)
    {
        if ($promotion->image) {
            Storage::disk('public')->delete($promotion->image);
        }
        
        $promotion->delete();
        
        return redirect()->route('promotions.index')->with('success', 'Promotion deleted successfully!');
    }
}