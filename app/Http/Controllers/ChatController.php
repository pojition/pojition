<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TArticle;
use App\Models\TArticleTag;
use App\Models\TChat;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    //チャット画面に遷移
    public function chat(Request $request, String $chat = '')
    {


        // ログインしていない場合、ログイン画面へ遷移させる
        if (!Auth::check()) {
            return redirect('/login');
        }

        //全チャット取得処理
        $chats = TChat::join('users', 't_chats.chat_user_id', '=', 'users.id')
            ->orderBy('chat_id', 'asc')->get()->toArray();
        //取得したチャットを1件ずつループ
        for ($i = 0; $i < count($chats); $i++) {

            //日付のフォーマットを変更
            $dt = new Carbon($chats[$i]['created_at']);
            $chats[$i]['created_at'] = $dt->format('Y年m月d日');
            $dt = new Carbon($chats[$i]['updated_at']);
            $chats[$i]['updated_at'] = $dt->format('Y年m月d日');
        }

        return view('pages.chat', compact('chats'));
    }

    //チャット送信
    public function chatInsert(Request $request)
    {
        // チャット登録処理
        $content = $request->input('content');
        $chat_id = DB::table('t_chats')->insertGetId(
            [
                'content' => $content,
                'chat_user_id' => Auth::id(),
                'created_at' => Carbon::now()
            ]
        );

        // //登録チャット取得処理
        $chat = TChat::join('users', 't_chats.chat_user_id', '=', 'users.id')
            ->where('t_chats.chat_id', '=', $chat_id)->first()->toArray();

        return response()->json(['chat' => $chat]);
    }

    //隔秒チャットリロード
    public function chatReload(Request $request)
    {
        //現在時刻
        $dt = Carbon::now();
        $reload_sec = $dt->subSecond(0.5);

        // //登録チャット取得処理
        $chat = TChat::join('users', 't_chats.chat_user_id', '=', 'users.id')
            ->whereDate('t_chats.created_at', '=', $reload_sec->toDateString())
            ->whereTime('t_chats.created_at', '>=', $reload_sec->toTimeString())
            ->first()->toArray();

        if (Auth::id() == $chat['chat_user_id']) {
            $chat = null;
        }



        return response()->json(['chat' => $chat]);
    }
}
