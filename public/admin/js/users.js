
const url = "http://127.0.0.1:3000/users";

$(document).ready(function () {
    var table = $('#adminTable').DataTable({
        ajax: {
            url: url,
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { "data": "id" },
            { "data": "first_name" },
            { "data": "last_name" },
            { "data": "email" },
            { "data": "centerslabel" },
            { "data": "usersstatuslabel" },
        ]
    });
});

