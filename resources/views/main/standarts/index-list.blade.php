@extends('layouts.mainMain')
@section('content')
<div class="container">
    <p class="title mt-md-5">
        Standartlar elektron katalogi
    </p>

    <div class="filter">
        <form action="{{route('standart.search')}}" method="post">
            @csrf
            <input type="text" name="title" class="form-control placeholder-grey rounded-0 border-0 px-4 py-2" placeholder="Qidiruv...">
            <div class="text-end mt-4">
                <div id="demo" class="collapse">
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <select class="form-select rounded-0 border-0 px-4 py-2 fz-18" name="category_id">
                                <option></option>
                                @foreach($categories as $category)
                                    <option value={{$category->id}}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select rounded-0 border-0 px-4 py-2 fz-18" name="classification_id">
                                <option></option>
                                @foreach($classifications as $classification)
                                    <option value={{$category->id}}>{{$classification->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="description" class="form-control placeholder-grey rounded-0 border-0 px-4 py-2" placeholder="Kalit so’zni kiriting">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="standart_number" class="form-control placeholder-grey rounded-0 border-0 px-4 py-2" placeholder="Standart raqami">
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-between mt-3">
                        <div class="col-md-3">
                            <select class="form-select rounded-0 border-0 px-4 py-2 fz-18" name="doc_type_id">
                                <option></option>
                                @foreach($doc_types as $doc_type)
                                    <option value="{{$doc_type->id}}">{{$doc_type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn bg-transparent long-search" data-bs-toggle="collapse" data-bs-target="#demo">
                    Kengaytirilgan qidiruv
                </button>
                <button class="btn submit-btn">IZLASH</button>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <div class="d-flex align-items-center text-start mt-4">
        <a href="{{route('indexlist')}}" class="btn bg-392D7D rounded-0 focus-none text-white me-3">
            <i class="fal fa-list-ul"></i>
        </a>

        <a href="/" class="btn bg-392D7D active focus-none rounded-0 text-white me-3">
            <img src="{{'/assets/images/view.svg'}}" width="18" alt="view">
        </a>

        <div class="dropdown w-25">
            <button class="btn bg-392D7D px-4 focus-none rounded-0 dropdown-toggle text-white" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                ENG OXIRGI

                <i class="fas fa-chevron-right down-transform ms-2"></i>
            </button>
            <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownMenu2">
                <li>
                    <button class="dropdown-item" type="button">ENG BOSHI

                    </button>
                </li>
                <li>
                    <button class="dropdown-item" type="button"> YILI O’SISH BO’YICHA
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" type="button">YILI KAMAYISH BO’YICHA</button>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($standarts as $standart)
        <div class="col-md-12 mt-4">
            <div class="item-full">
                <a href="{{route('standart1',$standart->id)}}" style="text-decoration: none" class="item-full_title mb-0">
                    {!!  $standart->title!!}
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

</div>
</div>
@endsection