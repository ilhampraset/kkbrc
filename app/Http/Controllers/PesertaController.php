<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PesertaController extends Controller
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
        if($request->file('image'))
        {
          $image = $request->file('image');
          $name = time().$image->getClientOriginalName();
          $image->move(public_path().'/img/peserta/', $name);
            if($request->coffeeshopName)
            {
                DB::table('peserta')->insert([
                    ['nama'=>$request->name,
                    'email'=>$request->email,
                    'represent'=>$request->represent,
                    'coffeeshop'=>$request->coffeeshopName,
                    'phoneNumber'=> $request->phoneNumber,
                    'picture' => $name,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => 0
                    ]
                ]);  

                return response()->json(['message' => 'success']);
            }
            else {
                
                DB::table('peserta')->insert([
                    ['nama'=>$request->name,
                    'email'=>$request->email,
                    'represent'=>$request->represent,
                    'phoneNumber'=> $request->phoneNumber,
                    'picture' => $name,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => 0
                    ]
                ]);    
                
                return response()->json(['message' => 'success']);
            }
        }
        
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
