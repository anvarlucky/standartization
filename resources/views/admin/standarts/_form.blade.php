<div class="form-group">
    <label for="">Hujjatni tanlang</label>
{{Form::select('doc_type_id', [__(' ')]+Arr::pluck($doc_types,'name','id'),$standart->doc_type_id??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Standart nomi</label>
    {{Form::text('title', $standart->title??null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="">Ishlab chiqqan tashkilot nomi</label>
    {{Form::text('developed_organization', $standart->developed_organization??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Kiritgan tashkilot nomi</label>
    {{Form::text('organization', $standart->organization??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Tasdiqlangan</label>
    {{Form::text('approved', $standart->approved??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Kuchga kirishi</label>
    {{Form::text('entry_into_force', $standart->entry_into_force??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Oldingi tahrirlar</label>
    {{Form::text('previous_edit', $standart->previous_edit??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Holati</label>
    {{Form::text('status', $standart->status??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Xorijiy analoglar</label>
    {{Form::text('foreign_analogs', $standart->foreign_analogs??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Sahifalar soni</label>
    {{Form::text('pages', $standart->pages??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Qaysi standart o`rniga</label>
    {{Form::text('which_instead_standart', $standart->which_instead_standart??null, ['class' => 'form-control'])}}
</div>