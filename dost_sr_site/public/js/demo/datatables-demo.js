// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('table#dataTable').DataTable({
        "ordering": true,
        "order": [
            [3, "desc"]
        ],
        responsive: true,
        "pagingType": "full_numbers",
        "info": true,
        stateSave: true,
        search: {
            return: false
        }
    });
});

$(document).ready(function() {
    $('table#customerTable').DataTable({
        "ordering": true,
        "order": [
            [1, "asc"]
        ],
        "dom": '<"top"i>rt<"bottom"flp><"clear">',
        "searching": false,
        "dataTables_length": false,
        "order": [
            [2, "asc"]
        ],
        responsive: true,
        "info": false,
        search: {
            return: false
        }
    });
});
