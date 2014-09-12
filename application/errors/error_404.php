<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman Tidak Ditemukan!</title>
<script type="text/javascript">
//5 detik
const timer = 5;
var count = timer;
function startClock()
{
if (count>0) count--;
document.getElementById("status").innerHTML = count;
setTimeout("startClock()", 1000);

if(count==0)
{
//alert("Waktu Anda telah habis");
document.location.href="javascript:history.go(-1)";
//count=0;
}
}
</script>
<style type="text/css">
#container {
	text-align: center;
	padding-top: 30px;
}
body {
	background: #f5f5f5;
}
body, h1, p {
	font-family: "Helvetica", serif;
}
h1 {
	font-size: 130px;
	margin-bottom: 0px;
	border: 4px solid #eee;
	color: #ddd;
	display: inline-block;
	width: 210px;
	height: 190px;
	padding: 50px 15px 10px 15px;
	text-align: center;
	text-indent: -3px;

	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}
p {
	font-size: 25px;
	color: #555;
}
p b {
	font-size: 31px;
	display: block;
}
p a {
	display: block;
	font-size: 12px;
	color: #9cbf11;
	text-decoration: none;
	padding-top: 10px;
	text-shadow: none;
}
p a:hover {
	text-decoration: underline;
}
h1, p {
	text-shadow: 1px 2px 2px #bbb;
}
</style>
</head>
<body>
	<div id="container">
		<h1>404</h1>
		<p>
			<b>Ups!</b>
			Halaman tidak ditemukan!<br>
			<body onLoad="startClock()">
<b><span id='status'></span> detik</b>
<a href="javascript:history.go(-1)">Kembali</a>
</body>
		</p>
	</div>
</body>
</html>
