<div class="form-group col-md-12">
    {{Form::open(['route' => 'save', 'method' => 'post','files'=>true])}}
    @csrf
    <div class="form-group">
        <label for="">Standartni</label>
    {{Form::select('standart_id', [__(' ')]+Arr::pluck($standarts,'title','id'),$standart->id??null, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        <label for="">Qo`llash sohasi rasm</label>
        {{Form::file('image[]', ['multiple' => true], ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::submit(('Saqlash'), ['class' => 'btn btn-primary'])}}
    </div>
    {{Form::close()}}
</div>