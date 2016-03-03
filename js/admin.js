$(function(){

    var gotoGalleryEdit = function(e) {
        if ($(e.target).parent().hasClass("prevent-click") || $(e.target).hasClass('prevent-click')) {
            return;
        }
        window.location = $(e.target).closest(".t-row").data("href");
    };

    // Make table row clickable
    var tableRows = $(".t-row[data-href]");
    if (tableRows.length > 0) {

        tableRows.click(gotoGalleryEdit);
    }

    var btnDel = $(".del-btn");
    if (btnDel.length > 0) {

        btnDel.click(function(e) {

            e.preventDefault();

            var parentRow = $(this).parents(".t-row"),
                rowId = parentRow.data("row-id");
            
            if (window.confirm("Are you sure?")) {
                
                $.ajax({
                    url: $(this).attr("href"),
                    type: "post",
                    data: {
                        id: rowId
                    },
                    success: function() {
                        window.location.reload();
                        return;
                    }
                });
            }

        });

    }

});