<div class="form-group {{ $errors->has('id_admin') ? 'has-error' : ''}}">
    {!! Form::label('id_admin', 'Id Admin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('id_admin', null, ['class' => 'form-control','placeholder'=>'Masukkan Id Admin']) !!}
        {!! $errors->first('id_admin', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    {!! Form::label('username', 'Username', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('username', null, ['class' => 'form-control','placeholder'=>'Masukkan Username']) !!}
        {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    {!! Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('password', null, ['class' => 'form-control','placeholder'=>'Masukkan Password']) !!}
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('level_user') ? 'has-error' : ''}}">
    {!! Form::label('level_user', 'Level User', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('level_user', null, ['class' => 'form-control','placeholder'=>'Masukkan Level User']) !!}
        {!! $errors->first('level_user', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('anggotas_id') ? 'has-error' : ''}}">
    {!! Form::label('anggotas_id', 'Anggotas Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('anggotas_id', null, ['class' => 'form-control','placeholder'=>'Masukkan Anggotas Id']) !!}
        {!! $errors->first('anggotas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('simpanans_id') ? 'has-error' : ''}}">
    {!! Form::label('simpanans_id', 'Simpanans Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('simpanans_id', null, ['class' => 'form-control','placeholder'=>'Masukkan Simpanans Id']) !!}
        {!! $errors->first('simpanans_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('pinjamans_id') ? 'has-error' : ''}}">
    {!! Form::label('pinjamans_id', 'Pinjamans Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pinjamans_id', null, ['class' => 'form-control','placeholder'=>'Masukkan Pinjamans Id']) !!}
        {!! $errors->first('pinjamans_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('transaksis_id') ? 'has-error' : ''}}">
    {!! Form::label('transaksis_id', 'Transaksis Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('transaksis_id', null, ['class' => 'form-control','placeholder'=>'Masukkan Transaksis Id']) !!}
        {!! $errors->first('transaksis_id', '<p class="help-block">:message</p>') !!}
    </div></div>
    
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
