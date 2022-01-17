@extends('layouts.mainAdmin')
@section('content')
    {!!  $standart->scope!!}
    <b>Qo`llash sohasi</b>
    <br/>
    {!!  $standart->scope!!}
    <br/>
    @if($standart->photo_scope != null)
    <img src="/storage/scope/{{$standart->photo_scope}}" width="500" height="400">
    @endif
    <br/>
    <b>Meyoriy havolalar</b>
    <br/>
    {!!  $standart->normative_references!!}
    <br/>
    <b>Ilova A</b>
    {!! $standart->appendix_a_reference !!}
    <br/>
    @if($standart->photo_appendix_a_reference != null)
        <img src="/storage/scope/{{$standart->photo_appendix_a_reference}}" width="500" height="400">
    @endif
    <br>
    <a href="{{route('doc',$standart->id)}}">DOC</a>
    <br/>
    <a href="{{route('pdf',$standart->id)}}">PDF</a>
@endsection