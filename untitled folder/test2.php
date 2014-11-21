<script>
function calcTime(city, offset) {
    // create Date object for current location
    var d = new Date();

    // convert to msec
    // subtract local time zone offset
    // get UTC time in msec
    var utc = d.getTime() - (d.getTimezoneOffset() * 60000);

    // create new Date object for different city
    // using supplied offset
    var nd = new Date(utc + (3600000*offset));
    alert(nd);
    // return time as a string
    return "The local time for city"+ city +" is "+ nd.toLocaleString();

}
//alert(calcTime('Bombay', '+5'));
var date = new Date('6/29/2011 4:52:48 PM UTC');
date.toString() // "Wed Jun 29 2011 09:52:48 GMT-0700 (PDT)"

var offset = 5;
var g = new Date( new Date().getTime() + offset * 3600 * 1000).toUTCString().replace( / GMT$/, "" )
alert(g);
</script>
