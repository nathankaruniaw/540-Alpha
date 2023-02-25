@extends('layouts.navbar')

@section('title', 'Product')

@section('content')

    {{-- Panel Product --}}
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">{{ $Product->namaProduct }}</h5>

            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

	<!-- Back -->
    <div class="container-fluid padkonten mg-60" style="padding-bottom: 0;">

        <a href="/admin/product" class="btn btn-info">
            <i class="arrow-left" style="padding-top: 5px;"></i> Back
        </a>

    </div>

	<!-- konten -->
	<div class="container-fluid padkonten">


		<!-- Form -->
		<form action="/admin/product/update" method="post" enctype="multipart/form-data">

			@csrf

			<input type="number" name="idProduct" id="idProduct" value="{{ $Product->id }}" hidden>

			<!-- Container Edit -->
			<div class="row">

                <div class="col-md-12">
                    <div class="col-md-2">
                        <!-- Foto Product -->
                        <p class="h3 mg-20">
                            Foto Product
                        </p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        @if($Product->photoProduct != null)
                            <div class="container-input-foto-Product row">
                                <div class="col-md-4 align-items-center justify-content-center" style="margin-bottom: 10px;">
                                    <img src="{{ url('/images/product/'.$Product->photoProduct) }}" style="width: 150%;">
                                </div>
                            </div>
                        @endif
                        <input type="file" id="pic" name="fotoProduct" class="form-control-file">
                    </div>

                </div>

                


                <div class="col-md-12">

                    <div class="col-md-2">
                        <!-- Nama Product -->
                        <p class="h3">
                            Nama Product
                        </p>
                    </div>

                    <div class="col-md-6">
                        <br>
                        <input type="text" name="namaProduct" class="form-control" value="{{ $Product->namaProduct }}">
                    </div>

                </div>

			</div>

            <div class="text-center">

                <button type="submit" class="h3 btn btn-info" id="buttonSubmit">
                    Save
				</button>

			</div>

		</form>

	</div>



    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        </script>
    <script>
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $('body').on('click', '#buttonDelete', function () {
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

                    var id = $(this).data("id");
                    console.log(id);

                    $.ajax({
                        type: "post",
                        url: "/admin/product/delete",
                        data: {
                            id: id
                        },
                        success: function (data) {
                            window.location.reload();
                            Swal.fire({
                                title: 'Deleted',
                                icon: 'success',
                                timer: 1000,
                                timerProgressBar: true,
                                position: 'bottom-end',
                                showConfirmButton: false,
                            });
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire('Canceled', '', 'info')
                }
            });
        })

    </script>

@endsection
