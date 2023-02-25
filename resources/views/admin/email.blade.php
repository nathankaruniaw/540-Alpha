@extends('layouts.navbar')

@section('title', 'Email')

@section('breadcrumb', 'Email')

@section('content')

    {{-- Panel Email --}}
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Email</h5>

            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">

            <div class="container-fluid">

                {{-- Main Table --}}
                <table id="tableEmail" class="table table-striped">

                    <thead>
                        <th>No</th>
                        <th>Email User</th>
                    </thead>

                </table>

            </div>

        </div>
    </div>

@endsection

@section('javascript')

    <script src="/js/pages/email.js"></script>

@endsection
