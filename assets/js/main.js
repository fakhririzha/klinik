$(document).ready(function () {

    $('#tabel').DataTable();
    $('.tooltipped').tooltip({
        enterDelay: 0,
        inDuration: 150,
        outDuration: 150
    });

    $('.dataTables_length label select').addClass('browser-default');

});
