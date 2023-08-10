<x-new-app-layout>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" href="{{ asset('plugins/datatables-select/css/select.bootstrap4.min.css') }}">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


  <style>
    .toolbar {
      float: left;
      margin-left: 30px;
      margin-bottom: 20px;
    }

    #example1_length {
      float: left;
    }

    #search-table-wrap {
      float: left;
    }

    #button-saerch-wrap {
      float: left;
    }

    #search-table-input {
      width: 300px;
      margin-right: 10px;
    }

    .card {
      margin-top: 20px;
    }

    #example1_length label select {
      width: auto;
    }

    #example1_wrapper {
      margin-top: 20px;
    }

    #example1 {
      margin-top: 20px;
    }

    #example1_info {
      float: left;
    }

    #example1_paginate {
      float: right;
    }

    table.dataTable tr th.select-checkbox.selected::after {
      content: "✔";
      margin-top: -11px;
      margin-left: -4px;
      text-align: center;
      text-shadow: rgb(176, 190, 217) 1px 1px, rgb(176, 190, 217) -1px -1px, rgb(176, 190, 217) 1px -1px, rgb(176, 190, 217) -1px 1px;
    }

    .bottom-action-wrap {
      position: absolute;
      bottom: 70px;
      padding: 15px;
      background: white;
    }
  </style>
  <section class="content mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-6">
                  <h4>DAFTAR PELANGGAN</h4>
                </div>
                <div class="col-md-6" style="text-align: right;">
                  <button class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">CREATE PELANGGAN</button>
                </div>
              </div>
              <div class="col-md-12" style="background: #ECF4E7;">
                <div class="row p-3">
                  <div class="col-md-3">
                    <input type="text" name="daterange" id="daterange" class="form-control" style="width: 100%;" value="01/01/2023 - 12/01/2023" />
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Produk:</div>
                      </div>
                      <select class="form-control" id="inlineFormInputGroup">
                        <option value="">All</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-success" id="filter-button">Filter</button>
                  </div>
                </div>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="select-checkbox"></th>
                  <th>TANGGAL BERGABUNG</th>
                  <th>PELANGGAN</th>
                  <th>TIPE PELANGGAN</th>
                  <th>STATUS BERLANGGANAN</th>
                  <th>STATUS AKUN</th>
                  <th>AKSI</th>
                </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="bottom-action-wrap col-md-12">
    <div class="row">
      <div class="col-md-2">
        <select class="form-control" id="bulk-action-option">
          <option value="delete">Delete</option>
          <option value="update_status">Aktif / Non Aktif Status Akun</option>
        </select>
      </div>
      <div class="col-md-10">
        <button type="button" class="btn btn-success" id="bulk-action-button">Apply</button>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">KYC PELANGGAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group row">
                <label for="nama_lengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama_lengkap">
                </div>
              </div>
              <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="username">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="inputEmail3">
                </div>
              </div>
              <div class="form-group row">
                <label for="no_hp" class="col-sm-4 col-form-label">No Hp</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="no_hp">
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-2">
                  <input type="radio" id="gender" name="gender"> Pria
                </div>
                <div class="col-sm-2">
                  <input type="radio" id="gender" name="gender"> Wanita
                </div>
              </div>
              <div class="form-group row">
                <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="tempat_lahir">
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="tanggal_lahir">
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat1" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="alamat1">
                  <input type="text" class="form-control mt-3" id="alamat2">
                </div>
              </div>
              <div class="form-group row">
                <label for="npwp" class="col-sm-4 col-form-label">NPWP</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="npwp">
                </div>
              </div>
              <div class="form-group row">
                <label for="linked_account" class="col-sm-4 col-form-label">Linked Account</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="linked_account">
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="linked_account2">
                </div>
              </div>
              <div class="form-group row">
                <label for="tipe_akun" class="col-sm-4 col-form-label">Tipe Akun</label>
                <div class="col-sm-8">
                  <select class="form-control" id="tipe_akun">
                    <option value="">Perorangan</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="password">
                  <button class="btn btn-secondary mt-2">RESET PASSWORD</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="foto-profil">Foto Profil</label>
                <input type="file" class="form-control" id="foto-profil">
              </div>

              <div class="form-group">
                <label for="foto-ktp">Foto KTP</label>
                <input type="file" class="form-control" id="foto-ktp">
              </div>

              <div class="form-group">
                <label for="foto-npwp">Foto NPWP</label>
                <input type="file" class="form-control" id="foto-npwp">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>

{{-- Delete Confirmation modal --}}
<div class="modal fade confirmation-modal" id="confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="single_delete_id">
        Are you sure delete this row(s) data?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="delete-confirm-button"><i class="fa fa-trash"></i> Delete</button>
      </div>
    </div>
  </div>
</div>

{{-- Update Status Confirmation modal --}}
<div class="modal fade confirmation-update-modal" id="confirmation-update-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Status Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="single_delete_id">
        Are you sure update this row(s) status akun?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-warning" id="update-status-confirm-button">Update</button>
      </div>
    </div>
  </div>
