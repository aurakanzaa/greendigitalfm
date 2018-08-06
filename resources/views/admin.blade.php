@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Payments Verification</div>

                 <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID Pembelian</th>
                                    <th>Alamt Kirim</th>
                                    <th>File Invoice</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            @foreach($datapembelian as $data)
                            <tbody>
                                <td> {{$data->ID_PEMBELIAN}} </td>
                                <td> {{$data->ALAMAT_KIRIM}} </td>
                                <td> <img src="storage/images/{{$data->FILE_INVOICE}}" width="300px" height="550px"> </td>
                                @if($data->STATUS_KIRIM == 0)
                                <td> <a href="{{route('update.status', ['id_pembelian' => $data->ID_PEMBELIAN])}}"> Verify </a> </td>
                                @else
                                <td> <p> Verified </p> </td>
                                @endif
                            </tbody>
                            @endforeach
                        </table>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
