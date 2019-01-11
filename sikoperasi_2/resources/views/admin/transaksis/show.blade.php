@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">transaksi {{ $transaksi->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/transaksis') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/transaksis/' . $transaksi->id . '/edit') }}" title="Edit transaksi"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/transaksis' . '/' . $transaksi->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete transaksi" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $transaksi->id }}</td>
                                    </tr>
                                    <tr><th> Kd Transaksi </th><td> {{ $transaksi->kd_transaksi }} </td></tr><tr><th> Jenis Pembayaran </th><td> {{ $transaksi->jenis_pembayaran }} </td></tr><tr><th> Tgl Pembayaran </th><td> {{ $transaksi->tgl_pembayaran }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
