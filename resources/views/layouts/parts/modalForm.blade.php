<div class="modal fade custom-modal" id="staticBackdrop" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        {{Form::open(['route' => ['offers.store'], 'method' => 'post'])}}
            <div class="modal-body">
            {{Form::hidden('standart_id', $offer->standart_id??$standart->id)}}
            {{Form::text('text', $offer->text??null, ['class' => 'form-control placeholder-grey rounded-0 border-0 px-4 py-2 mt-2','placeholder' => 'Taklifni kiriting...'])}}
            {{Form::text('phone_number', $offer->phone_number??null, ['class' => 'form-control placeholder-grey rounded-0 border-0 px-4 py-2 mt-4','placeholder' => 'Siz bilan aloqa uchun e-mail yoki telefon kiriting...'])}}
            </div>
            <div class="modal-footer">
            {{Form::submit(('Yuborish'), ['class' => 'btn submit-btn focus-none'])}}
            </div>
        {{Form::close()}}
        </div>
    </div>
</div>