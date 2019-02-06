// TODO: Changer la langue des éléments 

const url = "http://127.0.0.1:3000/users";

$(document).ready(function () {
    var table = $('#adminTable').DataTable({
        ajax: {
            url: url,
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { "data": "ID" },
            { "data": "First_Name" },
            { "data": "Last_Name" },
            { "data": "Mail" },
            { "data": "Password" },
            { "data": "ID_Centers" },
            { "data": "ID_UsersStatus" },
        ]
    });
});

