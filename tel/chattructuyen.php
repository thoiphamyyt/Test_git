<?php
	include("template.php");
	if(!isset($_SESSION["nguoidung"]) && !isset($_SESSION["quantri"]))
	{
		echo("<script language='javascript'>
		alert('Bạn không có quyền trên trang này!');
		window.location='index.php';
		</script>");
	}
	$ban=$_REQUEST["BanDChon"]; // nhận biến từ link chọn bạn chat
	$_SESSION["nguoi_nhan"]=$ban;
?>
<center>
<table border="0" class="w3-table w3-container w3-margin" style="width: 80%;" >
	<tr>
		<td>
		<iframe class="w3-khaki w3-card-2" name="noidung" src="doc_ndung_chat.php" width="72%" height="300"></iframe>
			<iframe name="nhap" src="nhap_ndung_chat.php" width="72%" height="83"></iframe>
		</td>
	</tr>
</table>
</center>
<?php
include("right_and_footer.php");
?>
