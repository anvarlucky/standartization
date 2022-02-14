<div class="form-group">
    <label for="">Rol nomi</label>
    {{Form::text('name', $role->name??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label><strong>Hatti harakatlar :</strong></label><br>
    @foreach($actions as $action)
        <label><input type="checkbox" name="categories[]" value="{{$action}}">{{$action->title}}</label><br/>
    @endforeach
</div>