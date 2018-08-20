@extends('layouts.app')

@section('title',"Daftar Kupon")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase">Daftar Kupon</span>
                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="kupon">
                        <thead>
                        <tr>
                            <th class="all">ID Kupon</th>
                            <th class="all">Nama</th>
                            <th class="min-phone-l">RT</th>
                            <th class="min-tablet">RW</th>
                            <th >Jenis Kupon</th>
                            <th class="desktop">Status Pengambilan</th>
                            {{--<th class="all">Aksi.</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        var TableDatatablesResponsive = function () {

            var initTable1 = function () {
                var table = $('#kupon');

                var oTable = table.dataTable({
                    // Internationalisation. For more info refer to http://datatables.net/manual/i18n
                    processing: true,
                    serverSide: true,
                    "language": {
                        "aria": {
                            "sortAscending": ": activate to sort column ascending",
                            "sortDescending": ": activate to sort column descending"
                        },
                        "emptyTable": "Tidak Ada Data Dalam Tabel",
                        "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                        "infoEmpty": "No entries found",
                        "infoFiltered": "(filtered1 from _MAX_ total entries)",
                        "lengthMenu": "_MENU_ Data",
                        "search": "Cari:",
                        "zeroRecords": "Data Tidak Ada"
                    },

                    // Or you can use remote translation file
                    //"language": {
                    //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
                    //},

                    // setup buttons extentension: http://datatables.net/extensions/buttons/
                    buttons: [
                        { extend: 'print', className: 'btn dark btn-outline' },
                        { extend: 'pdf', className: 'btn green btn-outline' },
                        { extend: 'csv', className: 'btn purple btn-outline ' }
                    ],
                    ajax: {
                        url: '{{ url("/kupon-list") }}'
                    },columns: [
                        {data: 'idKupon', name: 'kupons.idkupon'},
                        {data: 'nama', name: 'pengurbans.nama', name: 'penerima_dagings.nama'},
                        {data: 'rt', name: 'pengurbans.rt', name: 'penerima_dagings.rt'},
                        {data: 'rw', name: 'pengurbans.rw', name: 'penerima_dagings.rw'},
                        {data: 'jenisKupon', name: 'jenisKupon'},
                        {data: 'isKembali', name: 'isKembali', render : function(data) {
                                if (data == 0){
                                    return '<span class="label label-sm label-danger">Belum Diambil</span>';
                                } else  if (data == 1){
                                    return '<span class="label label-sm label-success">Sudah Diambil</span>';
                                }

                            }},
                        // {data: 'action', name: 'action', orderable: false, searchable: false, exportable: false},
                    ],

                    // setup responsive extension: http://datatables.net/extensions/responsive/
                    responsive: {
                        details: {

                        }
                    },

                    "order": [
                        [0, 'asc']
                    ],

                    "lengthMenu": [
                        [5, 10, 15, 20, -1],
                        [5, 10, 15, 20, "All"] // change per page values here
                    ],
                    // set the initial value
                    "pageLength": 10,

                    "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

                    // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                    // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
                    // So when dropdowns used the scrollable div should be removed.
                    //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                });
            }

            return {

                //main function to initiate the module
                init: function () {

                    if (!jQuery().dataTable) {
                        return;
                    }

                    initTable1();
                }

            };

        }();

        jQuery(document).ready(function() {
            TableDatatablesResponsive.init();
        });
    </script>
@endsection