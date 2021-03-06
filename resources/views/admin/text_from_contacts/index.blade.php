@extends('layouts.mainAdmin')
@section('content')
    <div class="container-fluid p-5">
        <div class="d-flex justify-content-between align-items-center">
            <p class="title-list">Fikr mulohazalar ro'yhati</p>
        </div>
        <div class="col-12 px-0 table-box">
            <div class="table-top-panel d-flex align-items-center justify-content-between px-2 py-3">
                <a href="#" class="btn adding-button">
                    Yangi qo'shish <i class="fa fa-plus ml-2 mt-1"></i>
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover" id="org_table">
                    <thead>
                    <tr>
                        <th class="lightblue-color w-2" scope="col">#</th>
                        <th class="darkblue-color text-center text-nowrap align-top">Taklif yubordi</th>
                        <th class="darkblue-color text-center text-nowrap align-top">Taklif matn</th>
                        <th class="darkblue-color text-center text-nowrap align-top">Taklif e_mail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $key => $contact)
                        <tr>
                            <th class="lightblue-color w-2 align-middle" scope="row">{{++$key}}</th>
                            <td class="lightblue-color w-2 align-middle">
                                {{$contact->full_name}}
                            </td>
                            <td class="darkblue-color text-center text-nowrap align-middle">{{$contact->text}}</td>
                            </td>
                            <td class="lightblue-color w-2 align-middle">
                                {{$contact->e_mail}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection