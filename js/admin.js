$(function(){

    // Make table row clickable
    var tableRows = $(".t-row[data-href]");
    if (tableRows.length > 0) {

        tableRows.click(function(){
            window.location = $(this).closest('.t-row').data("href");
        });
    }

});