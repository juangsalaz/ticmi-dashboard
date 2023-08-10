<x-new-app-layout>
  <link rel="stylesheet" href="{{ asset('plugins/datatables-select/css/select.bootstrap4.min.css') }}">

  <style>
    .toolbar {
      float: left;
      margin-left: 30px;
      margin-bottom: 20px;
    }

    #example2_length {
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

    #example2_length label select {
      width: auto;
    }

    #example2_wrapper {
      margin-top: 20px;
    }

    #example2 {
      margin-top: 20px;
    }

    #example2_info {
      float: left;
    }

    #example2_paginate {
      float: right;
    }

    #profile-data h5 {
      color: #000;
      font-size: 28px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      margin-bottom: 0;
    }

    #profile-data span {
      color: #252525;
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }

    #profile-sectiion {
      margin-bottom: 20px;
    }

    .label-inv-pelanggan  {
      color: #7BB43F;
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
    }

    .value-in-pelanggan {
      color: #252525;
      font-size: 22px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

    .company-address {
      color: #333;
      font-size: 12px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
    }

  </style>
  <section class="content mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <div class="row" id="profile-sectiion">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-3">
                      <img src="" id="profile_image_value" width="150">
                    </div>
                    <div class="col-md-6" id="profile-data">
                      <h5 id="nama_pelanggan_value"></h5>
                      <span id="email_value"></span><br><p></p>
                      <span>Bergabung: <span id="created_at_value"></span></span><br>
                      <span>User ID: <span id="id_pelanggan_value"></span></span><br>
                      <span>Status: <span id="status_akun_value"></span></span><br>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div style="float: right;">
                    <p>Status Akun:</p>
                    <div style="margin-bottom: 10px;"><button class="btn btn-danger" id="delete_pelanggan_button">DELETE</button> <button class="btn btn-secondary" id="restore_pelanggan_button">This User Deleted</button></div>
                    <div><button class="btn btn-secondary" id="suspend_pelanggan_button">SUSPEND</button> <button class="btn btn-success" id="activate-pelanggan-button">Activate</button></div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div style="margin-bottom: 10px">
                    <button class="btn btn-info" id="lihat-kyc-button">LIHAT KYC</button>
                  </div>
                  <div>
                    <a class="btn btn-success" href="/pelanggan/inbox">KIRIM PESAN</a>
                  </div>
                </div>
              </div>

              <div class="row" style="margin-bottom: 20px; margin-top: 30px;">
                <div class="col-md-6">
                  <h4>DAFTAR TRANSAKSI</h4>
                </div>
              </div>
              <div class="col-md-12" style="background: #ECF4E7;">
                <div class="row p-3">
                  <div class="col-md-4">
                    <input type="text" name="daterange" class="form-control" style="width: 100%;" value="01/01/2023 - 01/15/2023" />
                  </div>
                  <div class="col-md-4">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Produk:</div>
                      </div>
                      <select class="form-control" id="inlineFormInputGroup">
                        <option value="">Semua</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Status Berlangganan:</div>
                      </div>
                      <select class="form-control" id="inlineFormInputGroup">
                        <option value="">Semua</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="select-checkbox"></th>
                  <th>INVOICE</th>
                  <th>TANGGAL ORDER</th>
                  <th>JENIS PEMBAYARAN</th>
                  <th>NAMA PRODUK</th>
                  <th>QTY</th>
                  <th>HARGA SATUAN</th>
                  <th>TOTAL</th>
                  <th>STATUS</th>
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

  <!-- Modal -->
<div class="modal fade" id="kyc-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  <input type="email" class="form-control" id="email">
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
                  <input type="radio" id="pria" name="gender"> Pria
                </div>
                <div class="col-sm-2">
                  <input type="radio" id="wanita" name="gender"> Wanita
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
                <img src="" width="150" id="kyc_photo_profile" class="mt-2">
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
        Are you sure delete this pelanggan?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="delete-confirm-button"><i class="fa fa-trash"></i> Delete</button>
      </div>
    </div>
  </div>
</div>

{{-- Delete Confirmation modal --}}
<div class="modal fade suspend-confirmation-modal" id="suspend-confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Suspend Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="single_suspend_id">
        Are you sure suspend this pelanggan?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-warning" id="suspend-confirm-button">Suspend</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade list-produk-modal" id="list-produk-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">List Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
            </tr>
          </thead>
          <tbody id="data-list-produk">

          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade invoice-modal" id="invoice-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">INVOICE <span id="value-nomor-invoice"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-3">
            <div>
              <label class="label-inv-pelanggan">Pelanggan</label>
              <h4 class="value-in-pelanggan" id="value-nama-pelanggan"></h4>
            </div>
          </div>
          <div class="col-md-3">
            <label class="label-inv-pelanggan">Tanggal Transaksi</label>
            <h4 class="value-in-pelanggan" id="value-tanggal-tagihan"></h4>
          </div>
          <div class="col-md-3">
            <label class="label-inv-pelanggan">Tanggal Jatuh Tempo</label>
            <h4 class="value-in-pelanggan" id="value-jatuh-tempo"></h4>
          </div>
          <div class="col-md-3">
            <label class="label-inv-pelanggan">Metode Pembayaran</label>
            <h4 class="value-in-pelanggan">BNI</h4>
          </div>
        </div>

        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">PRODUK</th>
              <th scope="col">QTY</th>
              <th scope="col">PERIODE LANGGANAN</th>
              <th scope="col">HARGA SATUAN</th>
              <th scope="col">DISKON</th>
              <th scope="col">PAJAK</th>
              <th scope="col">JUMLAH</th>
            </tr>
          </thead>
          <tbody id="list-data-invoice">
          </tbody>
        </table>

        <div class="row">
          <div class="col-md-7">
            <textarea class="form-control" placeholder="Catatan:"></textarea>
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-8"><b>Subtotal</b></div>
              <div class="col-md-4" id="value-sub-total"></div>
            </div>
            <div class="row">
              <div class="col-md-8">Termasuk PPN 11%</div>
              <div class="col-md-4" id="value-ppn"></div>
            </div>
            <div class="row">
              <div class="col-md-8"><b>Jumlah</b></div>
              <div class="col-md-4" id="value-jumlah-dengan-pajak"></div>
            </div>
            <div class="row">
              <div class="col-md-8"><b>DP/ Uang Muka</b></div>
              <div class="col-md-4">-</div>
            </div>
            <div class="row">
              <div class="col-md-8"><b>Total Bayar</b></div>
              <div class="col-md-4" id="value-total-bayar"></div>
            </div>
          </div>
        </div>

        <div class="row" style="margin-top: 20px;">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-4">
                <img src="{{ asset('images/logo-ticmi.png') }}">
              </div>
              <div class="col-md-8" id="company-address">
                <p>PT Indonesian Capital Market Electronic Library
                  Indonesian Stock Exchange Building, Tower II, 1st Floor Jl. Jend. Sudirman Kav. 52-53, Jakarta-12190</p>
                  <br>
                  <span>Telp : 021 515 23 18</span><br>
                  <span>@icamel.co.id</span>
              </div>
            </div>
          </div>

          <div class="col-md-5">
            <p>NPWP TICMI:</p>
            <p>729.832.2500-23</p>
          </div>
          
        </div>
      </div>

      <hr>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Simpan</button>
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
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script src="{{ asset('plugins/datatables-select/js/dataTables.select.min.js') }}" defer></script>
  <script src="{{ asset('plugins/datatables-select/js/select.bootstrap4.min.js') }}" defer></script>

<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
@endsection

@section('custom_js')

  <script>
    var daterange_data = "";
    var search_value = "";
    var product = "";
    let table2 = "";

    function show_delete_confirmation_modal() {
      $("#confirmation-modal").modal('show');
    }

    function show_suspend_confirmation_modal() {
      $("#suspend-confirmation-modal").modal('show');
    }

    function show_list_produk_modal(id_tagihan) {
      let request_produks = $.ajax({
        url: "http://localhost:9005/api/tagihans/"+id_tagihan+"/produks",
        type: "get",
        dataType: "json"
      });
      

      request_produks.done(function (response, textStatus, jqXHR){
        for (let i = 0; i < response.data.length; i++) {
          let no = i+1;
          $("#data-list-produk").append("<tr><td>"+no+"</td><td>"+response.data[i].nama_produk+"</td></tr>");
        }

        $("#list-produk-modal").modal('show');
      });

      $("#list-produk-modal").on('hide.bs.modal', function(){
        $("#data-list-produk").empty();
      });
    }

    function show_invoice_modal(no_invoice) {
      let request_produks = $.ajax({
        url: "http://localhost:9005/api/tagihans/"+no_invoice+"/produks",
        type: "get",
        dataType: "json"
      });

      request_produks.done(function (response, textStatus, jqXHR){
        $("#value-nama-pelanggan").empty();
        $("#value-tanggal-tagihan").empty();
        $("#value-jatuh-tempo").empty();
        $("#list-data-invoice").empty();
        $("#value-sub-total").empty();
        $("#value-ppn").empty();
        $("#value-jumlah-dengan-pajak").empty();
        $("#value-total-bayar").empty();
        $("#value-nomor-invoice").empty();

        $("#value-nomor-invoice").append(response.data[0].nomor_tagihan);
        $("#value-nama-pelanggan").append(response.data[0].nama_pelanggan);
        $("#value-tanggal-tagihan").append(response.data[0].tanggal_tagihan);
        $("#value-jatuh-tempo").append(response.data[0].tanggal_jatuh_tempo);

        for (let i = 0; i < response.data.length; i++) {
          let no = i+1;
          $("#list-data-invoice").append('<tr>'+
                                          '<th scope="row">'+no+'</th>'+
                                          '<td>'+response.data[i].nama_produk+'</td>'+
                                          '<td>'+response.data[i].jumlah+'</td>'+
                                          '<td>1 Tahun</td>'+
                                          '<td>Rp '+response.data[i].harga_satuan+'</td>'+
                                          '<td>'+response.data[i].diskon+'%</td>'+
                                          '<td>'+response.data[i].besar_pajak+'%</td>'+
                                          '<td>Rp '+response.data[i].biaya+'</td>'+
                                        '</tr>');
        }

        $("#value-sub-total").append('Rp '+response.data[0].jumlah_tagihan);

        let jumlah_tagihan = response.data[0].jumlah_tagihan;
        let jumlah_ppn = jumlah_tagihan*11/100;
        let ditambah_ppn = jumlah_tagihan+jumlah_ppn;

        $("#value-ppn").append('Rp '+jumlah_ppn);
        $("#value-jumlah-dengan-pajak").append('Rp '+ditambah_ppn);
        $("#value-total-bayar").append('Rp '+ditambah_ppn);

        $("#invoice-modal").modal('show');
      });

    }
    
    function load_data() {
        table2 = new DataTable('#example2', {
        ajax: {
            url: 'http://localhost:9005/api/pelanggans/{{ $pelanggan_id }}/produks',
            dataSrc: 'data'
        },
        
        columns: [
            {
              defaultContent: '',
              className: 'select-checkbox',
              orderable: false
            },
            { 
              data: 'nomor_tagihan',
              render: function ( data, type, row, meta ) {
                  return '<a href="#" onclick="show_invoice_modal(\'' + data + '\')">'+data+'</a>'
              }
            },
            { data: 'tanggal_tagihan' },
            { 
              data: null,
              render: function ( data, type, row, meta ) {
                  return 'Bank Transfer'
              }
            },
            { 
              data: 'id_tagihan',
              render: function ( data, type, row, meta ) {
                  return '<a href="#" onclick="show_list_produk_modal('+data+')">Lihat Daftar</a>'
              }
            },
            { data: 'jumlah' },
            { data: 'harga_satuan' },
            { data: 'biaya'},
            { data: 'status_tagihan'},
            { 
              data: 'nomor_tagihan',
              render: function ( data, type, row, meta ) {
                return '<a href="#" onclick="show_invoice_modal(\'' + data + '\')" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>'
              }
            }
        ],
        processing: true,
        serverSide: true,
        dom: 'l<"toolbar">rtip',
        select: {
          style: 'os',
          selector: 'td:first-child'
        }
      });

      table2.on("click", "th.select-checkbox", function() {
        if ($("th.select-checkbox").hasClass("selected")) {
          table2.rows().deselect();
          $("th.select-checkbox").removeClass("selected");
        } else {
          table1.rows().select();
          $("th.select-checkbox").addClass("selected");
        }
      }).on("select deselect", function() {
        ("Some selection or deselection going on")
        if (table2.rows({
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

      load_data();
      
        $('input[name="daterange"]').daterangepicker({
          "opens": 'right',
          "autoApply": true,
        }, function(start, end, label) {
          console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });

        request = $.ajax({
          url: "http://localhost:9005/api/pelanggans/{{ $pelanggan_id }}",
          type: "get",
          dataType: "json"
        });

        request.done(function (response, textStatus, jqXHR){
          let created_at = response.data.created_at;
          const convert_date = new Date(created_at);

          const year = convert_date.getFullYear();
          const month = convert_date.getMonth();
          const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
          const date = convert_date.getDate();

          $("#nama_pelanggan_value").append(response.data.nama_pelanggan);
          $("#email_value").append(response.data.email);
          $("#created_at_value").append(date+" "+monthNames[month]+" "+year);
          $("#id_pelanggan_value").append(response.data.id);
          $("#status_akun_value").append(response.data.status_akun);
          $("#profile_image_value").attr("src", "http://localhost:9005/images/"+response.data.profile_photo);
          $("#single_delete_id").val(response.data.id);
          $("#single_suspend_id").val(response.data.id);

          //kyc mapping data
          let kyc_string_json = response.data.kyc;
          const kyc_json_obj = JSON.parse(kyc_string_json);
          console.log(kyc_json_obj.nama);
          $("#nama_lengkap").val(kyc_json_obj.nama);
          $("#username").val(kyc_json_obj.username);
          $("#email").val(kyc_json_obj.email);
          $("#no_hp").val(kyc_json_obj.no_hp);
          $("#tempat_lahir").val(kyc_json_obj.tempat_lahir);
          $("#tanggal_lahir").val(kyc_json_obj.tanggal_lahir);
          $("#alamat1").val(kyc_json_obj.alamat);
          $("#npwp").val(kyc_json_obj.npwp);
          $("#linked_account").val(kyc_json_obj.linkedin);
          $("#password").val("juang123");
          $("#kyc_photo_profile").attr("src", "http://localhost:9005/images/"+kyc_json_obj.photo_profile);
          if (kyc_json_obj.gender == 'L') {
            $("#pria").prop('checked', true);
          } else if (kyc_json_obj.gender == 'P') {
            $("#wanita").prop('checked', true);
          }


          if (response.data.deleted == 1) {
            $("#restore_pelanggan_button").show();
            $("#delete_pelanggan_button").hide();
          } else if (response.data.deleted == 0) {
            $("#restore_pelanggan_button").hide();
            $("#delete_pelanggan_button").show();
          }

          if (response.data.status_akun == 'aktif') {
            $("#suspend_pelanggan_button").show();
            $("#activate-pelanggan-button").hide();
          } else if (response.data.status_akun == 'tidak aktif') {
            $("#suspend_pelanggan_button").hide();
            $("#activate-pelanggan-button").show();
          }
        });

        $("#delete_pelanggan_button").click(function() {
          show_delete_confirmation_modal();
        });

        $("#delete-confirm-button").click(function(){
          const new_array = {};
         
          let deleted_id = $("#single_delete_id").val();
          new_array['ids'] = {id: deleted_id};
          
          request = $.ajax({
              url: "http://localhost:9005/api/pelanggans",
              type: "delete",
              data: new_array,
              dataType: "json"
          });

          request.done(function (response, textStatus, jqXHR){
            $("#delete_pelanggan_button").hide();
            $("#restore_pelanggan_button").show();
            $("#confirmation-modal").modal('hide');
          });

        });

        $("#suspend_pelanggan_button").click(function() {
          show_suspend_confirmation_modal();
        });

        $("#suspend-confirm-button").click(function() {
          const new_array = {};

          let single_suspend_id = $("#single_suspend_id").val();
          new_array['ids'] = {id: single_suspend_id};
          
          request_update = $.ajax({
              url: "http://localhost:9005/api/pelanggans",
              type: "put",
              data: new_array,
              dataType: "json"
          });

          request_update.done(function (response, textStatus, jqXHR){
            $("#suspend-confirmation-modal").modal('hide');
          });
        });

        $("#lihat-kyc-button").click(function() {
          $("#kyc-modal").modal('show');
        });
    });
  </script>
@endsection
</x-new-app-layout>

