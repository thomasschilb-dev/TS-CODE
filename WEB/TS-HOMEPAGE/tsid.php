<?PHP
$CONTENT=(ISSET($_GET['tsid']) ? $_GET['tsid'] : '');
IF ($CONTENT== "") {include"ts-home.html";}
ELSEIF ($CONTENT == "ffab70571e3d3a91ddd0091ee950ac2d")	{include"ts-index.html";}
ELSEIF ($CONTENT == "a42c55c0610a2aacd22a932fab3eeba3")	{include"ts-links.html";}
ELSEIF ($CONTENT == "af49f4653448920f9b0d65a8049b397f")	{include"ts-contact.html";}
ELSE {include"ts-home.html";}
?>
