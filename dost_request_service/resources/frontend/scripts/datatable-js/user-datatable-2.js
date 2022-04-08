$(document).ready(function() {
    $('table.display').DataTable({
        "pagingType": "full_numbers",
        "dataTables_length": true,
        "order": [
            [3, "asc"]
        ],
        orderMulti: true,
        stateSave: true,
        responsive: true,
        "info": true
    });
});