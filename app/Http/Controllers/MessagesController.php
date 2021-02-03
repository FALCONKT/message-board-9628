<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;    // 追加


class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    // getでmessages/にAccessされた場合の「一覧表示処理」
    public function index()
    {
        // Messageを全部取得
        $messages = Message::all();

        return view('messages.index', [
            'messages' => $messages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // getでmessages/createにAccessされた場合の「新規登録画面表示処理」
    public function create()
    {
        // Messageを作成
        $message = new Message;
        
        return view('messages.create', [
            'message' => $message,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // postでmessages/にAccessされた場合の「新規登録処理」
    public function store(Request $request)
    {
        
        // requestのcontentに対して　validation
        // 必須　且つ　191文字　と指定している
        $this->validate($request, [

            // 追加Columen用
            'title' => 'required|max:191',

            'content' => 'required|max:191',
        ]);
        // 何も入れない　且つ　191　より文字数が大きいと遷移しない
        // bladeに　遷移しなかった旨を　返す
        
        
        $message = new Message;

        // 追加Columen用
        $message->title = $request->title;

        $message->content = $request->content;
        $message->save();
        // request化　更に　内容　保存

        // redirectする
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // getでmessages/idにAccessされた場合の「取得表示処理」
    public function show($id)
    {
        $message = Message::find($id);
        return view('messages.show', [
            'message' => $message,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // getでmessages/id/editにAccessされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $message = Message::find($id);
        // $messageにはcontent が最初から入っている

        return view('messages.edit', [
            'message' => $message,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // putまたはpatchでmessages/idにAccessされた場合の「更新処理」
    public function update(Request $request, $id)
    {
            // 更新する際もvalidate
            $this->validate($request,[

            // 追加Columen用
            'title' => 'required|max:191', 
            
            'content' => 'required|max:191',
        ]);
        
        
        $message = Message::find($id);

        // 追加Columen用
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save();

        // redirectする
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // deleteでmessages/idにAccessされた場合の「削除処理」
    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();

        return redirect('/');
    }
}
