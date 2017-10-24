<?php date_default_timezone_set('America/New_York'); ?>
<script type="text/javascript">
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
var hd=h;
document.getElementById('txt').innerHTML=(hd=0?"12":hd>12?hd-12:hd)+":"+m+" "+(h<12?"AM":"PM");
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>
</head>

<body onload="startTime()">

<div id="txt"></div>
