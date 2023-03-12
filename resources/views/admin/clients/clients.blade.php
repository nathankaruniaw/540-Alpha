@extends('layouts.navbar')

@section('title', 'Clients')

@section('breadcrumb', 'Clients')

@section('content')
    
    {{-- Panel Clients --}}
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Clients</h5>

            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">

            <div class="container-fluid">

                {{-- Modal --}}
                <div class="row">

                   <a id="buttonModal" class="btn btn-info" data-toggle="modal" data-target="#modal"><i class="icon-plus2"></i>Tambah Clients</a>

                    <!-- Modal -->
                    <div class="modal fade text-left" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="width: 80%;" role="dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="" id="modalLabel">Clients</h5>
                                    <button type="button" id="modalCloseBtn" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="icon-cross"></i>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid">

                                        <div class="row">

                                            <form class="form-horizontal" method="post" id="formInput" enctype="multipart/form-data" action="/admin/clients/insert">
                                                @csrf
                                                <input type="number" class="idClients" name="idClients" value="" hidden>

                                                <div class="col-md-12" id="mainForm">

                                                    <fieldset class="content-group">
                                                        <legend class="text-bold">Data Clients</legend>

                                                        {{-- Nama Clients --}}
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Nama</label>
                                                            <div class="col-lg-10">
                                                                <input name="client_name" id="client_name" type="text" class="form-control" placeholder="Nama Client....">
                                                            </div>
                                                        </div>

                                                        {{-- Foto Clients --}}
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Foto</label>
                                                            <div class="col-lg-10">
                                                                <input type="file" id="pic" name="client_photo" class="form-control-file">
                                                            </div>
                                                        </div>

                                                        <div class="text-right">
                                                            <!-- <button id="buttonSubmit" type="submit" class="btn btn-primary">Add <i class="icon-arrow-right14 position-right"></i></button> -->
                                                            <button type="submit" class="btn btn-primary">Add <i class="icon-arrow-right14 position-right"></i></button>
                                                        </div>

                                                    </fieldset>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Main Table --}}
                <table id="tableClients" class="table table-striped">

                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </thead>

                </table>

            </div>

        </div>
    </div>

@endsection

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    // Edit Data
    function detailClients(id) {
        var id = id;
        window.location = '/admin/clients/edit/' + id;
    }

    //insert Data
    // function insertData(){

    // }
    // $.ajax({
    //         type: 'POST',
    //         url: $(this).attr('action'),
    //         data: formData,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         success: function (data) {
    //             console.log('Succes', data);
    //             $('#modalCloseBtn').click();
    //             Swal.fire({
    //                 title: 'Added',
    //                 icon: 'success',
    //                 timer: 1000,
    //                 timerProgressBar: true,
    //                 position: 'bottom-end',
    //                 showConfirmButton: false,
    //             });
    //             location.reload()
    //         },
    //         error: function (data) {
    //             console.log('Error : ', data);
    //         }
    //     })

    // Delete Data
    function deleteClients(id) {
        console.log(id);
        var id_clients = id;
        Swal.fire({
            title: 'Delete ?',
            icon: 'question',
            timer: 2000,
            timerProgressBar: true,
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: `Delete`,
            denyButtonText: `Don't Delete`,
        }).then((result) => {
            if (result.isConfirmed) {
                var id = id_clients;

                $.ajax({
                    type: "post",
                    url: "/admin/clients/delete",
                    data: {
                        id: id
                    },
                    success: function (data) {
                        Swal.fire({
                            title: 'Deleted',
                            icon: 'success',
                            timer: 1000,
                            timerProgressBar: true,
                            position: 'bottom-end',
                            showConfirmButton: false,
                        });
                        setTimeout(reload, 1000)
                        function reload(){
                            location.reload();    
                        }
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            } else if (result.isDenied) {
                Swal.fire('Canceled', '', 'info')
            }
        });
    }
</script>

@section('javascript')

    <script src="/js/pages/client.js"></script>

@endsection
