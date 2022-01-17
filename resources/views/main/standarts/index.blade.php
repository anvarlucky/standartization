@extends('layouts.mainMain')
@section('content')
<div class="container">
    <p class="title mt-md-5">
        Standartlar elektron katalogi
    </p>

    <div class="filter">
        <input type="text" class="form-control placeholder-grey rounded-0 border-0 px-4 py-2" placeholder="Qidiruv...">

        <div class="text-end mt-4">
            <button class="btn bg-transparent long-search">
                Kengaytirilgan qidiruv
            </button>
            <button class="btn submit-btn">IZLASH</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="d-flex align-items-center text-start mt-4">
        <a href="#list" class="btn bg-392D7D rounded-0 focus-none text-white me-3">
            <i class="fal fa-list-ul"></i>
        </a>

        <button class="btn bg-392D7D active focus-none rounded-0 text-white me-3">
            <img src="{{'/assets/images/view.svg'}}" width="18" alt="view">
        </button>

        <div class="dropdown w-25">
            <button class="btn bg-392D7D px-4 focus-none rounded-0 dropdown-toggle text-white" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                ENG OXIRGI

                <i class="fas fa-chevron-right down-transform ms-2"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li>
                    <button class="dropdown-item" type="button">Action</button>
                </li>
                <li>
                    <button class="dropdown-item" type="button">Another action</button>
                </li>
                <li>
                    <button class="dropdown-item" type="button">Something else here</button>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($standarts as $standart)
        <div class="col-md-6 mt-4">
            <div class="item-half">
                <a href="{{route('standart1',$standart->id)}}" class="item-half_title">
                    {{$standart->title}}
                </a>
                <p class="item-half_text">
                    {!!  $standart->description!!}
                </p>
            </div>
        </div>
        @endforeach


        <div class="col-12">
            <nav aria-label="Page navigation example" class="my-5">
                <ul class="pagination justify-content-center flex-wrap">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection