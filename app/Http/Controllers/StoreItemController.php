<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoreItem;
use Illuminate\Support\Facades\DB;

class StoreItemController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('storeitem.create');

    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        // $rule = [
        //     'barrelno[]' => 'required',
        //     'A70[]' => 'required',
        //     'A98[]'=> 'required',
        //     'E[]' => 'required',
        //     '1st[]' => 'required',
        //     '2nd[]' => 'required',
        //     '3rd[]' => 'required',
        //     'E2[]' => 'required',
        //     'payin[]' => 'required',
        // ];
        
        // $this->validate($request, $rule);
        //  dd($request);
        // $data = $request->all();
         //dd($request->barrelNo);
         foreach ($request->barrelNo as $barrelNos) {
            $barrelNos['A70'];
            $barrelNos['A98'];
            $barrelNos['E'];
            $barrelNos['1st'];
            $barrelNos['2nd'];
            $barrelNos['3rd'];
            $barrelNos['E2'];
            $barrelNos['payin'];
         }

       $storeItem = StoreItem::create($barrelNos);
       //dd($storeItem);
       return redirect()->route('storeitem.show',['id'=> $storeItem]);
       
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $storeItem = StoreItem::findOrfail($id)->get();
        //dd($storeItem);
       // return response()->json(['data' => $storeItem]);
        return view('storeitem.show')->with('storeItem', $storeItem);
        

    }


}
