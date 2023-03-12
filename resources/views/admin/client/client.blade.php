@extends('admin.admin_layouts.navbar')

@section('title', 'Client')

@section('breadcrumb', 'Client')

@section('content')

    {{-- Panel Client --}}
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Client</h5>

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

                   <a id="buttonModal" class="btn btn-info" data-toggle="modal" data-target="#modal"><i class="icon-plus2"></i>Tambah Client</a>

                    <!-- Modal -->
                    <div class="modal fade text-left" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="width: 80%;" role="dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="" id="modalLabel">Client</h5>
                                    <button type="button" id="modalCloseBtn" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="icon-cross"></i>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid">

                                        <div class="row">

                                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/admin/client/insert">
                                                @csrf
                                                <input type="number" class="idClient" name="idClient" value="" hidden>

                                                <div class="col-md-12" id="mainForm">

                                                    <fieldset class="content-group">
                                                        <legend class="text-bold">Data Client</legend>

                                                        {{-- Nama Client --}}
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Nama</label>
                                                            <div class="col-lg-10">
                                                                <input name="name" id="name" type="text" class="form-control" placeholder="Nama Client....">
                                                            </div>
                                                        </div>

                                                        {{-- Foto Product --}}
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Foto</label>
                                                            <div class="col-lg-10">
                                                                <input type="file" id="pic" name="photo" class="form-control-file">
                                                            </div>
                                                        </div>

                                                        <div class="text-right">
                                                            <button id="buttonSubmit" type="submit" class="btn btn-primary">Add <i class="icon-arrow-right14 position-right"></i></button>
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
                <table id="tableClient" class="table table-striped">

                    <thead>
                        <th>No</th>
                        <th>Nama Client</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        @foreach($data as $client)
                            <tr>
                                <td><?php echo $count ?></td>                                
                                <td>{{$client->name}}</td>
                                <td><a href="/admin/client/edit/{{$client->id}}"><i style="color: black;" class="icon-pencil7"></i></a></td>
                                <td><a onclick="confirmationDelete({{$client->id}})"><i style="color: red;" class="icon-trash-alt"></i></a></td>
                            </tr>
                            <?php $count += 1 ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <form id="formDeleteClient" method="post" action="{{route('delete_client')}}">
                @csrf
                <input type="hidden" name="id_delete_client" id="id_delete_client">
            </form>
        </div>
    </div>

@endsection

@section('javascript')

    <!-- <script src="/js/pages/product.js"></script> -->
    <script>
        function confirmationDelete(id){
            var id_client = id;
            Swal.fire({
                title: 'Delete ?',
                icon: 'question',
                timer: 4000,
                timerProgressBar: true,
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Delete`,
                denyButtonText: `Don't Delete`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#id_delete_client').val(id_client);
                    $('#formDeleteClient').submit();
                } else if (result.isDenied) {
                    Swal.fire('Canceled', '', 'info')
                }
            });
        }
    </script>
@endsection
