$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function removeRow(id, url) {
    if (confirm('Are you sure you want to remove this row!')) {
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data: { id },
            url: 'destroy',
            success: function (result) {
                if (result.error === false) {
                    alert(result.message)
                    location.reload();
                } else {
                    alert(result.message)
                }
            },

        })
    }
}
