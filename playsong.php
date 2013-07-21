<?php
mysql_connect("mysql11.000webhost.com","a1035289_souvik","M6n2l4s2") or die("databse connetion error");
mysql_select_db("a1035289_song") or die("databse not select");
?>
<!DOCTYPE html>
<HTML>
 <HTML>
 <HEAD>
  <TITLE> Play Song </TITLE>
  <link rel="shortcut icon" href="http://farm3.staticflickr.com/2845/9274536857_65a2c41437_o.png" >
  <style type="text/css">
   #wrapper
   {
   width:1024px;
   margin:auto;
   }
      #header
      {
      background-color:#45AAC7;
		padding: 9px 65px;
		text-decoration:none;
		font-size:xx-large;
		font-family:Segoe UI Light;
		font-weight:bold;
		opacity:0.7;
		text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
	  }
			/* //////////////// Start Body part //////////////// */
			#b_con
    		{
				background-color: #7373AB;
				opacity:0.7;
				-webkit-border-radius: 14px;
				-moz-border-radius: 14px;
				-o-border-radius: 14px;
				border-radius: 14px;
			}		
				#img
				{
					height: 500px;
					width: 500px;
					border:7px solid #ddd;
				}
					#name
					{
						font-size:40px;
						font-family:Segoe UI Light;
						font-weight:bold;
						text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
						color:white;
					}
						#sname
						{
						font-size:x-large;
						font-family:Segoe UI Light;
						text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
						color:white;
						}
			/* //////////////// End Body part //////////////// */
			   body
			  {
			   background:url(http://farm3.staticflickr.com/2883/9269045267_9f5aa6aac3_o.png);
			   font-family:Segoe UI Light;
			   margin:0; 
			   padding:0;
			  }
			  #footer
			  {
				background-color:black;
				opacity:0.7;
				text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
			  }
				  a,h3
				  {
					text-decoration:none;
					color:white;
					text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
				  }
  </style>
 </HEAD>
 <BODY>
  <div id="wrapper">
		<div id="header">
			<a href=welcome.php><img src="http://farm4.staticflickr.com/3738/9269051727_4fcc97ae97_o.png" height='3%' width='3%'/>&nbsp;GaanaSuno</a>
		</div>
		<!--////////////////////////// End of Header /////////////////////-->
		<br>
    		<div id='b_con'>
				<br><br>
					<CENTER>
						<?php
							if($_GET[alname])
							{
								$sql = "SELECT `image_path` , `album_name` FROM `main` WHERE  `album_name` =  '$_GET[alname]'";
								$res = mysql_query($sql);
								$row = mysql_fetch_array($res);
								echo "<TABLE width=100% style='margin-left:20px; margin-right:20px' cellspacing=40>
								<TR>
									<TD ROWSPAN=2 valign=top><image SRC='$row[image_path]' id=img></TD>
									<TD align='center' valign='middle' id=name>$row[album_name]</TD>
								</TR>";
								echo "<TR>
									<TD valign=top id=sname>";
								$sql1="SELECT  `song`.`song_path`,`song`.`song_name` FROM  `song` , `main` WHERE `song`.`song_id` =  `main`.`id` AND  `main`.`album_name` = '$_GET[alname]'";
								$res1 = mysql_query($sql1);
								while($row1 = mysql_fetch_array($res1))
								{
									$c++;
									echo "$c. &nbsp; $row1[song_name]<br>
									<audio controls>
									  <source src='$row1[song_path]' type='audio/mpeg'>
									</audio><br>";
								}
								echo "</TD>
								</TR>
								</TABLE>";
							}
						?>
			<!-- //////////////////// End of album selcet code //////////////////-->
						<?php
							if($_GET[mood])
							{
								$sql = "SELECT `image_path` , `album_name` FROM  `main` WHERE  `album_name` =  '$_GET[mood]'";
								$res = mysql_query($sql);
								$row = mysql_fetch_array($res);
								echo "<TABLE width=100% style='margin-left:20px; margin-right:20px' cellspacing=40>
								<TR>
									<TD ROWSPAN=2 valign=top><image SRC='$row[image_path]' id=img></TD>
									<TD align=center id=name>$row[album_name]</TD>
								</TR>";
								echo "<TR>
									<TD valign=top id=sname>";
								$sql1="SELECT  `song`.`song_path`,`song`.`song_name` FROM  `song` , `main` WHERE `song`.`song_id` =  `main`.`id` AND  `main`.`album_name` = '$_GET[mood]'";
								$res1 = mysql_query($sql1);
								while($row1 = mysql_fetch_array($res1))
								{
									$c++;
									echo "$c. &nbsp; $row1[song_name]
									<audio controls>
									  <source src='$row1[song_path]' type='audio/mpeg'>
									</audio><br>";
								}
								echo "</TD>
								</TR>
								</TABLE>";
							}
						?>
					</CENTER>
				<br><br>
			</div>
		<br>
		<!--////////////////////////// Start of Footer /////////////////////-->
		<div id="footer">
					<TABLE cellspacing=2 width=100%>
					<TR>
						<TD><h3>&nbsp; &nbsp; &copy; Souvik Maity Product 2013.</h3></TD>
        				<TD align='right'><h3>Contact Me at: &nbsp; &nbsp; </h3><a href="http://www.facebook.com/amisouvik91"><img src="http://uploadingit.com/file/msn6kl1czgcx9gks/facebook.png" height="32" width="32" title="Facebook"></a>&nbsp; &nbsp; <a href="#"><img src="http://uploadingit.com/file/ww3krfbrgkvl4yje/twitter.png"  height="32" width="32" title="Twitter" /></a>&nbsp; &nbsp; <a href="#"><img src="http://uploadingit.com/file/bowrldc6gjdkoc9s/gmail.png"  height="32" width="32" title="gmail"></a>&nbsp; &nbsp; &nbsp; &nbsp;</TD>
					</TR>
					</TABLE>
				</div>
		</div>
		
 </BODY>
</HTML>
