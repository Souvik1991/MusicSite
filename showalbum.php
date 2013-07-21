<?php
mysql_connect("mysql11.000webhost.com","a1035289_souvik","M6n2l4s2") or die("databse connetion error");
mysql_select_db("a1035289_song") or die("databse not select");
?>
<!DOCTYPE html>
<HTML>
 <HTML>
 <HEAD>
  <TITLE> Show Album </TITLE>
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
					height:275px;
					width:275px;
					border:7px solid #ddd;
				}
				#img:hover
				{
					-webkit-transform: scale(1.12);
					-moz-transform: scale(1.12);
					-o-transform: scale(1.12);
					transform: scale(1.12);
					box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
				}
					#td
					{
						text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
						font-size:x-large;	
					    font-family:Segoe UI Light;
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
 <form name=form1>
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
    					$sql = "SELECT  `main`.`album_name` ,  `main`.`image_path` FROM `main` where `type`='album'";
						$res = mysql_query($sql);
						echo "<TABLE cellpadding=10 width=100%>";
						while($row=mysql_fetch_array($res))
						{
							$c++;
							if($c==1)
							{
								echo "<TR>";
							}
							echo "<TD align=center id=td><A HREF='playsong.php?alname=$row[album_name]'><img src='$row[image_path]' id=img /><br>$row[album_name]</A></TD>";
    						if($c==3)
                {
                $c=0;
                }
            }
						echo "</TABLE>";
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
        				<TD align='right'><h3>Contact Me at: &nbsp; &nbsp; </h3><a href="http://www.facebook.com/amisouvik91"><img src="http://uploadingit.com/file/msn6kl1czgcx9gks/facebook.png" height="32" width="32" title="Facebook"></a>&nbsp; &nbsp; <a href="#"><img src="http://uploadingit.com/file/ww3krfbrgkvl4yje/twitter.png"  height="32" width="32" title="Twitter" /></a>&nbsp; &nbsp; <a href="#"><img src="http://uploadingit.com/file/bowrldc6gjdkoc9s/gmail.png"  height="32" width="32" title="gmail"></a>&nbsp; &nbsp; &nbsp; &nbsp; </TD>
					</TR>
					</TABLE>
				</div>
		</div>
	</form>	
 </BODY>
</HTML>		
