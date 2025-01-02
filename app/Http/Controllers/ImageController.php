<?php

namespace App\Http\Controllers;

use App\Models\Photos;
use Illuminate\Http\Request;
use League\Glide\ServerFactory;
use Illuminate\Support\Facades\Storage;
use League\Glide\Signatures\SignatureFactory;
use League\Glide\Responses\SymfonyResponseFactory;

class ImageController extends Controller
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
    public function show(Request $request, string $path)
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photos $photos)
    {
        $photos->delete();
        return '';
    }
}
