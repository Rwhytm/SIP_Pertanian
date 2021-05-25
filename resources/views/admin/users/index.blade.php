@extends('admin.layout')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-">
                        <h2>DAFTAR PELANGGAN</h2>
                    </div>
                    <div class="col-md-11">
                     </div>
                    <div class="card-body ">
                        <table class="table table-boardered table-striped">
                            <thead>
                                <th>#</th>
                                <th>Nama Pelanggan</th>
                                <th>E-mail</th>
                                <th>Nomor HP</th>
                                <th>Alamat</th>
                            </thead>
                            <tbody>
                                @forelse ($user as $u)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$u->nama}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>{{$u->nomor_hp}}</td>
                                        <td>{{$u->alamat}}</td>
                                        <td></td>
                                    </tr>
                                @empty
                                    <td colspan="5">Tidak Ada Data</td>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $user->links() }}
                        <div class="table-footer text-right">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection