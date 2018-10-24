<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Peserta;
use DataTables;
use Validator;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function listData()
    {
        $peserta = Peserta::orderBy('created_at', 'desc')->get();

        $no = 1;
        $data = array();
        foreach($peserta as $list){
            $row = array();

            $row[] = $no++;
            $row[] = $list->nama;
            $row[] = $list->email;
            $row[] = $list->represent;
            $row[] = $list->coffeeshop;
            $row[] = $list->phoneNumber;
            $row[] = file_exists(public_path('img/peserta/'.$list->picture)) ? '<img src="'.url('img/peserta/'.$list->picture).'" width="200px" height="200px"/>' : '<img src="#" />';
            // $row[] = url('img/peserta/'.$list->picture);
            $row[] = is_null($list->status) ? '' : '<strong class="'.@config('flag_peserta.color-'.$list->status).'">'.@config('flag_peserta.'.$list->status).'</strong>';
            $row[] = empty($list->created_at) ? '' : date_format(date_create($list->created_at), 'd F Y, H:i:s');

            $row[] = "<div align='center'>
                <button id='btn-ubah' type='button' onclick='edit(" .$list->id. ")' class='btn btn-warning btn-xs'><i class='fa fa-edit'></i></button>
                </div>";
            $data[] = $row;
        }

        return DataTables::of($data)->escapeColumns([])->make(true);
    }


    public function index()
    {
        return view('peserta.index');
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
        if($request->coffeeshopName)
        {
            DB::table('peserta')->insert([
                ['nama'=>$request->name,
                  'email'=>$request->email,
                  'represent'=>$request->represent,
                  'coffeeshop'=>$request->coffeeshopName,
                ]
             ]);

            response()->json(['message' => 'success']);
        }
        else {

              DB::table('peserta')->insert([
                ['nama'=>$request->name,
                  'email'=>$request->email,
                  'represent'=>$request->represent,
                ]
            ]);

              return response()->json(['message' => 'success']);
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
        $peserta = Peserta::find($id);

        return response()->json($peserta);
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
        $peserta = Peserta::find($id);

        $validator = Validator::make($request->all(), [
            'status'=> 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }
        else{
            $peserta->status = $request->status;
            $peserta->update();
            return response()->json(['message'=>'success']);
        }
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
