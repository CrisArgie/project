$(document).ready(function() {
    $('table.display').DataTable({
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


// stateSave: true,
// "paging":   false,
// "ordering": false,
// "info":     false
// DOM
// var table = $('#example').DataTable();

// $('#example tbody').on('click', 'tr', function () {
//     var data = table.row( this ).data();
//     alert( 'You clicked on '+data[0]+'\'s row' );
// } );

// "aoColumns": [
//     null,
//     null,
//     { "orderSequence": [ "asc" ] },
//     { "orderSequence": [ "desc", "asc", "asc" ] },
//     { "orderSequence": [ "desc" ] },
//     null
// ]