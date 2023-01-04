$('#data-table').DataTable();

$('#tabel-pendaftaran').DataTable({
    dom: 'Bfrtip',
    buttons: [
        {
            extend: 'excel', text: 'Export Excel', className: 'btn btn-primary', exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7]
            }
        },
    ]
});

// ===== preview img =====
document.addEventListener("DOMContentLoaded", function () {
    let uploadImg = document.getElementById('upload-img');
    uploadImg.addEventListener('change', function () {
        let previewImg = document.getElementById('preview-img');
        previewImg.src = URL.createObjectURL(event.target.files[0]);
    })
});
// ===== end preview img =====

// ===== notif delete =====
document.addEventListener("DOMContentLoaded", function () {
    let btnDelete = document.getElementById('btn-modal-delete');
    btnDelete.addEventListener('click', function () {
        let url = btnDelete.getAttribute('data-url');
        document.getElementById('btn-delete').setAttribute('href', url);
    })
});
// ===== end notif delete =====



