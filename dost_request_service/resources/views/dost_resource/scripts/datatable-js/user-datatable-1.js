$(document).ready(function() {
    $('table.display').DataTable({
        "dom": '<"top"i>rt<"bottom"flp><"clear">',
        "ordering": false,
        "searching": false,
        "dataTables_length": false,
        "order": [
            [1, "asc"]
        ],
        responsive: true,
        "info": false,
        search: {
            return: false
        }
    });
});