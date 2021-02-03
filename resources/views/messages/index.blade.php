@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    <h1>メッセージ一覧</h1>

    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>

                    <!--追加Column-->
                    <th>タイトル</th>

                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>

                    <!--追加Column-->
                    <td>{{ $message->title }}</td>
                    
                    <td>{{ $message->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <!--{!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id], ['class' => 'btn btn-light']) !!}-->

        
    @endif

    <!--Laravel Collective　使用　追記-->
    {!!
    link_to_route(
    'messages.create',
    '新規メッセージの投稿', 
    [],
    ['class' => 'btn btn-primary']
    ) 
    !!}
    

@endsection