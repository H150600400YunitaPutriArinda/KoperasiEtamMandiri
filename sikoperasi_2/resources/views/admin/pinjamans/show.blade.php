@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">pinjaman {{ $pinjaman->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/pinjamans') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/pinjamans/' . $pinjaman->id . '/edit') }}" title="Edit pinjaman"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/pinjamans' . '/' . $pinjaman->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete pinjaman" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pinjaman->id }}</td>
                                    </tr>
                                    <tr><th> Kd Pinjaman </th><td> {{ $pinjaman->kd_pinjaman }} </td></tr><tr><th> Jangka Waktu Pinjaman </th><td> {{ $pinjaman->jangka_waktu_pinjaman }} </td></tr><tr><th> Tgl Pinjaman </th><td> {{ $pinjaman->tgl_pinjaman }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
