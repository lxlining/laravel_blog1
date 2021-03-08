<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    //

    public function index(){
        $sort=DB::table('sort')->orderBy('id','asc')->get();
        return view('home.article',compact('sort'));
    }
    public function index1(Request $request){
        $article = DB::table('article')
            ->join('user', 'article.user_id', '=', 'user.id')
            ->join('sort', 'article.sort_id', 'sort.id')
            ->select('user.username','article.title','article.content','article.created_at','sort.sname')
            ->get();
        $sort=DB::table('sort')->orderBy('id','asc')->get();

        $data=$request->all();
        $data1=$request->get('sort');

        foreach ($data1 as $item) {

            $res=DB::table('sort')->where('sname','=',$item)->get('id');
            $res1=DB::table('user')->where('username','=',session()->get('username'))->get('id');

            $result=DB::table('article')->insert([
                'title'=>$data['title'],
                'content'=>$data['content'],
                'sort_id'=>$res[0]->id,
                'user_id'=>$res1[0]->id,
                'created_at'=>date('Y-m-d H:i:s')
            ]);
            if(!$request){
                echo '<script>alert("发表失败！")</script>';
                return view('home.article',compact('sort'));
            }
            return view('home.index',compact('sort','article'));
        }

    }

    public function page(){
        $article = DB::table('article')->Paginate(5);

        $aa=json_decode(json_encode($article,true),true);
        //$article=$article['data'];
        return view('home.paginate',compact('article','aa'));
    }

    public function serch(){
        $user=session()->get('username');

        $data=DB::table('article')
            ->join('user', 'article.user_id', '=', 'user.id')
            ->where('user.username','=',$user[0])->get(['article.id','article.title','article.content','article.created_at','user.username']);
        //dd($data);
        if($data){
            return view('home/self_article',compact('data'));
        }else{
            return view('home.self');
        }
    }
    public function del($id){
        $res=DB::table('article')->where('id','=',$id)->delete();
        if($res){
            echo '<script>alert("success")</script>';
            return view('home.self');
        }else{
            return 'error';
        }
    }
    public function find(Request $request){
        $keyword=$request->all();
        //dd($keyword['key']);
        $data=DB::table('article')->where('title','like','%'.$keyword['key'].'%')->orWhere('content','like','%'.$keyword['key'].'%')->get();
        //$arr = get_object_vars($data);


        $data=json_decode(json_encode($data,true),true);
        if($data){

            return view('home.self_article1',compact('data'));
        }
    }
}
