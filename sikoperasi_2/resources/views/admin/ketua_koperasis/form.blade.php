<div class="form-group {{ $errors->has('id_ket_koperasi') ? 'has-error' : ''}}">
    {!! Form::label('id_ket_koperasi', 'Id Ketua Koperasi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('id_ket_koperasi', null, ['class' => 'form-control','placeholder'=>'Masukkan Id Ketua Koperasi']) !!}
        {!! $errors->first('id_ket_koperasi', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nama_ket_koperasi') ? 'has-error' : ''}}">
    {!! Form::label('nama_ket_koperasi', 'Nama Ketua Koperasi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_ket_koperasi', null, ['class' => 'form-control','placeholder'=>'Masukkan Nama Ketua Koperasi']) !!}
        {!! $errors->first('nama_ket_koperasi', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('alamat_ket_koperasi') ? 'has-error' : ''}}">
    {!! Form::label('alamat_ket_koperasi', 'Alamat Ketua Koperasi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('alamat_ket_koperasi', null, ['class' => 'form-control','placeholder'=>'Masukkan Alamat Ketua Koperasi']) !!}
        {!! $errors->first('alamat_ket_koperasi', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('no_hp_ket_koperasi') ? 'has-error' : ''}}">
    {!! Form::label('no_hp_ket_koperasi', 'No Hp Ketua Koperasi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('no_hp_ket_koperasi', null, ['class' => 'form-control','placeholder'=>'Masukkan No Hp Ketua Koperasi']) !!}
        {!! $errors->first('no_hp_ket_koperasi', '<p class="help-block">:message</p>') !!}
    </div>
 </div><div class="form-group {{ $errors->has('admins_id') ? 'has-error' : ''}}">
    {!! Form::label('admins_id', 'Admins Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('admins_id', null, ['class' => 'form-control','placeholder'=>'Masukkan Admins Id']) !!}
        {!! $errors->first('admins_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('transaksis_id') ? 'has-error' : ''}}">
    {!! Form::label('transaksis_id', 'Transaksis Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('transaksis_id', null, ['class' => 'form-control','placeholder'=>'Masukkan Transaksis Id']) !!}
        {!! $errors->first('transaksis_id', '<p class="help-block">:message</p>') !!}
    </div>
    
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
