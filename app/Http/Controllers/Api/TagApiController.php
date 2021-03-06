<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\TagsMasterController;
use App\Http\Requests\TagRequest;
use App\Modele\Tag;

class TagApiController extends Controller
{
    protected $masterController;

    public function __construct()
    {
        $this->masterController=new TagsMasterController();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return $this->masterController->index();
        return response()->json([
            'data'=> $this->masterController->index(),
        ]);
    }

    public function posts($tag)
    {
        return $this->masterController->posts($tag);
        return response()->json([
            'data'=> $this->masterController->posts($tag),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\TagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        return response()->json([
            'data'=> $this->masterController->store($request),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'data'=> $this->masterController->show($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\TagRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        return response()->json([
            'data'=> $this->masterController->update($request,$id),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json([
            'data'=> $this->masterController->destroy($id),
        ]);
    }
}
