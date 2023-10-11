<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    //
    //ログイン状態でなければログイン画面に戻す
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function reviewInsert(Request $request)
    {
        if($request->isMethod('get')){
            return view("profile");
        }

        $data = [
            'userInfo' => Auth::id(),
            'record' => book::find($request->id),
            
        ];
        return view('reviewInsert',$data);
    }

    //コメント登録メソッド
    public function reviewShow(Request $request)
    {
        if($request->isMethod('get')){
            return view("profile");
        }
        
        //バリデーション()
        $input = $request->validate([
            'recommend' => 'required',
            'comment' => 'required',
            'bookId' => 'unique:reviews,bookId,NULL,id,usersId,' . Auth::id()
        ]);

        //レビューを登録する
        $review = Review::query()->create([
            'bookId' => $request['bookId'],
            'usersId' => Auth::id(),
            'recommend' => $request['recommend'],
            'comment'=>$request['comment'],
        ]);
        //以下のレビューを登録しましたの画面へ遷移
        return view('reviewShow',$review);
        //return redirect()->route('');
    }

    //レビュー一覧を表示するメソッド
    public function reviewList(Request $request)
    {
        if(!isset($request->id)){
            return view("profile");
        }
        $data = [
            //ログインしているユーザーのid
            'userInfo' => Auth::id(),
            //リクエストされてきたidで本を特定
            'book' => book::find($request->id),
            //ユーザーテーブルからidと名前を特定
            'users' => user::select('id','name')->get(),
        ];
        // 全てのレビューを取得
        $data['reviews'] = review::where('bookId', $request->id)->get();
        //レビュー一覧へ
        return view('reviewListShow', $data);
    }


    
    public function reviewEdit(Request $request)
    {
        $data = [
            //ログインしているユーザーのid
            'userInfo' => Auth::id(),
            //リクエストされてきたidでレビューを特定
            'review' => review::find($request->id),
        ];

        //編集画面へ
        return view('reviewEdit',$data);
    }


    //レビューの編集メソッド
    public function reviewUpdate(Request $request)
    {
        if($request->isMethod('get')){
            return view("profile");
        }
        
        //更新対象のレコードをフォームからのid値をもとにモデルに取り出す
        $review = review::find($request->id);

        //フォームのデータをモデルに代入
        $review -> recommend = $request->recommend;
        $review -> comment = $request->comment;
        //モデルのデータをテーブルに保存
        $review -> save();
        $data = [
            'id' => $request->id,
            'bookId' => $request->bookId,
            'usersId' => $request->userId,
            'recommend' => $request->recommend,
            'comment' => $request->comment,
        ];
        //以下のレビューを更新しました画面へ
        return view('reviewUpdate',$data);
        

    }

    
    public function reviewErase(Request $request)
    {
        if($request->isMethod('get')){
            return view("profile");
        }
        
        $data = [
            //ログインしているユーザーのid
            'userInfo' => Auth::id(),
            //リクエストされてきたidでレビューを特定
            'reviewInfo' => review::find($request->id),
        ];

        $data['reviews'] = review::where('id', $request->id)->where('usersId', Auth::id())->get();
        return view('reviewErase',$data);
    }

    //レビューの削除メソッド
    public function reviewDelete(Request $request)
    {
        if($request->isMethod('get')){
            return view("profile");
        }
        
        //削除対象のレコードをフォームからのid値をもとに
        //モデルに取り出す
        $review = review::find($request->id);
        //データを削除するメソッドを実行
        $review->delete();
        $data = [
            'id' => $request->id,
            'bookId' => $request->bookId,
            'usersId' => $request->usersId,
            'recommend' => $request->recommend,
            'comment' => $request->comment,
        ];
        
        return view ('reviewDelete',$data);
    }
}
