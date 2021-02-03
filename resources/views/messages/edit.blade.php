@extends('layouts.app')

@section('content')

        <!-- ここにページ毎のコンテンツを書く -->
        
        <!--Error文言は　共通化-->

        <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>
        
        <div class="row">
            <div class="col-6">
                {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}
            
                    <div class="form-group">
                        {!! Form::label('content', 'メッセージ:') !!}

                        <!--最初からその値が入っているForm::text('content')に　-->
                        {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    </div>
            
                    {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
            </div>
        </div>


@endsection