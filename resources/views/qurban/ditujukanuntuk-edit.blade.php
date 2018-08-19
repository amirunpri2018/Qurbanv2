@extends('layouts.app')

@section('title',"Edit Data Ditujukan Untuk")
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Data Ditujukan Untuk </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{route('update.ditujukanuntuk', $ditujukan)}}" class="form-horizontal" method="post">
                        {{  method_field('PATCH') }}
                        @csrf
                        <div class="form-body">
                            <h4>Informasi Nama Ditujukan Untuk</h4>
                            <div class="form-group {{ $errors->has('pengurban_id') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Nama Pengurban</label>
                                <div class="col-md-4">
                                    <select name="pengurban_id" id="RT" class="form-control">
                                        <option value="null">-- Pilih Pengurban --</option>
                                        @foreach ($pengurban as $p)
                                            <option value="{{ $p->id }}"
                                                    @if($ditujukan->pengurban->id == $p->id)
                                                    selected
                                                    @endif
                                            >{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('RT'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pengurban_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Nama</label>
                                <div class="col-md-4">
                                    <input type="text" name="nama" class="form-control input-circle" value="{{$ditujukan->nama}}">
                                    @if ($errors->has('nama'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
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
                $('#RT').select2();
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