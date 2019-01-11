<div class="form-group {{ $errors->has('kd_pinjaman') ? 'has-error' : ''}}">
    {!! Form::label('kd_pinjaman', 'Kode Pinjaman', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kd_pinjaman', null, ['class' => 'form-control','placeholder'=>'Masukkan Kode Pinjaman']) !!}
        {!! $errors->first('kd_pinjaman', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jangka_waktu_pinjaman') ? 'has-error' : ''}}">
    {!! Form::label('jangka_waktu_pinjaman', 'Jangka Waktu Pinjaman', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jangka_waktu_pinjaman', null, ['class' => 'form-control','placeholder'=>'Masukkan Jangka Waktu Pinjaman']) !!}
        {!! $errors->first('jangka_waktu_pinjaman', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tgl_pinjaman') ? 'has-error' : ''}}">
    {!! Form::label('tgl_pinjaman', 'Tanggal Pinjaman', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tgl_pinjaman', null, ['class' => 'form-control','placeholder'=>'Masukkan Tanggal Pinjaman']) !!}
        {!! $errors->first('tgl_pinjaman', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jml_pinjaman_dan_bunga_pinjaman') ? 'has-error' : ''}}">
    {!! Form::label('jml_pinjaman_dan_bunga_pinjaman', 'Jumlah Pinjaman Dan Bunga Pinjaman', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jml_pinjaman_dan_bunga_pinjaman', null, ['class' => 'form-control','placeholder'=>'Masukkan Jumlah Pinjaman Dan Bunga Pinjaman']) !!}
        {!! $errors->first('jml_pinjaman_dan_bunga_pinjaman', '<p class="help-block">:message</p>') !!}
    </div></div>
    
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
