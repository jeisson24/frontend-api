<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function storeapi($type,$id){
       $document= new Document();
        $document->type=$type;
        $document->user_id=$id;
        $document->save();
       return 'saved';
       
    }

    public function listarapi($id){
        //$document= Document::find($id);
        $documents= Document::select('id','type','created_at')->where('user_id','=',$id)->get();
        return $documents;
     }

     public function destroyapi($id){
        //:: llamar metodo estatico de los modelos
        $document= Document::find($id);
        //-> llamar al metodo del ORM
        $document->delete();
        return 'borrado';
     }

     public function updateapi($type,$id){
        $user = User::find($id);
         $document->type=$type;
         $document->user_id=$id;
         $document->save();
        return 'saved';
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
