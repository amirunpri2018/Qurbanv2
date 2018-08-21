@extends('layouts.app')

@section('title',"Input Data Daging")
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Data Daging </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{route('input.daging')}}" class="form-horizontal" method="post">
                        @csrf
                        <div class="form-body">
                            <h4>Informasi Daging</h4>
                            <div class="form-group {{ $errors->has('jenis_daging_id') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Jenis Daging</label>
                                <div class="col-md-4">
                                    <select name="jenis_daging_id" id="RT" class="form-control input-circle">
                                        <option value="null">-- Pilih Jenis Daging --</option>
                                        @foreach ($jenis as $j)
                                            <option value="{{ $j->id }}">{{ $j->nama }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('RT'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jenis_daging_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('jumlah') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Jumlah</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="text" name="jumlah" class="form-control input-circle-left only-num" placeholder="Masukkan Jumlah Daging">
                                        @if ($errors->has('jumlah'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jumlah') }}</strong>
                                        </span>
                                        @endif
                                        <span class="input-group-addon" id="sizing-addon1">Bungkus</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-circle green">Simpan</button>
                                    <button type="reset" class="btn btn-circle grey-salsa btn-outline">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                // $('#RT').select2();
            })
            $('#jenisHewan').change(function () {
                var jenis = $(this).val();
                if (jenis == 'kambing'){
                    $('#jenisPemberian').val('Hewan');
                    // $("#jumlah").prop('disabled', true);
                    // $("#jenisPemberian").prop('disabled', true);
                    $('#jumlah').val(0);
                } else if (jenis != 'kambing'){
                    // $("#jumlah").prop('disabled', false);
                    // $("#jenisPemberian").prop('disabled', false);
                    $('#jenisPemberian').val('null');
                }
            })
        </script>
@endsection