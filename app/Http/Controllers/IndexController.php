<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arr = [
            ['name'=>'zhangsan','age'=>18,'sex'=>'nan'],
            ['name'=>'zhangsan2','age'=>38,'sex'=>'nan'],
            ['name'=>'zhangsan3','age'=>48,'sex'=>'nan'],
        ];
        $data = '<i>断剑重铸之日<i>';
        $s = false;
        return view('admin/index',['title'=>'hello','str'=>'word','data'=>$data,'s'=>$s,'arr'=>$arr]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $data = DB::table('users')->get();
        // $data = DB::table('users')->where('id','=','13')->first();
        // $data = DB::table('users')->select('username','phone as p')->get();
        // $data = DB::table('user')->insert(['uname'=>'lisi','email'=>'123','phone'=>'123']);
        // $data = DB::table('user')->insert([
        //     ['uname'=>'aaa','phone'=>'456','email'=>'456'],
        //     ['uname' => 'bb', 'phone' => '456', 'email' => '456'],
        //     ['uname'=>'ccc','phone'=>'456','email'=>'456']
        // ]);
        // $data = DB::table('user')->insertGetId(['uname'=>'wangwu','email'=>'123','phone'=>'123']);
        // $data = DB::table('user')->where('id','=',14)->delete();
        // $data = DB::table('user')->where('id','=',13)->update(['uname'=>'wangaaaa']);
        // $data = DB::table('user')->where('uname','like','a%')->get();
        // $data = DB::table('user as u')
        //                 ->join('user-a as a','u.id','=','a.uid')
        //                 ->select('u.id','u.uname','u.phone','u.email','a.age','a.sex')
        //                 ->get();
        // dump($data);
        obj();
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
