@extends('layouts.app')

@section('title','Create')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add New Item</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('transaksi.create') }}" enctype="multipart/form-data">
                                @csrf
                               <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nama Makanan</label>
                                            <select class="form-control" name="item_id">
                                                @foreach($items as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Jumlah</label>
                                            <input type="number" class="form-control" name="jumlah">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Buy</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush