<html>
<head>
	<script src="http://www.google.com/cloudprint/client/cpgadget.js">
	</script>
	<script>
		window.onload = function() {
		var gadget = new cloudprint.Gadget();
		gadget.setPrintButton(
				cloudprint.Gadget.createDefaultPrintButton("print_button_container")); //div id to contain the button
				gadget.setPrintDocument("url", "Test Page", "http://www.google.com/landing/cloudprint/testpage.pdf");
		}
	</script>
</head>
<body>
 <form action="checklogin.php" method="post">
	 <table style="margin:15px auto;" align="center">
		 <tr>
			<td colspan="3"><h2>Login:</h2></td>
		 </tr>
		 <tr>
			<td>Username:</td>
			<td><input type="text" name="username"/></td>
		 </tr>
		 <tr>
			<td>Password:</td>
			<td><input type="password" name="password"/></td>
		 </tr>
		 <tr>
			<td></td>
			<td align="right"><input type="submit" name="Submit" value="Login"/></td>
		 </tr>
	</table>
 </form>
<div align=center>
	<FORM> Anda Belum terdaftar? Daftar di sini
		<INPUT Type="BUTTON" VALUE="register" ONCLICK="window.location.href='register.html'"> 
	</FORM>
</div>

<div id="print_button_container"></div>

</body>

</html>