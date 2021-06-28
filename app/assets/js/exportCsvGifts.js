const $ = require('jquery');

$(document).ready(function () {
    $("#export_in_csv").click(function () {
        var tableGifts = $('#tableGifts');
        var arrayTitle = []
        tableGifts.find('th').each(function() {
            arrayTitle.push($(this).text())
        })
        var arrayValues = []
        tableGifts.find('.infosGifts').each(function() {
            arrayValues.push($(this).text())
        })
        $.ajax({
            url: "/exporter/",
            data: {'columns': arrayTitle, 'rows' : arrayValues},
            method: 'POST'
        });
    });
});


