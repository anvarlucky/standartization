@extends('layouts.mainAdmin')
@section('content')
    <div class="container-fluid p-5">
        <div class="d-flex justify-content-between align-items-center">
            <p class="title-list">Takliflar ro'yhati</p>
        </div>
        <div class="col-12 px-0 table-box">
            <div class="table-responsive">
                <table class="table table-hover" id="org_table">
                    <thead>
                    <tr>
                        <th class="lightblue-color w-2" scope="col">#</th>
                        <th class="darkblue-color text-center text-nowrap align-top"></th>
                        <th class="darkblue-color text-center text-nowrap align-top">Sandart nomi</th>
                        <th class="darkblue-color text-center text-nowrap align-top">Taklif va savol</th>
                        <th class="darkblue-color text-center text-nowrap align-top">Aloqa</th>
                        {{--<th class="darkblue-color text-center text-nowrap align-top"></th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($offers as $key => $offer)
                        <tr>
                            <th class="lightblue-color w-2 align-middle" scope="row">{{++$key}}</th>
                            <td class="lightblue-color w-2 align-middle">
                                {{--<a href="#" class="btn btn-outline-primary mr-3 text-nowrap">O`zgartirish</a>--}}
                            </td>
                            <td class="darkblue-color text-center text-nowrap align-middle">{{$offer->standart->title}}</td>
                            </td>
                            <td class="darkblue-color text-center text-nowrap align-middle">{{$offer->text}}</td>
                            </td>
                            <td class="darkblue-color text-center text-nowrap align-middle">{{$offer->phone_number}}</td>
                            </td>
                            {{--<td class="lightblue-color w-2 align-middle">
                                <form action="{{ route('offers1.destroy', $offer->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-outline-danger mr-3" type="submit" onclick="return confirm('Rostdan ham {{$offer->text}} o`chirmoqchimisiz?')" value="O`chirish" />
                                </form>
                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection