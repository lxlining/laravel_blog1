<?php

namespace App\Http\Controllers\Home;

use App\Home\article;
use App\Home\message;
use App\Home\sort;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    //
    public function index(){
        return view('home.login');
    }
    public function index1(){
        $sort=sort::get();
        $article = DB::table('article')
            ->join('user', 'article.user_id', '=', 'user.id')
            ->join('sort', 'article.sort_id', 'sort.id')
            ->select('user.username','article.title','article.content','article.created_at','sort.sname')
            ->get();

        return view('home.index',compact('sort','article'));
    }
    public function login(Request $request){
        $sort=DB::table('sort')->get();
        $article = DB::table('article')
            ->join('user', 'article.user_id', '=', 'user.id')
            ->join('sort', 'article.sort_id', 'sort.id')
            ->select('user.username','article.title','article.content','article.created_at','sort.sname')
            ->get();
        //dd($article);


        $data=DB::table('user')->where('username','=',$request->get('username'))->where('password','=',$request->get('pass'));
        session()->flush();
        session_start();




        $user=$request['username'];
        if($data){

                $request->session()->push('username',$user);


            return view('home.index',compact('sort','article'));
        }else{
            return 'error';
        }
    }

    public function register(){
        return view('home.register');
    }
    public function register1(Request $request){
        $data=$request->all();
        $file=$request->file('photo');
        $fileextension=$file->getClientOriginalExtension();//后缀
        $filename=uniqid().rand(10000,9999999).'.'.$fileextension;
        //dd($data['photo']->getClientOriginalName());//文件名
        $file->move('./uploads/',$filename);

        $data['photo']='./uploads/'.$filename;
        $data['created_at']=date('Y-m-d');
        //dd($data);
        $res=DB::table('user')->insert($data);
        if($res){
            return 'success';
        }
    }

    public function logout(){
        session()->flush();
        return view('home.login');
    }

    public  function load_sort(){
        $data=DB::table('sort')->get();
        //dd($data);
        return json_encode($data);


    }

    public function self(){
        return view('home.self');
    }
    public  function user(){
        $user=session()->get('username')[0];
        $data=DB::table('userinfo')->join('user','userinfo.u_id1','user.id')->where('user.username',$user)
            ->get();
        //$a=article::all();
        //dd($a[0]->title);
        //dd(compact('data'));
        $data1=[];
        $data2=[];
        foreach ($data as $key=> $val)
            $data1[$key]=DB::table('user')->where('id',$val->u_id2)->get();

        foreach ($data1 as $key1=> $val1)
            $data2[$key1]=$val1[0]->username;

        return view('home.selfuser',compact('data2'));
    }

    public function update(){

        $user=session()->get("username");
        //dd($user[0]);
        $data=DB::table('user')->where('username','=',$user[0])->get();

        return view('home.updat_user',compact('data'));
    }
    public function update1(Request $request){
        $data=$request->all();

        $file=$request->file('photo');
        $fileextension=$file->getClientOriginalExtension();//后缀
        $filename=uniqid().rand(10000,9999999).'.'.$fileextension;
        //dd($data['photo']->getClientOriginalName());//文件名
        $file->move('./uploads/',$filename);

        $data['photo']='./uploads/'.$filename;
        $data['updated_at']=date('Y-m-d');


        //dd($data);
        $request=DB::table('user')->where('id',$data['id'])->update(['username'=>$data['username'],'email'=>$data['email'],'password'=>$data["pwd"],'photo'=>$data['photo'],'updated_at'=>$data['updated_at']]);
        if($request){
            return view('home/self');
        }
        else{
            return 'error';
        }

    }
}
