@extends('layouts.mainAdmin')
@section('content')
    <div class="container-fluid p-5">
        <div class="d-flex justify-content-between align-items-center">
            <p class="title-list">Foydalanuvchilar ro'yhati</p>
        </div>
        <div class="col-12 px-0 table-box">
            <div class="table-top-panel d-flex align-items-center justify-content-between px-2 py-3">
                <a href="{{route('users.create')}}" class="btn adding-button">
                    Yangi qo'shish <i class="fa fa-plus ml-2 mt-1"></i>
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover" id="org_table">
                    <thead>
                    <tr>
                        <th class="lightblue-color w-2" scope="col">#</th>
                        <th class="darkblue-color text-center text-nowrap align-top"></th>
                        <th class="darkblue-color text-center text-nowrap align-top">Foydalanuvchi nomi</th>
                        <th class="darkblue-color text-center text-nowrap align-top">Foydalanuvchi e_maili</th>
                        <th class="darkblue-color text-center text-nowrap align-top"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <th class="lightblue-color w-2 align-middle" scope="row">{{++$key}}</th>
                            <td class="lightblue-color w-2 align-middle">
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-outline-primary mr-3 text-nowrap">O`zgartirish</a>
                            </td>
                            <td class="darkblue-color text-center text-nowrap align-middle">{{$user->name}}</td>
                            <td class="darkblue-color text-center text-nowrap align-middle">{{$user->email}}</td>
                            </td>
                            <td class="lightblue-color w-2 align-middle">
                                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-outline-danger mr-3" type="submit" onclick="return confirm('Rostdan ham {{$user->name}} o`chirmoqchimisiz?')" value="O`chirish" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection