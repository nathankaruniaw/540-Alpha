$(document).ready(function () {

    // Hide
    console.log('INI PRODUCT')

    // Ajax Setup
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    // Setup DataTable
    var table = $('#tableProduct').DataTable({
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
            url: '/admin/product/getData',
        },
        columns: [
            { data: null },
            { data: 'namaProduct', name: 'namaProduct' },
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
        $('#idProduct').val('');
        $('#namaProduct').val('');

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
                table.draw();
                Swal.fire({
                    title: 'Added',
                    icon: 'success',
                    timer: 1000,
                    timerProgressBar: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                });
            },
            error: function (data) {
                console.log('Error : ', data);
            }
        })
    })

    // Delete Data
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

                $.ajax({
                    type: "post",
                    url: "/admin/product/delete",
                    data: {
                        id: id
                    },
                    success: function (data) {
                        table.draw();
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

})
