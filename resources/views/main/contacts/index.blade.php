@extends('layouts.mainMain')
@section('content')
    <div class="container">
        <div class="row mt-5 pt-md-4 justify-content-center">
            <div class="col-md-4 contact-right">
                <p class="contact-right_title">ALOQA UCHUN</p>
                <ul>
                    <li class="d-flex align-items-center">
                        <i class="fal fa-clock me-3 text-white contact-right_icon"></i>

                        <p class="contact-right_text">Ish vaqti: Du-Ju, 09:00 - 18:00</p>
                    </li>

                    <li class="d-flex align-items-center mt-3">
                        <i class="fal fa-phone-alt me-3 text-white contact-right_icon"></i>

                        <p class="contact-right_text">Telefon: +(998)71-000-00-00</p>
                    </li>

                    <li class="d-flex align-items-center mt-3">
                        <i class="fal fa-envelope me-3 text-white contact-right_icon"></i>

                        <p class="contact-right_text">uzstroystandart@mail.ru</p>
                    </li>
                    <li class="d-flex align-items-center mt-3">
                        <i class="fal fa-map-marker-alt me-3 text-white contact-right_icon"></i>

                        <p class="contact-right_text">Toshkent sh. Abay ko’chasi, 6</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 mt-md-0 mt-4 contact-left">
                <div class="d-flex align-items-center justify-content-center">
                    <p class="contact-left_title">
                        Savol va takliflaringiz bo’lsa
                        biz bilan bo’lishing!
                    </p>
                </div>

                <form class="contact-form">
                    <div class="d-flex">
                        <input type="text" class="form-control placeholder-grey rounded-0 border-0 px-4 py-3 me-3 shadow-blue" placeholder="Ism">
                        <input type="text" class="form-control placeholder-grey rounded-0 border-0 px-4 py-3 ms-3 shadow-blue" placeholder="Telefon">
                    </div>
                    <div class="mt-4">
                        <input type="text" class="form-control placeholder-grey rounded-0 border-0 px-4 py-3 me-3 shadow-blue" placeholder="Elektron pochta*">
                    </div>

                    <div class="mt-4">
            <textarea placeholder="Xabar*" class="form-control placeholder-grey rounded-0 border-0 px-4 py-3 me-3 shadow-blue resize-none" cols="30" rows="10">

                        </textarea>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="button" class="btn submit-btn focus-none">Yuborish</button>
                    </div>
                </form>

            </div>
            <div class="col-md-9 mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.316574284664!2d69.25374772678232!3d41.32372896556458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b6cfa83385d%3A0x53ee7efa6affb29d!2zNiDRg9C70LjRhtCwINCQ0LHQsNGPLCDQotCw0YjQutC10L3RgiAxMDAwMTEsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1603019688674!5m2!1sru!2s" width="100%" height="600" style="border: 0px; pointer-events: none;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
@endsection