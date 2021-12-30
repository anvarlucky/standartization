@extends('layouts.mainAdmin')
@section('content')
    <div class="container-fluid">
        <div class="col-md-9 table-box">
            <b>Qo`llash sohasi</b>
            <br/>
            {!! $standart->scope !!}
            <br/>
            @if($standart->photo_scope)
            <img src="/storage/scope/{{$standart->photo_scope}}" width="500" height="400">
            @endif
            <br/>
            <b>Meyoriy havolalar</b>
            <br/>
            {!! $standart->normative_references !!}
            <br/>
            <a href="{{route('doc',$standart->id)}}">DOC</a>
            <br/>
            <a href="{{route('pdf',$standart->id)}}">PDF</a>
        </div>
    </div>
@endsection