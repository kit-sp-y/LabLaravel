<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::query()->get();
        return view('artists.index', [
            'artists' => $artists,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Artist::class);
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('create', Artist::class);
        $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
        ]);
        $name = $request->input('name');
        if (empty($name)){
            abort(400);
        }
        $artist = new Artist();
        $artist->name = $name;
        $artist->save();
        return redirect()->route('artists.show', [
            'artist' => $artist,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return view('artists.show', [
            'artist' => $artist,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        Gate::authorize('update', $artist);
        return view('artists.edit', [
            'artist' => $artist,
            'route->name' => 'artists.edit',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        Gate::authorize('update', $artist);
        $request->validate([
            'name' => ['required', 'min:5', 'max:20', Rule::unique('artists', 'name')->ignore($artist)],
            'name.required' => 'Artist name is required.',
            'name.min' => 'Artist name must be at least :min characters.',
            //'min' => 'Artist name must be at least :min characters.',
            'name.max' => 'Artist name must be less than :max characters.',
            //'max' => 'Artist name must be less than :max characters.',
            'name.unique' => 'Artist name is already taken.',
        ]);
        $name = $request->input('name');
        $artist->name = $name;
        $artist->save();
        return redirect()->route('artists.show', ['artist' => $artist]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        Gate::authorize('delete', $artist);
        $artist->delete();
        return redirect()->route('artists.index');
    }
}
