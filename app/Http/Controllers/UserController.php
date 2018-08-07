<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        $data = DB::table('user1')->get();
        // dd($data);
        return view('home/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        return view('home/create');
    }

    public function postInsert(Request $req)
    {
        $data = $req->except('_token');
        // dump($data);
        $hui = DB::table('user1')->insert($data);
        // dump($hui);
        if($hui == true){
            return redirect('/home/index');
        }else{
            return back();
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        //
        // echo 'aaa';
        $data = DB::table('user1')->where('id','=',$id)->get();
        // dd($data);
        return view('home/edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $req, $id)
    {
        //
        // echo 'aaaa';
        $data = $req->except('_token');
        $gai = DB::table('user1')->where('id','=',$id)->update($data);
        if($gai >= 0){
            return redirect('/home/index');
        }else{
            return back();
        }
    }

    public function getDel(Request $req,$id)
    {
        // echo 'aaa';dd();
        // return $id;
        $data = DB::table('user1')->where('id','=',$id)->delete();
        // return $data;
        if($data > 0){
            return 'success';
        }else {
            return 'error';
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
