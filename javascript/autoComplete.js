$(document).ready(() => {
    $("#to").autocomplete({
        source: function(req, add){
            $.getJSON("../model/autocompleteJobOrders.php", req, (data) => {
                let suggestions = [];
                $.each(data, (i, val) => {
                    suggestions.push(val);
                });
                add(suggestions);
            });
        },
        select: function(e, ui) {
            $("#to").val(ui.item.value);
        },
    });
});