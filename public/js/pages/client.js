$(document).ready(function () {

    // Hide
    // console.log('INI NEWS')

    // Ajax Setup
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    var table = $('#tableClients').DataTable({
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
            url: '/admin/clients/getData',
        },
        columns: [
            { data: null },
            { data: 'client_name', name: 'client_name' },
            { data: 'btnDetail', name: 'btnDetail' },
            { data: 'btnDelete', name: 'btnDelete' },
        ]
    })
    table.on('draw.dt', function () {
        var info = table.page.info();
        table.column(0, {
            search: 'applied', order: 'applied', page: 'applied'
        }).nodes().each(function (cell, i) { cell.innerHTML = i + 1 + info.start; });
    });

    // Clear modal
    $('#buttonModal').click(function () {

        $('#mainForm').attr('class', 'col-md-12');
        $('#idClients').val('');
        $('#client_name').val('');

        $('#buttonSubmit').html('Add <i class="icon-arrow-right14 position-right"></i>');
    })

    // Input
    $('#formInput').submit(function () {

        event.preventDefault();

        console.log('Form Submitted');

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log('Succes', data);
                $('#modalCloseBtn').click();
                Swal.fire({
                    title: 'Added',
                    icon: 'success',
                    timer: 1000,
                    timerProgressBar: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                });
                location.reload()
            },
            error: function (data) {
                console.log('Error : ', data);
            }
        })
    })
})
