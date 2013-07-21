<!DOCTYPE html>
<HTML>
 <HTML>
 <HEAD>
  <TITLE> Choose Your Mood </TITLE>
  <link rel="shortcut icon" href="http://farm3.staticflickr.com/2845/9274536857_65a2c41437_o.png" >
        <script type=text/javascript>
          function fun()
			{
				//window.location.replace('welcome.html');
				var x=document.form1.dropdown1.value;
				if(x!=-1)
				{
					window.location.replace('playsong.php?mood='+x);
				}
				else
				{
					alert('Please Select Your Mood'); 
				}
			}
		</script>
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
				#i_fl
				{
					color: white;
					font-size: 50px;
					font-weight: bold;
					text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
				}
					#next
					{
						padding: 8px 20px;
						background-color: #6AB1A9;
						width: 25%;
						font-size:xx-large;	
						/*font-weight:bold;*/
                        font-family:Segoe UI Light;
                        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
					}
					#next:hover
					{
						background-color: #76C3BD;
                        box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
					}
                        #dd
    					{
							padding: 15px 25px;
							font-size: xx-large;
							background: #45AAC7;
                            color: #fff;
							outline: none;
							text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
                            font-family:Segoe UI Light;
                            opacity: 0.8;
                            box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);
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
				<CENTER>
				<br><br><br><br><BR><br>
				<div id='i_fl'> 
    				I Feel Like Listening &nbsp;&nbsp;
					<!-- /////////////////////////////////// -->
						<select name=dropdown1 id='dd'>
    						<option value=-1 selected>Pick Your Mood</option>
							<option value=chillax>Chillax</option>
							<option value=in%20love>In Love</option>
							<option value=sad>Sad</option>
						</select>
					</div>
					<br><br><br><br><br><br>
				<div id='next'>
				<a href="#" onclick='return fun();'><img src="http://farm4.staticflickr.com/3676/9271833424_752a43997e_o.png" height='32' width='32' style="margin-bottom:-4px"/>&nbsp;Start Listening<a>
				</div>
				<br><br><br><br><br>
				</CENTER>
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
