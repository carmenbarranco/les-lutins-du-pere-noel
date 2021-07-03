const $ = require('jquery');

$(document).ready(function () {

    // function to send the datas via ajax with the corrects values for row and columns
    $("#export_in_csv").click(function () {
        var tableGifts = $('#tableGifts');
        var arrayTitle = []
        tableGifts.find('th').each(function () {
            // set all th value for table title's
            arrayTitle.push($(this).text())
        })
        var arrayValues = []
        tableGifts.find('.infosGifts').each(function () {
            // set all th value for table value's
            arrayValues.push($(this).text())
        })
        $.ajax({
            url: "/exporter/",
            data: {'columns': arrayTitle, 'rows': arrayValues},
            method: 'POST',
            success: function(reponse){
                if(reponse === "succes") {
                    location.reload();
                }
            }
        });
    });

    $('.custom-file-input').on('change', function (event) {
        // show name file in input search file to uploads
        var inputFile = event.currentTarget;
        $(inputFile).parent()
            .find('.custom-file-label')
            .html(inputFile.files[0].name);
    });

    // this method send csv file via api platform and let to create new gifts
    $("#formUploadsCsv").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'http://localhost:8889/api/gifts_files',
            data: new FormData(this), // get values from form
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function(reponse){
                if(reponse === "succes") {
                    location.reload();
                }
            }
        });
    });
})


