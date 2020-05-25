<?php

namespace App\Http\Controllers\API;

use App\artikel;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Http\Resources\Artikel as ArtikelResource;

class ArtikelController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $artikel = artikel::all();
        $artikel = artikel::where('publish', 1)->limit(6)->orderByDesc('id')->get();
        $artikel=collect($artikel);
        $artikel=$artikel->map(function($data){
            $data['konten']=strip_tags($data['konten']);
            return $data;

        });
        // $artikel['konten'] = strip_tags($artikel->konten);
        return $this->sendResponse(ArtikelResource::collection($artikel),'Artikel complete Load');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
