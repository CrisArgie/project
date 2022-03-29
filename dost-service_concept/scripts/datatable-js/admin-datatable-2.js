$(document).ready(function() {
    $('table.display').DataTable({
        "ordering": false,
        "order": [
            [1, "asc"]
        ],
        responsive: true,
        "pagingType": "full_numbers",
        // stateSave: true,
        search: {
            return: true
        }
    });
});