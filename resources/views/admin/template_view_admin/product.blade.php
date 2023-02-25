@extends('admin.admin_layouts.navbar')

@section('title', 'Product')

@section('breadcrumb', 'Product')

@section('content')

    {{-- Panel Product --}}
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Product</h5>

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

                   <a id="buttonModal" class="btn btn-info" data-toggle="modal" data-target="#modal"><i class="icon-plus2"></i>Tambah Product</a>

                    <!-- Modal -->
                    <div class="modal fade text-left" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="width: 80%;" role="dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="" id="modalLabel">Product</h5>
                                    <button type="button" id="modalCloseBtn" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="icon-cross"></i>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid">

                                        <div class="row">

                                            <form class="form-horizontal" method="post" id="formInput" enctype="multipart/form-data" action="/admin/product/insert">
                                                @csrf
                                                <input type="number" class="idProduct" name="idProduct" value="" hidden>

                                                <div class="col-md-12" id="mainForm">

                                                    <fieldset class="content-group">
                                                        <legend class="text-bold">Data Product</legend>

                                                        {{-- Nama Product --}}
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Nama</label>
                                                            <div class="col-lg-10">
                                                                <input name="namaProduct" id="namaProduct" type="text" class="form-control" placeholder="Nama Product....">
                                                            </div>
                                                        </div>

                                                        {{-- Foto Product --}}
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Foto</label>
                                                            <div class="col-lg-10">
                                                                <input type="file" id="pic" name="fotoProduct" class="form-control-file">
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
                <table id="tableProduct" class="table table-striped">

                    <thead>
                        <th>No</th>
                        <th>Nama Product</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </thead>

                </table>

            </div>

        </div>
    </div>

@endsection

@section('javascript')

    <script src="/js/pages/product.js"></script>

@endsection
