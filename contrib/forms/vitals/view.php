<!-- Form created by Andres paglayan -->
<?php
include_once("../../globals.php");
?>
<html><head>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>

<?php
include_once("$srcdir/api.inc");
$obj = formFetch("form_vitals", $_GET["id"]);
?>

<form method=post action="<?echo $rootdir?>/forms/vitals/save.php?mode=update&id=<?echo $_GET["id"];?>" name="my_form">
<span class="title">Vital Signs</span><br><br>

<a href="javascript:document.my_form.submit();" class="link_submit">[Save]</a>
<br>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link">[Don't Save Changes]</a>
<br></br>
<!-- Form goes here -->

<?php
	include ('form.php');
?>

<!-- Form ends here -->
<a href="javascript:document.my_form.submit();" class="link_submit">[Save]</a>
<br>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link">[Don't Save Changes]</a>

</form>
<?php
formFooter();
?>
