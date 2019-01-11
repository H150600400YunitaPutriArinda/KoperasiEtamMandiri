<div class="form-group {{ $errors->has('kd_simpanan') ? 'has-error' : ''}}">
    {!! Form::label('kd_simpanan', 'Kode Simpanan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kd_simpanan', null, ['class' => 'form-control','placeholder'=>'Masukkan Kode Simpanan']) !!}
        {!! $errors->first('kd_simpanan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jenis_simpanan') ? 'has-error' : ''}}">
    {!! Form::label('jenis_simpanan', 'Jenis Simpanan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jenis_simpanan', null, ['class' => 'form-control','placeholder'=>'Masukkan Jenis Simpanan']) !!}
        {!! $errors->first('jenis_simpanan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tgl_simpanan') ? 'has-error' : ''}}">
    {!! Form::label('tgl_simpanan', 'Tanggal Simpanan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tgl_simpanan', null, ['class' => 'form-control','placeholder'=>'Masukkan Tanggal Simpanan']) !!}
        {!! $errors->first('tgl_simpanan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jml_simpanan') ? 'has-error' : ''}}">
    {!! Form::label('jml_simpanan', 'Jumlah Simpanan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jml_simpanan', null, ['class' => 'form-control','placeholder'=>'Masukkan Jumlah Simpanan']) !!}
        {!! $errors->first('jml_simpanan', '<p class="help-block">:message</p>') !!}
    </div></div>
    
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
