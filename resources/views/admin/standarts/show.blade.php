@extends('layouts.mainAdmin')
@section('content')
    <b>Qo`llash sohasi</b>
    <br/>
    {{$standart->scope}}
    <br/>
    <img src="/storage/scope/{{$standart->photo_scope}}" width="500" height="400">
    <br/>
    <b>Meyoriy havolalar</b>
    <br/>
    {{$standart->normative_references}}
    <br/>
    <a href="{{route('doc',$standart->id)}}">DOC</a>
    <br/>
    <a href="{{route('pdf',$standart->id)}}">PDF</a>

@endsection