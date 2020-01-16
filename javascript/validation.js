$(document).ready(() => {

    //This feature(Calc total in realtime) is not perfect but when used as intended looks nice
    $("#value1, #value2, #value3, #value4, #value5, #value6, #value7").keyup(() => {
        //Input box values
        let value1 = parseInt($("#value1").val()) || 0;
        let value2 = parseInt($("#value2").val()) || 0;
        let value3 = parseInt($("#value3").val()) || 0;
        let value4 = parseInt($("#value4").val()) || 0;
        let value5 = parseInt($("#value5").val()) || 0;
        let value6 = parseInt($("#value6").val()) || 0;
        let value7 = parseInt($("#value7").val()) || 0;
        $("#totalHoursWorked").html(value1 + value2 + value3 + value4 + value5 + value6 + value7);

        //Each day Totals
        let total1 = parseInt($("#totalM").html()) || 0;
        let total2 = parseInt($("#totalT").html()) || 0;
        let total3 = parseInt($("#totalW").html()) || 0;
        let total4 = parseInt($("#totalTh").html()) || 0;
        let total5 = parseInt($("#totalF").html()) || 0;
        let total6 = parseInt($("#totalS").html()) || 0;
        let total7 = parseInt($("#totalSu").html()) || 0;

        //This checks that an employee does not work more than 10 hours per day
        if((value1 + total1) > 10 || (value2 + total2) > 10 || (value3 + total3) > 10 || (value4 + total4) > 10 || (value5 + total5) > 10 || (value6 + total6) > 10 || (value7 + total7) > 10 || value1 + value2 + value3 + value4 + value5 + value6 + value7 > 49 || value1 + value2 + value3 + value4 + value5 + value6 + value7 === 0) {
            $(":input[type='submit']").add().attr("disabled", "disabled").css({"color": "red","font-weight":"bolder"});
            $("#totalM,#totalT,#totalW,#totalTh,#totalF,#totalS,#totalSu").css({
                "color": "red"
            });
        }
        else {
            $(":input[type='submit']").add().attr("disabled", false).css({"color": "#DFF8EB","font-weight": "normal"});
            $("#totalM,#totalT,#totalW,#totalTh,#totalF,#totalS,#totalSu").css({
                "color": "#DFF8EB"
            });
        };
    });

    //Making sure more than 10 or less than 0 cant be entered.
    $(":input[type='text']").keyup((event) => {
        if(event.target.value > 10) {
            event.target.value = 10;
        }
        if(event.target.value < 0 || isNaN(event.target.value)) {
            event.target.value = 0;
        }
    });
});