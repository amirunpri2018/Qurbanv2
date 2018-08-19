@extends('layouts.app')

@section('title',"Input Data Qurban")
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Data Qurban </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{route('input.qurban')}}" class="form-horizontal" method="post">
                        @csrf
                        <div class="form-body">
                            <h4>Informasi Pengurban</h4>
                            <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Nama</label>
                                <div class="col-md-4">
                                    <input type="text" name="nama" class="form-control input-circle" placeholder="Masukkan Nama Pengurban">
                                    @if ($errors->has('nama'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('RT') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">RT</label>
                                <div class="col-md-4">
                                    <select name="RT" id="RT" class="form-control input-circle">
                                        <option value="null">-- Pilih RT --</option>
                                        @for ($i = 1; $i <= 15; $i++)
                                            <option value="{{ sprintf("%03s", $i) }}">{{ sprintf("%03s", $i) }}</option>
                                        @endfor
                                    </select>
                                    @if ($errors->has('RT'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('RT') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('RW') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">RW</label>
                                <div class="col-md-4">
                                    <select name="RW" id="RW" class="form-control input-circle">
                                        <option value="null">-- Pilih RW --</option>
                                        @for ($i = 1; $i <= 15; $i++)
                                            <option value="{{ sprintf("%02s", $i) }}">{{ sprintf("%02s", $i) }}</option>
                                        @endfor
                                    </select>
                                    @if ($errors->has('RW'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('RW') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('nohp') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">No. HP</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-circle" name="nohp" placeholder="No. HP">
                                    @if ($errors->has('nohp'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nohp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <h4>Informasi Qurban</h4>
                            <div class="form-group {{ $errors->has('jenisHewan') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Jenis Hewan</label>
                                <div class="col-md-4">
                                    <select name="jenisHewan" id="jenisHewan" class="form-control input-circle">
                                        <option value="null">-- Pilih Jenis Hewan --</option>
                                        <option value="sapi">Sapi</option>
                                        <option value="kambing">Kambing</option>
                                        <option value="kerbau">Kerbau</option>
                                    </select>
                                    @if ($errors->has('jenisHewan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jenisHewan') }}</strong>
                                        </span>
                                    @endif
                                    <span class="help-block"> Jika qurban berupa hewan kambing maka jenis pemberian dan jumlah uang tidak diisi. </span>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('jenisPemberian') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Jenis Pemberian</label>
                                <div class="col-md-4">
                                    <select name="jenisPemberian" id="jenisPemberian" class="form-control input-circle">
                                        <option value="null">-- Pilih Jenis Pemberian --</option>
                                        <option value="Uang">Uang</option>
                                        <option value="Hewan">Hewan</option>
                                    </select>
                                    @if ($errors->has('jenisPemberian'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jenisPemberian') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('jumlah') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Jumlah Uang</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon input-circle-left" id="sizing-addon1">Rp.</span>
                                        <input type="text" name="jumlah" id="jumlah" value="0" class="form-control input-circle-right only-num" aria-describedby="sizing-addon1" placeholder="Jumlah Uang">
                                        @if ($errors->has('jumlah'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jumlah') }}</strong>
                                        </span>
                                        @endif
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