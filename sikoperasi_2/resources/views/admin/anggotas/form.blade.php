<div class="form-group {{ $errors->has('id_anggota') ? 'has-error' : ''}}">
    {!! Form::label('id_anggota', 'Id Anggota', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('id_anggota', null, ['class' => 'form-control','placeholder'=>'Masukkan Id Anggota']) !!}
        {!! $errors->first('id_anggota', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nama_anggota') ? 'has-error' : ''}}">
    {!! Form::label('nama_anggota', 'Nama Anggota', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_anggota', null, ['class' => 'form-control','placeholder'=>'Masukkan Nama Anggota']) !!}
        {!! $errors->first('nama_anggota', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('alamat_anggota') ? 'has-error' : ''}}">
    {!! Form::label('alamat_anggota', 'Alamat Anggota', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('alamat_anggota', null, ['class' => 'form-control','placeholder'=>'Masukkan Alamat Anggota']) !!}
        {!! $errors->first('alamat_anggota', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('no_hp_anggota') ? 'has-error' : ''}}">
    {!! Form::label('no_hp_anggota', 'No Hp Anggota', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('no_hp_anggota', null, ['class' => 'form-control','placeholder'=>'Masukkan No Hp Anggota']) !!}
        {!! $errors->first('no_hp_anggota', '<p class="help-block">:message</p>') !!}
    </div></div>
    
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
