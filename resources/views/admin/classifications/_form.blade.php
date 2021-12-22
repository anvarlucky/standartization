<div class="form-group">
    <label for="">Kategoriyani tanlang</label>
{{Form::select('category_id', [__(' ')]+Arr::pluck($categories,'name','id'),$classification->category_id??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Sinf nomi</label>
    {{Form::text('name', $classification->name??null, ['class' => 'form-control'])}}
</div>