// TODO: Changer la langue des éléments 

const manifestationsReportsUrl = "http://127.0.0.1:3000/manifestationsReports";
const imagesReportsUrl = "http://127.0.0.1:3000/imagesReports";
const commentsReportsUrl = "http://127.0.0.1:3000/commentsReports";

$(document).ready(function () {
    $('#adminTableManifestations').DataTable({
        ajax: {
            url: manifestationsReportsUrl,
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { "data": "id" },
            { "data": "first_name" },
            { "data": "last_name" },
            { "data": "label" },
        ]
    });

    $('#adminTableImages').DataTable({
        ajax: {
            url: imagesReportsUrl,
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { "data": "id" },
            { "data": "first_name" },
            { "data": "last_name" },
            { "data": "image_url" },
            { "data": "label" },
        ]
    });

    $('#adminTableComments').DataTable({
        ajax: {
            url: commentsReportsUrl,
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { "data": "id" },
            { "data": "first_name" },
            { "data": "last_name" },
            { "data": "description" },
            { "data": "image_url" },
            { "data": "label" },
        ]
    });
});

