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

<div class="form-group">
    <label for=""><b>Qo`llanilish hududi</b></label>
    {{Form::textarea('scope', $standart->scope??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Qo`llanilish hududi rasm</label>
    {{Form::file('photo_scope', ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for=""><b>Normativ havolalar</b></label>
    {{Form::textarea('normative_references', $standart->normative_references??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Normativ havolalar rasm</label>
    {{Form::file('photo_normative_references', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for=""><b>Klassifikatsiya</b></label>
    {{Form::textarea('classifications', $standart->classifications??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Klassifikatsiya rasm</label>
    {{Form::file('photo_classifications', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for=""><b>Texnik talab</b></label>
    {{Form::textarea('technical_requirement', $standart->technical_requirement??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Texnik talab rasm</label>
    {{Form::file('photo_technical_requirement', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for=""><b>Havfsizlik talabi</b></label>
    {{Form::textarea('safety_requirement', $standart->safety_requirement??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Havfsizlik talabi rasm</label>
    {{Form::file('photo_safety_requirement', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for=""><b>Qabul qilish qoidalari </b></label>
    {{Form::textarea('acceptance_rule', $standart->acceptance_rule??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Qabul qilish qoidalari rasm</label>
    {{Form::file('photo_acceptance_rules', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for=""><b>Nazorat qilish usullari</b></label>
    {{Form::textarea('control_method', $standart->control_method??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Nazorat qilish usullari rasm</label>
    {{Form::file('photo_control_method', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for=""><b>Ilova A</b></label>
    {{Form::textarea('appendix_a_reference', $standart->appendix_a_reference??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Ilova A rasm</label>
    {{Form::file('photo_appendix_a_reference', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for=""><b>Bibliografiya</b></label>
    {{Form::textarea('bibliography', $standart->bibliography??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Bibliografiya rasm</label>
    {{Form::file('photo_bibliography', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for=""><b>Bibliografik malumotlar</b></label>
    {{Form::textarea('bibliography_data', $standart->bibliography_data??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Bibliografik malumotlar rasm</label>
    {{Form::file('photo_bibliography_data', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="">Standart Document WORD</label>
    {{Form::file('doc_standart', ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Standart Document PDF</label>
    {{Form::file('pdf_standart', ['class' => 'form-control'])}}
</div>