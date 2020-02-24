$(function() {
    $('#js-stock-statuses-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/admin/stockStatus/datatable',
        columns: [
            { data: 'code', name: 'code' },
            { data: 'name', name: 'name' },
            { data: 'description', name: 'description' },
            { data: 'created_at', name: 'created_at' }
        ]
    });
});
