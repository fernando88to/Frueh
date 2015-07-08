<?php

namespace App\Http\Controllers;

use App\Banco;


use App\Http\Requests\BancoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class BancoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("banco.list");
    }

    public function  lista(){
        $bancosList = Banco::all();
        return  view("banco.list",["bancosList"=>$bancosList]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $banco = new Banco($request->all());


        

        return view("banco.create",["bancoInstance"=>$banco]);
    }

    /**
     * Store a newly created resource in storage.
     *-
     * @return Response
     */
    public function store(BancoRequest $request)
    {

        $params = $request->all();
        $banco = new Banco($params);
        //$request->validate()-
        //Banco::create($request->all());

        return redirect("/banco/list");

    }
    /*public function store(Request $request)
    {
        $nome = $request->input("ativo");
        $params = $request->all();


        $validator = Validator::make(
            ["nome"=>$request->input("nome")],
            ["nome"=> 'required|min:5']
        );
        if($validator->fails()){
            return redirect()->action("BancoController@create",$params);
        }

        $banco = new Banco($params);
        $banco->save();


        return redirect("/banco/list");

    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
