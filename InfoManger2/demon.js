var subBtn= document.getElementById('sub-btn');
// console.log(subBtn);
var startYear = document.getElementById('start-year');
var startMonth = document.getElementById('start-month');
var startDay = document.getElementById('start-day');
var endYear = document.getElementById('end-year');
var endMonth = document.getElementById('end-month');
var endDay = document.getElementById('end-day');
var endHour = document.getElementById('end-hour');
var startHour = document.getElementById('start-hour');
var order = document.getElementById('order');
console.log(order);
var result= document.getElementById('result');
subBtn.onclick=function () {
    var startYearVal = startYear.options[startYear.selectedIndex].value;
    var startMonthVal = startMonth.options[startMonth.selectedIndex].value;
    var startDayVal = startDay.options[startDay.selectedIndex].value;
    var startHourVal = startHour.options[startHour.selectedIndex].value;
    var endYearVal = endYear.options[endYear.selectedIndex].value;
    var endMonthVal = endMonth.options[endMonth.selectedIndex].value;
    var endDayVal = endDay.options[endDay.selectedIndex].value;
    var endHourVal = endHour.options[endHour.selectedIndex].value;
    var orderVal = order.options[order.selectedIndex].value;
console.log(order);

    if(startMonthVal>=0&&startMonthVal<10){
        startMonthVal='0'+startMonthVal;
    }if(startDayVal>=0&&startDayVal<10){
        startDayVal='0'+startDayVal;
    }if(startHourVal>=0&&startHourVal<10){
        startHourVal='0'+startHourVal;
    }if(endMonthVal>=0&&endMonthVal<10){
        endMonthVal='0'+endMonthVal;
    }if(endDayVal>=0&&endDayVal<10){
        endDayVal='0'+endDayVal;
    }if(endHourVal>=0&&endHourVal<10){
        endHourVal='0'+endHourVal;
    }

    var $datatimeend=endYearVal +'-'+endMonthVal +'-'+endDayVal +' '+endHourVal +':00:00';
    var $datatimestart=startYearVal +'-'+startMonthVal +'-'+startDayVal +' '+startHourVal +':00:00';

    $.ajax({
        url:'sqlLink2.php',
        data:{
            'datatimeend':$datatimeend,
            'datatimestart':$datatimestart,
            'order':orderVal
        },
        dataType:'text',
        type:'post',
        error:function(XMLHttpRequest, textStatus, errorThrown){
        },
        success:function(data){
            console.log( data);
            data=data.substring(1,data.length-2);
            console.log(data);
            var dataarray=data.split(',');
            var str='';
            for(var i=0;i<dataarray.length;i++){
                if(i==dataarray.length-1){
                    str+=dataarray[i];
                }else{
                    str+=dataarray[i]+',';
                }



            }

            result.innerHTML=str;


        }
    });


};

