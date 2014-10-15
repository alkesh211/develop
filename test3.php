<html>
<head>
</head>

<body>
<center>
<table id="table" border="0">
    <tr>
        <td align="center" colspan="6"><div class="numbers" id="count2" style="padding: 5px 0 0 0; "></div></td>
    </tr>
    <tr id="spacer1" >
        <td align="center" ><div class="numbers" ></div></td>
        <td align="center" ><div class="numbers" id="dday"></div></td>
        <td align="center" ><div class="numbers" id="dhour"></div></td>
        <td align="center" ><div class="numbers" id="dmin"></div></td>
        <td align="center" ><div class="numbers" id="dsec"></div></td>
        <td align="center" ><div class="numbers" ></div></td>
    </tr>
    <tr id="spacer2">
        <td align="center" ><div class="title" ></div></td>
        <td align="center" ><div class="title" id="days">Days</div></td>
        <td align="center" ><div class="title" id="hours">Hours</div></td>
        <td align="center" ><div class="title" id="minutes">Minutes</div></td>
        <td align="center" ><div class="title" id="seconds">Seconds</div></td>
        <td align="center" ><div class="title" ></div></td>
    </tr>
</table>
</center>

<script type="text/javascript">

/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
on 5/30/2006 to count down to a specific date AND time,
and on 1/10/2010 to include time zone offset.
*/

/*  Change the items below to create your countdown target date and announcement once the target date and time are reached.  */
        //—>enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=<?php echo date('Y'); ?>        //—>Enter the count down target date YEAR
var month=<?php echo date('m'); ?>;          //—>Enter the count down target date MONTH
var day=<?php echo date('d'); ?>;           //—>Enter the count down target date DAY
var hour='24';          //—>Enter the count down target date HOUR (24 hour clock)
var minute='59';        //—>Enter the count down target date MINUTE
var tz=+1;            //—>Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

//—>    DO NOT CHANGE THE CODE BELOW!    <—
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr,mini){
theyear=yr;themonth=m;theday=d;thehour=hr;theminute=mini;
var today=new Date();

var todayy=today.getYear();

if (todayy < 1000) { todayy+=1900; }
var todaym=today.getMonth();
var todayd=today.getDate();
var todayh=today.getHours();
var todaymin=today.getMinutes();
var todaysec=today.getSeconds();
var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;

var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
var futurestring1=(montharray[m-1]+""+d+","+yr+" "+hr+":"+mini+":00");

var futurestring1= Date.parse(montharray[m-1]+" "+d+", "+yr+" 23:59:59");
//alert(futurestring1);
var futurestring= (futurestring1)-(today.getTimezoneOffset()*(1000*60));
//alert(futurestring1);
//alert(today.getTimezoneOffset()*(1000*60));
var dd=futurestring-todaystring;

var dday=Math.floor(dd/(60*60*1000*24)*1);
var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
document.getElementById('count2').innerHTML=current;
document.getElementById('count2').style.display="inline";
document.getElementById('count2').style.width="390px";
document.getElementById('dday').style.display="none";
document.getElementById('dhour').style.display="none";
document.getElementById('dmin').style.display="none";
document.getElementById('dsec').style.display="none";
document.getElementById('days').style.display="none";
document.getElementById('hours').style.display="none";
document.getElementById('minutes').style.display="none";
document.getElementById('seconds').style.display="none";
document.getElementById('spacer1').style.display="none";
document.getElementById('spacer2').style.display="none";
return;
}
else {
document.getElementById('count2').style.display="";
//document.getElementById('dday').innerHTML=dday;

document.getElementById('dhour').innerHTML=dhour;
document.getElementById('dmin').innerHTML=dmin;
document.getElementById('dsec').innerHTML=dsec;
setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
}
}

countdown(year,month,day,hour,minute);
</script>
</body>
</html>
