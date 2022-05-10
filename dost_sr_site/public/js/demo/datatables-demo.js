// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('table#dataTable').DataTable({
        "ordering": true,
        "order": [
            [1, "asc"]
        ],
        responsive: true,
        "pagingType": "full_numbers",
        "info": true,
        search: {
            return: true
        }
    });
});