</div>

  @section('js')
  <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

  

  {{-- date range picker --}}
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  

  <script src="{{ asset('plugins/datatables-select/js/dataTables.select.min.js') }}" defer></script>
  <script src="{{ asset('plugins/datatables-select/js/select.bootstrap4.min.js') }}" defer></script>

  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
 
  <!-- AdminLTE for demo purposes -->

  @endsection

  @section('custom_js')

    <script>
        var daterange_data = "";
        var search_value = "";
        var product = "";
        let table1 = "";

        function search_table() {
          search_value = $("#search-table-input").val();
          $("#example1").DataTable().destroy();
          load_data(daterange_data, product, search_value)
        }

        function show_update_confirmation_modal() {
          $("#confirmation-update-modal").modal("show");
        }

        function show_delete_confirmation_modal(id) {
          $("#single_delete_id").val(id);
          $("#confirmation-modal").modal('show');
        }

        function load_data(date = "", product = "", search_value = "") {
            table1 = new DataTable('#example1', {
            ajax: {
                url: 'http://localhost:9005/api/pelanggans?date='+date+'&product='+product+'&search_value='+search_value,
                dataSrc: 'data'
            },
            
            columns: [
                {
                  defaultContent: '',
                  className: 'select-checkbox',
                  orderable: false
                },
                { data: 'created_at' },
                { data: 'nama_pelanggan' },
                { data: 'status_pelanggan' },
                { 
                  data: null,
                  render: function ( data, type, row, meta ) {
                      return '<span class="badge bg-success">Aktif</span>';
                  }
                },
                { 
                  data: 'status_akun',
                  render: function ( data, type, row, meta ) {
                    return data ==  'aktif' ? '<input type="checkbox" checked class="checkbox-toggle">' : '<input type="checkbox" class="checkbox-toggle">';
                  }
                },
                { 
                  data: 'id',
                  render: function ( data, type, row, meta ) {
                    return '<a href="/pelanggan/inbox" class="btn btn-primary btn-xs"><i class="fa fa-paper-plane"></i></a> <a class="btn btn-warning btn-xs" href="pelanggan/profile/'+data+'"><i class="fa fa-pencil-alt"></i></a> <button class="btn btn-danger btn-xs" onclick="show_delete_confirmation_modal('+data+')"><i class="fa fa-trash"></i></button>'
                  }
                }
            ],
            processing: true,
            serverSide: true,
            dom: 'l<"toolbar">rtip',
            select: {
              style: 'os',
              selector: 'td:first-child'
            },
            drawCallback: function( settings ) {
              $('.checkbox-toggle').bootstrapToggle({
                on: 'Aktif',
                off: 'Tidak Aktif'
              });
            }
          });

          table1.on("click", "th.select-checkbox", function() {
            if ($("th.select-checkbox").hasClass("selected")) {
              table1.rows().deselect();
              $("th.select-checkbox").removeClass("selected");
            } else {
              table1.rows().select();
              $("th.select-checkbox").addClass("selected");
            }
          }).on("select deselect", function() {
            ("Some selection or deselection going on")
            if (table1.rows({
                    selected: true
                }).count() !== table1.rows().count()) {
                $("th.select-checkbox").removeClass("selected");
            } else {
                $("th.select-checkbox").addClass("selected");
            }
          });
          
          document.querySelector('div.toolbar').innerHTML = '<div id="search-table-wrap"><input type="text" id="search-table-input" class="form-control" placeholder="No Invoice / Nama Pelanggan"></div> <div id="button-saerch-wrap"><button class="btn btn-success" id="button-cari" onclick="search_table()"><i class="fa fa-search"></i> Cari</button></div>';
          $("#search-table-input").val(search_value);
        }

      $(document).ready(function(){
        let request;
        let request_update;


        load_data(daterange_data, product, search_value);

        $("#delete-confirm-button").click(function(){
          let deleted_data = table1.rows({ selected: true }).data();
          const new_array = {};

          if (table1.rows( '.selected' ).any()) {
            const ids = {};
            for (let i = 0; i < deleted_data.length; i++) {
              ids[i] = {'id' : deleted_data[i].id};
            }
            new_array['ids'] = ids;
          } else {
            let deleted_id = $("#single_delete_id").val();
            new_array['ids'] = {id: deleted_id};
          }
          
          request = $.ajax({
              url: "http://localhost:9005/api/pelanggans",
              type: "delete",
              data: new_array,
              dataType: "json"
          });

          request.done(function (response, textStatus, jqXHR){
            table1.destroy();
            load_data(daterange_data, product, search_value)
            $("#confirmation-modal").modal('hide');
          });

        });

        $("#update-status-confirm-button").click(function(){
          let updated_data = table1.rows({ selected: true }).data();
          const new_array = {};

          if (table1.rows( '.selected' ).any()) {
            const ids = {};
            for (let i = 0; i < updated_data.length; i++) {
              ids[i] = {'id' : updated_data[i].id};
            }
            new_array['ids'] = ids;
          } else {
            let deleted_id = $("#single_delete_id").val();
            new_array['ids'] = {id: deleted_id};
          }
          
          request_update = $.ajax({
              url: "http://localhost:9005/api/pelanggans",
              type: "put",
              data: new_array,
              dataType: "json"
          });

          request_update.done(function (response, textStatus, jqXHR){
            table1.destroy();
            load_data(daterange_data, product, search_value)
            $("#confirmation-update-modal").modal('hide');
          });

        });

        $("#bulk-action-button").click(function(){
          
          var selected_rows = table1.rows({selected: true}).count();
            if (selected_rows != 0) {
              let bulk_action = $("#bulk-action-option").val();
              if (bulk_action == 'delete') {
                  //open a delete confirmation modal
                  show_delete_confirmation_modal();
                
              } else if (bulk_action == 'update_status') {
                //open a update status confirmation modal
                show_update_confirmation_modal();
              }
            } else {
              alert("There is no row(s) selected");
            }
        });

        $("#filter-button").click(function(){
          daterange_data = $("#daterange").val();
          $("#example1").DataTable().destroy();
          load_data(daterange_data, product, search_value)
        });

        $('input[name="daterange"]').daterangepicker({
          "opens": 'right',
          "autoApply": true,
        });

      });

    </script>
  @endsection
</x-new-app-layout>