@extends('layouts.app')

@section('title','Contact')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            
                        </div>
                        <div class="card-content">
                           <div class="row">
                               <div class="col-md-12">
                                   <strong>Makanan {{ $items->name }}</strong><br>
                                   <b>Jumlah {{ $items->stock }}</b> 
                                   <b>Harga Satuan {{ $items->price }}</b>
                                   <br>
                                

                                  <h3>Jumlah Harga {{$items->jumlah}}</h3>

                               </div>
                           </div>
                            <a href="{{ route('transaksi.index') }}" class="btn btn-danger">Back</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush