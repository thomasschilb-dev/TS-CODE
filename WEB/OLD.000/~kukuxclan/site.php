<style type="text/css">
.border-null {
	border-color: #000000;
	border-width: 0;
}
.align-center {
	text-align: center;
}
.font-family-sans-serif {
	font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
}
a {
	color: #808080;
	text-decoration: none;
	-moz-transition: all .3s ease-in;
-o-transition: all .3s ease-in;
-webkit-transition: all .3s ease-in;
transition: all .3s ease-in;
}
a:visited {
	color: #808080;
}
a:active {
	color: #808080;
}
a:hover {
	color: #FFFFFF;
}
.font-20pt-center {
	text-align: center;
	font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
	font-size: 20pt;
}
.font-12pt-center {
	text-align: center;
	font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
	font-size: 12pt;
}
.font-12pt {
	font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
	font-size: 12pt;
}
.auto-style1 {
	text-align: left;
	font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
	font-size: 12pt;
}
.auto-style2 {
	border-width: 0px;
}
</style>

<body style="color: #808080; background-color: #000000">
<table align="center" cellpadding="0" cellspacing="0" class="border-null" style="width: 600px">
	<tr>
		<td class="align-center">
		&nbsp;</td>
	</tr>
	<tr>
		<td class="align-center">
		&nbsp;</td>
	</tr>
	<tr>
		<td class="font-12pt-center"><br>
		<a href="?to=gate" target="_self">
		<img src="img/kukuxclan-menu-title.png" class="auto-style2"></a></td>
	</tr>
	<tr>
		<td class="font-12pt-center">&nbsp;
		</td>
	</tr>
	<tr>
		<td class="font-20pt-center">
		<a href="?to=site&amp;&amp;front=anonymous" target="_self">#Anonymous</a>
		<a href="?to=site&amp;&amp;front=ccc" target="_self">#CCC</a>
		<a href="?to=site&amp;&amp;front=hitler" target="_self">#Hitler</a>
		<a href="?to=site&amp;&amp;front=illuminati" target="_self">#Illuminati</a>
		<a href="?to=site&amp;&amp;front=kkk" target="_self">#KKK</a>
		<a href="?to=site&amp;&amp;front=uno" target="_self">#Uno</a><br><img height="1" src="img/line.png" width="600"></td>
	</tr>
	<tr>
		<td class="auto-style1">
			<?php
$front = $_GET['front'];
if ($front > "")
{
if ($front == "anonymous") {include("html/anonymous.html");}
elseif ($front == "ccc"){include("html/ccc.html");}
elseif ($front == "hitler"){include("html/hitler.html");}
elseif ($front == "illuminati"){include("html/illuminati.html");}
elseif ($front == "kkk"){include("html/kkk.html");}
elseif ($front == "kkc"){include("html/kkk.html");}
elseif ($front == "uno"){include("html/uno.html");}

else {include("html/welcome.html");}
}
else {include("html/welcome.html");}
?>
		</td>
	</tr>
	<tr>
		<td class="font-12pt" valign="top"><img height="1" src="img/line.png" width="600"></td>
	</tr>
</table>
<p class="font-12pt-center">Copyright &copy; 2017-2020 KKC. All Rights Reserved.<br>
<br>
<?php
include(".counter");
?>
</p>

<p class="font-12pt-center">&nbsp;</p>


