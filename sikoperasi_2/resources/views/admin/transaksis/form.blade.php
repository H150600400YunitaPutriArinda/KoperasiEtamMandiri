<div class="form-group {{ $errors->has('kd_transaksi') ? 'has-error' : ''}}">
    {!! Form::label('kd_transaksi', 'Kode Transaksi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kd_transaksi', null, ['class' => 'form-control','placeholder'=>'Masukkan Kode Transaksi']) !!}
        {!! $errors->first('kd_transaksi', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jenis_pembayaran') ? 'has-error' : ''}}">
    {!! Form::label('jenis_pembayaran', 'Jenis Pembayaran', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jenis_pembayaran', null, ['class' => 'form-control','placeholder'=>'Masukkan Jenis Pembayaran']) !!}
        {!! $errors->first('jenis_pembayaran', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tgl_pembayaran') ? 'has-error' : ''}}">
    {!! Form::label('tgl_pembayaran', 'Tanggal Pembayaran', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tgl_pembayaran', null, ['class' => 'form-control','placeholder'=>'Masukkan Tanggal Pembayaran']) !!}
        {!! $errors->first('tgl_pembayaran', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jml_pembayaran_dan_bunga_pinjaman') ? 'has-error' : ''}}">
    {!! Form::label('jml_pembayaran_dan_bunga_pinjaman', 'Jumlah Pembayaran Dan Bunga Pinjaman', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jml_pembayaran_dan_bunga_pinjaman', null, ['class' => 'form-control','placeholder'=>'Masukkan Jumlah Pembayaran Dan Bunga Pinjaman']) !!}
        {!! $errors->first('jml_pembayaran_dan_bunga_pinjaman', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('id_anggota') ? 'has-error' : ''}}">
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
</div> <div class="form-group {{ $errors->has('id_ket_koperasi') ? 'has-error' : ''}}">
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
</div><div class="form-group {{ $errors->has('kd_pinjaman') ? 'has-error' : ''}}">
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
    </div>
</div><div class="form-group {{ $errors->has('kd_simpanan') ? 'has-error' : ''}}">
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
    </div>
    
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
