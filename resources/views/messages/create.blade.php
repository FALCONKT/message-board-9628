@extends('layouts.app')

@section('content')

    <!-- ここにページ毎のコンテンツを書く -->

    <!--Error文言は　共通化-->

    <h1>メッセージ新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($message, ['route' => 'messages.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}

 
        </div>
    </div>

@endsection