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
                                <th class="text-center">#</th>
                                <th class="text-center">Nama Pelanggan</th>
                                <th class="text-center">E-mail</th>
                                <th class="text-center">Nomor HP</th>
                                <th class="text-center">Alamat</th>
                            </thead>
                            <tbody>
                                @forelse ($user as $u)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="text-center">{{$u->nama}}</td>
                                        <td class="text-center">{{$u->email}}</td>
                                        <td class="text-center">{{$u->nohp}}</td>
                                        <td class="text-left">{{Str::limit($u->alamat, 20)}}</td>
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