<div class="form-group">
    <label for="">Rol tanlang</label>
{{Form::select('role_id', [__(' ')]+Arr::pluck($roles,'name','id'),$user->role_id??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Foydalanuvchi nomi</label>
    {{Form::text('name', $user->name??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Foydalanuvchi Login</label>
    {{Form::text('login', $user->login??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Foydalanuvchi E-maili</label>
    {{Form::text('email', $user->email??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Foydalanuvchi paroli</label>
    {{Form::text('password', $user->password??null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Parolni tasdiqlash</label>
    {{Form::text('password_confirm', $user->password??null, ['class' => 'form-control'])}}
</div>