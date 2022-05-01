<div class="form-group">
    <label for="">Hujjatni tanlang</label>
{{Form::select('doc_type_id', [__(' ')]+Arr::pluck($doc_types,'name','id'),$standart->doc_type_id??null, ['class' => 'form-control'])}}

</div>
<div class="form-group">
    <label for="">Standart nomi</label>
    {{Form::text('title', $standart->title??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Standart raqami</label>
    {{Form::text('standart_number', $standart->standart_number??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Standart qisqacha mazmuni</label>
    {{Form::textarea('description', $standart->description??null, ['class' => 'form-control','id'=>"summary-ckeditor"])}}
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

<p>
<a class="btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    1.Qo`llash sohasi
</a>
<a class="btn" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
    Qo`llash sohasi rasm
</a>
</p>
<div class="collapse" id="collapseExample">
    <div class="form-group">
        <label for=""><b>1.Qo`llash sohasi</b></label>
        {{Form::textarea('scope', $standart->scope??null, ['class' => 'form-control','id'=>"summary1-ckeditor"])}}
    </div>
</div>
<div class="collapse" id="collapseExample1">
<div class="form-group">
<label for="">Qo`llash sohasi rasm</label>
    {{Form::file('photo_scope[]', ['multiple' => true], ['class' => 'form-control'])}}
</div>
</div>

<p>
    <a class="btn" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
        2.Meyoriy havolalar
    </a>
    <a class="btn" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
        Meyoriy havolalar rasm
    </a>
</p>
<div class="collapse" id="collapseExample2">
<div class="form-group">
    <label for=""><b>2.Meyoriy havolalar</b></label>
    {{Form::textarea('normative_references', $standart->normative_references??null, ['class' => 'form-control','id' => 'summary2-ckeditor'])}}
</div>
</div>
<div class="collapse" id="collapseExample3">
<div class="form-group">
<label for="">Meyoriy havolalar rasm</label>
    {{Form::file('photo_normative_references[]',['multiple' => true], ['class' => 'form-control'])}}
</div>
</div>

<p>
    <a class="btn" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
        3.Tasniflar va shartli belgilar
    </a>
    <a class="btn" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
        Tasniflar va shartli belgilar rasm
    </a>
</p>
<div class="collapse" id="collapseExample4">
<div class="form-group">
    <label for=""><b>3.Tasniflar va shartli belgilar</b></label>
    {{Form::textarea('classifications', $standart->classifications??null, ['class' => 'form-control','id' => 'summary3-ckeditor'])}}
</div>
</div>
<div class="collapse" id="collapseExample5">
<div class="form-group">
<label for="">Tasniflar va shartli belgilar rasm</label>
    {{Form::file('photo_classifications', ['class' => 'form-control'])}}
</div>
</div>

<p>
    <a class="btn" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
        4.Texnik talablar
    </a>
    <a class="btn" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">
        Texnik talablar rasm
    </a>
</p>
<div class="collapse" id="collapseExample6">
<div class="form-group">
    <label for=""><b>4.Texnik talablar</b></label>
    {{Form::textarea('technical_requirement', $standart->technical_requirement??null, ['class' => 'form-control','id' => 'summary4-ckeditor'])}}
</div>
</div>
<div class="collapse" id="collapseExample7">
<div class="form-group">
<label for="">Texnik talablar rasm</label>
    {{Form::file('photo_technical_requirement', ['class' => 'form-control'])}}
</div>
</div>


<p>
    <a class="btn" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample">
        5.Havfsizlik va atrof muhitni muhofaza qilish talablari
    </a>
    <a class="btn" data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample">
        Havfsizlik va atrof muhitni muhofaza qilish talablari rasm
    </a>
</p>
<div class="collapse" id="collapseExample8">
<div class="form-group">
    <label for=""><b>5.Havfsizlik va atrof muhitni muhofaza qilish talablari</b></label>
    {{Form::textarea('safety_requirement', $standart->safety_requirement??null, ['class' => 'form-control','id' => 'summary5-ckeditor'])}}
</div>
</div>
<div class="collapse" id="collapseExample9">
<div class="form-group">
<label for="">Havfsizlik va atrof muhitni muhofaza qilish talablari rasm</label>
    {{Form::file('photo_safety_requirement', ['class' => 'form-control'])}}
</div>
</div>

<p>
    <a class="btn" data-toggle="collapse" href="#collapseExample10" role="button" aria-expanded="false" aria-controls="collapseExample">
        6.Qabul qilish qoidalari
    </a>
    <a class="btn" data-toggle="collapse" href="#collapseExample11" role="button" aria-expanded="false" aria-controls="collapseExample">
        Qabul qilish qoidalari rasm
    </a>
</p>
<div class="collapse" id="collapseExample10">
<div class="form-group">
    <label for=""><b>6.Qabul qilish qoidalari </b></label>
    {{Form::textarea('acceptance_rule', $standart->acceptance_rule??null, ['class' => 'form-control','id' => 'summary6-ckeditor'])}}
</div>
</div>
<div class="collapse" id="collapseExample11">
<div class="form-group">
    <label for="">Qabul qilish qoidalari rasm</label>
    {{Form::file('photo_acceptance_rules', ['class' => 'form-control'])}}
</div>
</div>


<p>
    <a class="btn" data-toggle="collapse" href="#collapseExample12" role="button" aria-expanded="false" aria-controls="collapseExample">
        7.Nazorat usullari
    </a>
    <a class="btn" data-toggle="collapse" href="#collapseExample13" role="button" aria-expanded="false" aria-controls="collapseExample">
        Nazorat usullari rasm
    </a>
</p>
<div class="collapse" id="collapseExample12">
<div class="form-group">
    <label for=""><b>7.Nazorat usullari</b></label>
    {{Form::textarea('control_method', $standart->control_method??null, ['class' => 'form-control','id' => 'summary7-ckeditor'])}}
</div>
</div>
<div class="collapse" id="collapseExample13">
<div class="form-group">
<label for="">Nazorat usullari rasm</label>
    {{Form::file('photo_control_method', ['class' => 'form-control'])}}
</div>
</div>


<p>
    <a class="btn" data-toggle="collapse" href="#collapseExample14" role="button" aria-expanded="false" aria-controls="collapseExample">
        Ilova A
    </a>
    <a class="btn" data-toggle="collapse" href="#collapseExample15" role="button" aria-expanded="false" aria-controls="collapseExample">
        Ilova A rasm
    </a>
</p>
<div class="collapse" id="collapseExample14">
<div class="form-group">
    <label for=""><b>Ilova A</b></label>
    {{Form::textarea('appendix_a_reference', $standart->appendix_a_reference??null, ['class' => 'form-control','id' => 'summary8-ckeditor'])}}
</div>
</div>
<div class="collapse" id="collapseExample15">
<div class="form-group">
    <label for="">Ilova A rasm</label>
    {{Form::file('photo_appendix_a_reference', ['class' => 'form-control'])}}
</div>
</div>

<p>
    <a class="btn" data-toggle="collapse" href="#collapseExample16" role="button" aria-expanded="false" aria-controls="collapseExample">
        Bibliografiya
    </a>
    <a class="btn" data-toggle="collapse" href="#collapseExample17" role="button" aria-expanded="false" aria-controls="collapseExample">
        Bibliografiya rasm
    </a>
</p>
<div class="collapse" id="collapseExample16">
<div class="form-group">
    <label for=""><b>Bibliografiya</b></label>
    {{Form::textarea('bibliography', $standart->bibliography??null, ['class' => 'form-control','id' => 'summary9-ckeditor'])}}
</div>
</div>
<div class="collapse" id="collapseExample17">
<div class="form-group">
    <label for="">Bibliografiya rasm</label>
    {{Form::file('photo_bibliography', ['class' => 'form-control'])}}
</div>
</div>

<p>
    <a class="btn" data-toggle="collapse" href="#collapseExample18" role="button" aria-expanded="false" aria-controls="collapseExample">
        Bibliografik malumotlar
    </a>
    <a class="btn" data-toggle="collapse" href="#collapseExample19" role="button" aria-expanded="false" aria-controls="collapseExample">
        Bibliografik malumotlar rasm
    </a>
</p>
<div class="collapse" id="collapseExample18">
<div class="form-group">
    <label for=""><b>Bibliografik malumotlar</b></label>
    {{Form::textarea('bibliography_data', $standart->bibliography_data??null, ['class' => 'form-control','id' => 'summary10-ckeditor'])}}
</div>
</div>
<div class="collapse" id="collapseExample19">
<div class="form-group">
    <label for="">Bibliografik malumotlar rasm</label>
    {{Form::file('photo_bibliography_data', ['class' => 'form-control'])}}
</div>
</div>
<div class="form-group">
    <label for="">Standart Document WORD</label>
    {{Form::file('doc_standart', ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Standart Document PDF</label>
    {{Form::file('pdf_standart', ['class' => 'form-control'])}}
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
    CKEDITOR.replace( 'summary1-ckeditor' );
    CKEDITOR.replace( 'summary2-ckeditor' );
    CKEDITOR.replace( 'summary3-ckeditor' );
    CKEDITOR.replace( 'summary4-ckeditor' );
    CKEDITOR.replace( 'summary5-ckeditor' );
    CKEDITOR.replace( 'summary6-ckeditor' );
    CKEDITOR.replace( 'summary7-ckeditor' );
    CKEDITOR.replace( 'summary8-ckeditor' );
    CKEDITOR.replace( 'summary9-ckeditor' );
    CKEDITOR.replace( 'summary10-ckeditor' );
</script>
