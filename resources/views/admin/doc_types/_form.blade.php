<div class="form-group">
    <label for="">Sinfni tanlang</label>
{{Form::select('classification_id', [__(' ')]+Arr::pluck($classifications,'name','id'),$doc_type->classification_id??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Dokument turi nomi</label>
    {{Form::text('name', $doc_type->name??null, ['class' => 'form-control'])}}
</div>