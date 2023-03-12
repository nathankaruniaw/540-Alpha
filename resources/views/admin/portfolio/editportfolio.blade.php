@extends('admin.admin_layouts.navbar')

@section('title', 'Portfolio')

@section('breadcrumb', 'Edit Portfolio')

@section('content')

    {{-- Panel Portfolio --}}
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">{{ $portfolio->name }}</h5>

            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

	<!-- Back -->
    <div class="container-fluid padkonten mg-60" style="padding-bottom: 0;">

        <a href="/admin/portfolio" class="btn btn-info">
            <i class="arrow-left" style="padding-top: 5px;"></i> Back
        </a>

    </div>

	<!-- konten -->
	<div class="container-fluid padkonten">


		<!-- Form -->
		<form action="/admin/portfolio/update" method="post" enctype="multipart/form-data">

			@csrf

			<input type="number" name="id" id="id" value="{{ $portfolio->id }}" hidden>

			<!-- Container Edit -->
			<div class="row">

                <div class="col-md-12">
                    <div class="col-md-2">
                        <!-- Foto Product -->
                        <p class="h3 mg-20">
                            Foto Portfolio
                        </p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        @if($portfolio->photo != null)
                            <div class="container-input-foto-Product row">
                                <div class="col-md-4 align-items-center justify-content-center" style="margin-bottom: 10px;">
                                    <img src="{{ url('/images/portfolio/'.$portfolio->photo) }}" style="width: 150%;">
                                </div>
                            </div>
                        @endif
                        <input type="file" id="pic" name="photo" class="form-control-file">
                    </div>

                </div>

                


                <div class="col-md-12">

                    <div class="col-md-2">
                        <!-- Nama Portfolio -->
                        <p class="h3">
                            Nama Portfolio
                        </p>
                    </div>

                    <div class="col-md-6">
                        <br>
                        <input type="text" name="name" class="form-control" value="{{ $portfolio->name }}">
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



    <!-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> -->
    <script>

    </script>

@endsection
