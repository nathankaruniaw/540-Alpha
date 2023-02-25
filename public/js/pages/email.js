$(document).ready(function () {

    // Ajax Setup
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    // Setup DataTable
    var table = $('#tableEmail').DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        autoWidth: true,
        // responsive: true,
        dom: '<"datatable-header"fBl><t><"datatable-footer"ip>',
        language: {
            search: '<span>Filter:</span> _INPUT_',
            searchPlaceholder: 'Type to filter...',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        ajax: {
            type: 'GET',
            url: '/admin/email/getData',
        },
        columns: [
            { data: null },
            { data: 'namaEmail', name: 'namaEmail' }
        ]
    })
    table.on('draw.dt', function () {
        var info = table.page.info();
        table.column(0, {
            search: 'applied', order: 'applied', page: 'applied'
        }).nodes().each(function (cell, i) { cell.innerHTML = i + 1 + info.start; });
    });

})
