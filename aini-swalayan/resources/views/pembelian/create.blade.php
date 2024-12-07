@extends('admin')

@section('content')
<div class="nk-content">
    <form action="{{ route('savebeli') }}" class="" method="POST">
        @csrf
        <h4 style="text-align: center">Pembelian</h4>
        <div class="row" style="margin-top:20px">
            <div class="col-md-6">
                <div class="form-group row align-items-center">
                    <label class="form-label col-md-3 label-form" for="no_faktur">No. Faktur</label>
                    <div class="form-control-wrap col-md-9">
                        <input type="text" class="form-control" id="no_faktur" name="no_faktur" placeholder="No. Faktur" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="nk-block-head">
                    <div class="form-group row align-items-center">
                        <label class="form-label col-md-3 label-form" for="supplier_id">Supplier</label>
                        <div class="form-control-wrap col-md-9">
                            <select class="form-select form-control form-control-lg" id="supplier_id" name="supplier_id" data-search="on" data-placeholder="Pilih Supplier" required>
                                <option label="empty" value=""></option>
                                @foreach ($suppliers as $key => $item)
                                    <option value="{{ $item['id'] }}">{{ $item['nama_supplier'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:20px">
            <div class="col-md-6">
                <div class="form-group row align-items-center">
                    <label class="form-label col-md-3 label-form" for="tanggal">Tanggal </label>
                    <div class="form-control-wrap col-md-9">
                        <div class="form-icon form-icon-left">
                            <em class="icon ni ni-calendar"></em>
                        </div>
                        <input type="text" class="form-control date-picker" id="tanggal" name="tanggal" data-date-format="dd MM yyyy" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:40px">
            <div class="col-md-6">
                <a href="#"class="btn btn-md btn-primary"><em class="icon ni ni-plus"></em>Produk</span></a>
                <button type="reset" class="btn btn-md btn-secondary" style="margin: 0 10px"><em class="icon ni ni-reload"></em><span>Reset</span></button>
                <button type="submit" class="btn btn-md btn-success"><em class="icon ni ni-check-thick"></em><span>Simpan</span></button>
            </div>
            <div class="col-md-6 align-items-lg-end">
                <label id="total-akhir" style="width:100%;font-size: 30px; text-align:right">0,00</label>
            </div>
        </div>

        <div class="row" style="margin-top:20px">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Margin</th>
                            <th>Harga Jual</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>
@endsection
