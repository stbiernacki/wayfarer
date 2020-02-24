$(function() {
    $('#js-api-users-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/admin/apiUsers/datatable',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'description', name: 'description' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action' }
        ]
    });
});
