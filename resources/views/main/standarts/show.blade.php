@extends('layouts.mainMain')
@section('content')
<div class="container">
    <div class="row mt-5 pt-md-4">
        <div class="col-lg-6">
            <p class="fw-bold">
                {{$standart->title}}
            </p>

            <div class="d-flex flex-wrap">
                <p class="fw-bold mb-0 me-4 mt-lg-0 mt-2">
                    Kategoriya: <span class="fw-500">{{$standart->doc_type->classification->category->name}}</span>
                </p>

                <p class="fw-bold mb-0 me-4 mt-lg-0 mt-2">
                    Sinflanishi: <span class="fw-500">{{$standart->doc_type->classification->name}}</span>
                </p>

                <p class="fw-bold mb-0 me-4 mt-lg-0 mt-2">
                    Hujjat turi: <span class="fw-500">{{$standart->doc_type->name}}</span>
                </p>
            </div>
        </div>
    </div>

    <div class="row mt-4">

        <div class="col-md-8">
            <details class="details">
                <summary class="details-summary">
                    <i class="fal fa-plus me-3"></i> 1. Область применения
                </summary>
                <div class="details-body">
                    <p class="details-body_text">
                        {!!$standart->scope!!}
                    </p>
                        @if($standart->photo_scope)
                    <div class="d-flex justify-content-center my-4">
                        <img src="/storage/scope/{{$standart->photo_scope}}" class="me-4" alt="placeholder" height="500px" width="600px">
                    </div>
                        @endif
                </div>
            </details>
            <details class="details">
                <summary class="details-summary">
                    <i class="fal fa-plus me-3"></i> 2. Нормативные ссылки
                </summary>
                <div class="details-body">
                    <p class="details-body_text">
                        {!! $standart->normative_references !!}
                    </p>
                        @if($standart->photo_normative_references)
                    <div class="d-flex justify-content-center my-4">
                        <img src="/storage/standart/photo_normative_references/{{$standart->photo_normative_references}}" class="me-4" alt="placeholder" height="500px" width="600px">
                    </div>
                        @endif
                </div>
            </details>
            <details class="details">
                <summary class="details-summary">
                    <i class="fal fa-plus me-3"></i> 3. Классификация
                </summary>
                <div class="details-body">
                    <p class="details-body_text">
                        {!! $standart->classifications !!}
                    </p>
                    @if($standart->photo_classifications)
                    <div class="d-flex justify-content-center my-4">
                        <img src="/storage/standart/photo_classifications/{{$standart->photo_classifications}}" class="me-4" alt="placeholder" height="500px" width="600px">
                    </div>
                    @endif
                </div>
            </details>
            <details class="details">
                <summary class="details-summary">
                    <i class="fal fa-plus me-3"></i>4. Технические требования
                </summary>
                <div class="details-body">
                    <p class="details-body_text">
                        {!! $standart->technical_requirement !!}
                    </p>
                    @if($standart->photo_technical_requirement)
                    <div class="d-flex justify-content-center my-4">
                        <img src="/storage/standart/photo_technical_requirement/{{$standart->photo_technical_requirement}}" class="me-4" alt="placeholder" height="500px" width="600px">
                    </div>
                    @endif
                </div>
            </details>
            <details class="details">
                <summary class="details-summary">
                    <i class="fal fa-plus me-3"></i> 5. Требования безопасности и охраны окружающей среды
                </summary>
                <div class="details-body">
                    <p class="details-body_text">
                        {!! $standart->safety_requirement !!}
                    </p>
                        @if($standart->photo_safety_requirement)
                    <div class="d-flex justify-content-center my-4">
                        <img src="/storage/standart/photo_safety_requirement/{{$standart->photo_safety_requirement}}" class="me-4" alt="placeholder" height="500px" width="600px">
                    </div>
                        @endif
                </div>
            </details>
            <details class="details">
                <summary class="details-summary">
                    <i class="fal fa-plus me-3"></i> 6. Правила приемки
                </summary>
                <div class="details-body">
                    <p class="details-body_text">
                        {!! $standart->acceptance_rule !!}
                    </p>
                        @if($standart->photo_acceptance_rule)
                    <div class="d-flex justify-content-center my-4">
                        <img src="/storage/standart/photo_acceptance_rule/{{$standart->photo_acceptance_rule}}" class="me-4" alt="placeholder" height="500px" width="600px">
                    </div>
                        @endif
                </div>
            </details>
            <details class="details">
                <summary class="details-summary">
                    <i class="fal fa-plus me-3"></i> 7. Методы контроля
                </summary>
                <div class="details-body">
                    <p class="details-body_text">
                        {!! $standart->control_method !!}
                    </p>

                    @if($standart->photo_control_method)
                        <div class="d-flex justify-content-center my-4">
                            <img src="/storage/standart/photo_control_method/{{$standart->photo_control_method}}" class="me-4" alt="placeholder" height="500px" width="600px">
                        </div>
                    @endif
                </div>
            </details>
            <details class="details">
                <summary class="details-summary">
                    <i class="fal fa-plus me-3"></i> 8. Приложение А (справочное)
                </summary>
                <div class="details-body">
                    <p class="details-body_text">
                        {!! $standart->appendix_a_reference !!}
                    </p>

                    @if($standart->photo_appendix_a_reference)
                        <div class="d-flex justify-content-center my-4">
                            <img src="/storage/standart/photo_appendix_a_reference/{{$standart->photo_appendix_a_reference}}" class="me-4" alt="placeholder" height="500px" width="600px">
                        </div>
                    @endif
                </div>
            </details>
            <details class="details">
                <summary class="details-summary">
                    <i class="fal fa-plus me-3"></i> 9. Библиография
                </summary>
                <div class="details-body">
                    <p class="details-body_text">
                        {!! $standart->bibliography !!}
                    </p>

                    @if($standart->photo_bibliography)
                        <div class="d-flex justify-content-center my-4">
                            <img src="/storage/standart/photo_bibliography/{{$standart->photo_bibliography}}" class="me-4" alt="placeholder" height="500px" width="600px">
                        </div>
                    @endif
                </div>
            </details>
            <details class="details">
                <summary class="details-summary">
                    <i class="fal fa-plus me-3"></i> 10. Библиографические данные
                </summary>
                <div class="details-body">
                    <p class="details-body_text">
                        {!! $standart->bibliography_data !!}
                    </p>

                    @if($standart->photo_bibliography_data)
                        <style>
                            img.me-4 {
                                border: 1px solid #ddd;
                                border-radius: 4px;
                                padding: 5px;
                                width: 150px;
                            }

                            img.me-4:hover {
                                box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
                            }
                        </style>
                        <div class="d-flex justify-content-center my-4">
                            <a target="_blank" href="/storage/standart/photo_bibliography_data/{{$standart->photo_bibliography_data}}">
                                <img src="/storage/standart/photo_bibliography_data/{{$standart->photo_bibliography_data}}" class="me-4" alt="placeholder" height="300px" width="500px">
                            </a>
                        </div>
                    @endif
                </div>
            </details>
        </div>
        <div class="col-md-4 mt-md-0 mt-4">
            <div class="information">
                <div class="information-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <p class="fw-500 mb-0">
                        Ishlab chiqgan tashkilot:
                    </p>
                    <p>
                        {{$standart->developed_organization}}
                    </p>
                    <p class="fw-500 mb-0">
                        Kiritgan tashkilot:
                    </p>
                    <p>
                        {{$standart->organization}}
                    </p>
                    <p class="fw-500 mb-0">
                        Tasdiqlangan:
                    </p>
                    <p>
                        {{$standart->approved}}
                    </p>
                    <p class="fw-500 mb-0">
                        Kuchga kirishi:
                    </p>
                    <p>
                        {{$standart->entry_into_force}}
                    </p>
                    <p class="fw-500">
                        Oldingi tahrirlar:
                    </p>
                    <p>
                        {{$standart->previous_edit}}
                    </p>
                    <p class="fw-500">
                        Holati:
                    </p>
                    <p>
                        {{$standart->status}}
                    </p>
                    <p class="fw-500">
                        Xorijiy analoglar:
                    </p>
                    <p>
                        {{$standart->foreign_analogs}}
                    </p>
                    <p class="fw-500">
                        Sahifalar soni:
                    </p>
                    <p>
                        {{$standart->pages}}
                    </p>
                    <p class="fw-500">
                        Qaysi standart o’rniga:
                        <span class="fw-normal" >
                {{$standart->which_instead_standart}}
              </span>
                    </p>

                    <div class="d-flex mt-4 mb-3">
                        <a href="{{route('docclient',$standart->id)}}"><img src="{{asset('/assets/images/word.svg')}}" class="mx-2" alt="word"></a>
                        <a href="{{route('pdfclient',$standart->id)}}"><img src="{{asset('/assets/images/pdf.svg')}}" class="mx-2" alt="word"></a>
                    </div>
                </div>

                <div class="information-notice">
                    <p class="fw-500">Eslatma!</p>
                    <p>
                        Matnda kamchiliklar ko’rsangiz yoki takliflaringiz bo’lsa, matnni belgilang va
                        takliflaringizni kiritib, administratorga yuboring!
                        Tez vaqtda sizni takliflaringiz o’rganilib chiqiladi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.parts.modalForm')

@endsection