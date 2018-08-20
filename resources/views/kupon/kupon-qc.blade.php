@extends('layouts.app')

@section('title',"Quick Count Kupon")
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Quick Count Kupon </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                        <div class="form-body">
                            <h4>Cari Data Kupon</h4>
                            <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">ID Kupon</label>
                                <div class="col-md-4">
                                    <input type="text" id="idkupon" class="form-control input-circle" placeholder="Masukkan ID Kupon">
                                </div>
                            </div>
                        </div>
                    <!-- END FORM-->
                    <div class="table-scrollable">
                        <table class="table table-hover" id="table-hasil">
                            <thead>
                                <tr>
                                    <th> ID Kupon </th>
                                    <th> Nama </th>
                                    <th> RT </th>
                                    <th> RW </th>
                                </tr>
                            </thead>
                            <tbody id="list-hasil">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#table-hasil').hide();
                $( "#idkupon" ).keyup(function() {
                    $('#table-hasil').show();
                    @if($jenis=='sapi')
                        var id = 'B'+$( this ).val();
                            @elseif($jenis=='kambing')
                                var id = 'M'+$( this ).val();
                            @elseif($jenis=='warga')
                                var id = 'P'+$( this ).val();
                        @endif
                    $.ajax({
                        type:"GET",
                        url:"{{url('kupon-search')}}/"+id+"",
                        success: function(data) {
                            $('#list-hasil').html(data);
                        }
                    });
                    if ($(this).val() == ''){
                        $('#table-hasil').hide();
                    }
                });
                $('#idkupon').keypress(function(e){
                    if(e.keyCode == 13)
                    {
                                @if($jenis=='sapi')
                        var id = 'B'+$( this ).val();
                                @elseif($jenis=='kambing')
                        var id = 'M'+$( this ).val();
                                @elseif($jenis=='warga')
                        var id = 'P'+$( this ).val();
                                @endif
                        $.ajax({
                            type:"GET",
                            url:"{{url('kupon-updatestatus')}}/"+id+"",
                            success: function(data) {
                                $('#list-hasil').html(data);
                            }
                        });
                    }
                });
            });
        </script>
@endsection