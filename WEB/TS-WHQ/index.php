
<head>
<LINK REL="ICON" TYPE="IMAGE/X-ICON" HREF="/.favicon.ico">
<link rel="icon" type="image/vnd.microsoft.icon" href="/.favicon.ico">
<link rel="shortcut icon" href="/.favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Mono&display=swap" rel="stylesheet">
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Nova+Mono&display=swap');
font {
	font-family: 'Nova Mono', monospace;	
}
a {
	color: #008000;
	text-decoration: none;
}
a:visited {
	color: #008000;
}
a:active {
	color: #008000;
}
a:hover {
	color: #00FF00;
}
.tswhq-index2 {
	font-size: 18px;
}
.tswhq-index3 {
	font-size: 72px;
}
.tswhq-index4 {
	text-align: center;
}
.tswhq-index5 {
	font-family: "Nova Mono", monospace;
}
.tswhq-index6 {
	font-family: "Nova Mono", monospace;
	font-size: 18px;
}
.tswhq-index7 {
	font-family: "Nova Mono", monospace;
	font-size: 18px;
	background-color: #002900;
}
</style>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="en-us" http-equiv="Content-Language">
<meta content="ts, headquarters, world, tswhq" name="keywords">
<meta content="TS World Headquarters" name="description">
<base target="_self">
</head>

<body style="color: #008000; margin: 0; background-color: #000000">
<table cellpadding="25" cellspacing="0" style="width: 100%">
	<tr>
		<td style="width: 80px">
<font class="tswhq-index5">
		<span class="tswhq-index2"><img src="tswhq.png"></span></font></td>
		<td class="tswhq-index3">
<font class="tswhq-index5">
				<a href="./">TS-WHQ</a></font></td>
	</tr>
	<tr>
		<td class="tswhq-index7" colspan="2">
		<a href="?tsid=c0241eae411627c19ba9835b6d194b1c">CONTACT</a> |
		<a href="?tsid=f8e346271e01d0bcd59a453e3096dc91">HOSTING</a> |
		<a href="?tsid=25835188a2355e9530d3a10fcbe4c65b">NETWORK</a> |
		<a href="?tsid=d5b582ed9ed4002bf2bcb386a68519cf">PRE</a> |
		<a href="?tsid=bc203dec0e2f4c9bab2181f4ebe84e1a">RECORDS</a></td>
	</tr>
	<tr>
		<td class="tswhq-index6" colspan="2">
		<?PHP
		$CONTENT=(ISSET($_GET['tsid']) ? $_GET['tsid'] : '');
		IF ($CONTENT== "") {include"home.php";}
		ELSEIF ($CONTENT == "25835188a2355e9530d3a10fcbe4c65b")	{include"network.php";}
		ELSEIF ($CONTENT == "d5b582ed9ed4002bf2bcb386a68519cf")	{include"pre.php";}
		ELSEIF ($CONTENT == "bc203dec0e2f4c9bab2181f4ebe84e1a")	{include"records.php";}
		ELSEIF ($CONTENT == "f8e346271e01d0bcd59a453e3096dc91")	{include"hosting.php";}
		ELSEIF ($CONTENT == "c0241eae411627c19ba9835b6d194b1c")	{include"contact.php";}
		ELSE {include"home.php";}
		?>
		</td>
	</tr>
	<tr>
		<td class="tswhq-index7" colspan="2">&nbsp;</td>
	</tr>
</table>
<div class="tswhq-index4">
<font class="tswhq-index5"><br>
		<span class="tswhq-index2">NO. <?php include"no.php"; ?>
		<br></span><br><br></div>
</font>