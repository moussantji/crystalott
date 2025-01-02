<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Photo $photo)
    {
        SignatureFactory::create(config('glide.key'))->validateRequest($request->path(),$request->all());
        $server = ServerFactory::create([
        'response' => new SymfonyResponseFactory($request),
        'source' => Storage::disk('public')->getDriver(),
        'cache' => Storage::disk('local')->getDriver(),
        'cache_path_prefix' => '.cache',
        'base_url' => 'images'
       ]);
       return $server->getImageResponse($path,$request->all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return '';
    }
}
