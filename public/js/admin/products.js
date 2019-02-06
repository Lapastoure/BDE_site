// TODO: Changer la langue des éléments 

const url = "http://127.0.0.1:3000/products";

$(document).ready(function () {
    var table = $('#adminTable').DataTable({
        ajax: {
            url: url,
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { "data": "ID" },
            { "data": "Label" },
            { "data": "Price" },
            { "data": "Description" },
            { "data": "Quantity" },
            { "data": "ID_ProductsTypes" },
        ]
    });
});

