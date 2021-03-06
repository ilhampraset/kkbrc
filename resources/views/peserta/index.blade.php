@extends('layouts.dashboard')


@section('content')


 <div class="x_panel">
        <div class="x_title">
            <h2>
                <a href="">
                    <i class="fa fa-home"></i>
                </a>
                <a href="">
                    Data Peserta
                </a>
            </h2>
            <ul class="nav navbar-right panel_toolbox">

                    <li>

                        {{-- <button type="button" id="btn-tambah" onclick='add()' class="btn btn-primary">Tambah</button> --}}

                    </li>

                </ul>
                <div class="clearfix"></div>
        </div>
                <div class="x_content">
                    <table id="tabel-data" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid" aria-describedby="tabel-data_info">
                        <thead>
                         <tr role="row">
                            <th class="sorting_disabled" rowspan="1" colspan="1">No</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 298px;">Nama</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 298px;">Email</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 298px;">Represent</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 298px;">Coffeshop</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 298px;">Phone</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 298px;">Domicile</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 298px;">Picture</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 298px;">Status</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 298px;">Tgl. Daftar</th>

                             <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 216px;">Action</th>
                         </tr>
                        </thead>
                    </table>


                </div>
            </div>
             @include('peserta.modal')


@endsection

@section('js')
<script src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<script>


var table, save_method;
$(function(){
table = $('.table').DataTable({
     "processing" : true,
     "iDisplayLength": 50,
     "ajax" : {
       "url" : "{{ url('pesertadata') }}",
       "type" : "GET"
     }
   });

    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

  $('#form-tambah').on('submit', function(e){
       if(!e.isDefaultPrevented()){

        var id = $('#id').val();

         if(save_method == "add") url = "{{url('peserta')}}";
         else url = "peserta/"+id;

         $.ajax({
            url : url,
            type : "POST",
            data : $('#form-tambah').serialize(),
            dataType: 'JSON',

           success : function(data){


               if((data.message)){

               $('body').css('padding-right','0');
                $('#modal-tambah').modal('hide');
                swal('Good job!','Berhasil Menyimpan Data','success');

                 table.ajax.reload();

               }
               else{
                    $.each( data, function( key, value ) {
                        $('[name="'+key+'"]').parent().parent().addClass('has-error');
                        $('[name="'+key+'"]').next().text(value);
                    });
                    swal('Oops...','Gagal Menyimpan!','error');
                }
           }

         });
         return false;
     }
  });

});

// function add()
// {
//     save_method = 'add';
//     $('input[name=_method]').val('POST');
//     $('.form-group').removeClass('has-error');
//     $('#form-tambah')[0].reset();
//     $('.help-block').empty();
//     $('#modal-tambah').modal('show');
// }

function edit(id){
   save_method = "edit";
   $('input[name=_method]').val('PATCH');
   //$('#form-tambah')[0].reset();
   $('.form-group').removeClass('has-error');
   $('.help-block').empty();
   $.ajax({
     url : "peserta/"+id+"/edit",
     type : "GET",
     dataType : "JSON",
     success : function(data){
       $('#modal-tambah').modal('show');
       $('.modal-title').text('Edit Data');

       $('#id').val(data.id);
       $('#nama').val(data.nama);
       $('#email').val(data.email);
       $('#represent').val(data.represent);
       $('#coffeeshop').val(data.coffeeshop);
       $('#phone').val(data.phoneNumber);
       $('#domicile').val(data.domicile);
       $('#picture').val(data.picture);
       $('#status').val(data.status);

     },
     error : function(){
       swal('Oops...','Gagal Menampilkan Data!','error');
     }
   });




}

function delete_merk(id)
{

    swal({
        title: 'Are you sure?',
        text: "Sure delete this data? (To recover deleted data, please contact our developer)",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel please!",

        })
        .then(result => {
    if (result.value) {

            $.ajax({
                url : "peserta/"+id,
                type: "POST",
                data : {'_method' : 'DELETE', '_token' : $('meta[name=csrf-token]').attr('content')},
                success: function(data)
                {
                    table.ajax.reload();
                    swal('Good job!','Berhasil Mengapus Data','success');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    swal('Oops...','Gagal Menghapus Data!','error');
                }
            });
    }
});

}


</script>
@endsection
