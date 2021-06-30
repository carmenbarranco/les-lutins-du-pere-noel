const $ = require('jquery');

$(document).ready(function () {
    $("#export_in_csv").click(function () {
        var tableGifts = $('#tableGifts');
        var arrayTitle = []
        tableGifts.find('th').each(function () {
            arrayTitle.push($(this).text())
        })
        var arrayValues = []
        tableGifts.find('.infosGifts').each(function () {
            arrayValues.push($(this).text())
        })
        $.ajax({
            url: "/exporter/",
            data: {'columns': arrayTitle, 'rows': arrayValues},
            method: 'POST'
        });
    });

    $('.custom-file-input').on('change', function (event) {
        var inputFile = event.currentTarget;
        $(inputFile).parent()
            .find('.custom-file-label')
            .html(inputFile.files[0].name);
    });

    $("#formUploadsCsv").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'http://localhost:8889/api/gifts_files',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
        });
    });
})


