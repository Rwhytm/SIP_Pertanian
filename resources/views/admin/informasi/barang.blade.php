@extends('admin.layout')
@section('content')
<div class="row d-flex justify-content-center p-3">
    <div class="col-sm-12 col-lg-6 col-xl-4">
        <div class="card card-table-border-none" data-scroll-height="580">
            <div class="card-header justify-content-between">
                <h2 class="d-inline-block">Barang Terbaru</h2>
            </div>
            <div class="card-body pt-0">
                <table class="table ">
                    @foreach ($barang as $b)
                    <tbody>
                        <tr>
                            <td >
                                <div class="media">
                                    <div class="media-body align-self-center">
                                        <a href="profile.html">
                                            <h6 class="mt-0 text-dark font-weight-medium">{{ $b->nama_produk }}</h6>
                                        </a>
                                        <small>{{ $b->harga }}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">{{ $b->jumlah }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
    @endsection