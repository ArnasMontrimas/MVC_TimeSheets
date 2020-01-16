function removeTr(jobSheet,empId,weekEnding) {
    $.ajax({
         url: "../model/deletTableRw.php",
         data: {
            jobSheet: jobSheet,
            empId: empId,
            weekEnding: weekEnding,  
         },
         jobSheet: jobSheet,
         type: "POST",
         success: function(response){
            $("#"+this.jobSheet).parent().parent().hide(250);

            //Totals for each day
            let monday = parseInt($("#totalM").html());
            let tuesday = parseInt($("#totalT").html());
            let wednesday = parseInt($("#totalW").html());
            let thursday = parseInt($("#totalTh").html());
            let friday = parseInt($("#totalF").html());
            let saturday = parseInt($("#totalS").html());
            let sunday = parseInt($("#totalSu").html());
            let all = parseInt($("#totalAll").html());

            //Values Removed
            let current1 = parseInt($("#"+this.jobSheet).parent().parent().children().eq(0).html());
            let current2 = parseInt($("#"+this.jobSheet).parent().parent().children().eq(1).html());
            let current3 = parseInt($("#"+this.jobSheet).parent().parent().children().eq(2).html());
            let current4 = parseInt($("#"+this.jobSheet).parent().parent().children().eq(3).html());
            let current5 = parseInt($("#"+this.jobSheet).parent().parent().children().eq(4).html());
            let current6 = parseInt($("#"+this.jobSheet).parent().parent().children().eq(5).html());
            let current7 = parseInt($("#"+this.jobSheet).parent().parent().children().eq(6).html());
            let current8 = parseInt($("#"+this.jobSheet).parent().parent().children().eq(7).html());

			//Recalculate the totals of eacch
            $("#totalM").html(monday - current1);
            $("#totalT").html(tuesday - current2);
            $("#totalW").html(wednesday - current3);
            $("#totalTh").html(thursday - current4);
            $("#totalF").html(friday - current5);
            $("#totalS").html(saturday - current6);
            $("#totalSu").html(sunday - current7);
            $("#totalAll").html(all - current8);


        }
    });
 }