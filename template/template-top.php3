<!-- Start of template-top.php3 -->
<BODY text="#000000" link="#0000ff" vlink="#551a8b" alink="#ff0000" 
bgcolor="#ffffff">
<?php

$REQUEST_URI=$_SERVER["REQUEST_URI"];
$QUERY_STRING=$_SERVER["QUERY_STRING"];

  if(preg_match("/printable/i",$QUERY_STRING)) {
    // Printer mode.
//    echo "Printer mode<P>\n";

  } else {
?>

<IMG SRC="http://www.goslingcommunity.org/goslingtheme.gif" ALIGN="CENTER" 
BORDER="0">


<table cellpadding=2 cellspacing=1 border=0 bgcolor="#004239" 
align="CENTER">

  <tr>
    <td nowrap ALIGN="CENTER">
      &nbsp;<a href="/"><font 
face="arial,helvetica" color="<?php
  if (preg_match("/^\/$/i",$REQUEST_URI)) {
    echo "#FF9C39";
  } else {
    echo "#FFFFFF";
  }
?>" size=2><b>Home</b></font></a>&nbsp;
    </td>

    <td nowrap ALIGN="CENTER">
      &nbsp;<a href="/links.shtml"><font 
face="arial,helvetica" color="<?php
  if (preg_match("/^\/links.shtml$/i",$REQUEST_URI)) {
    echo "#FF9C39";
  } else {
    echo "#FFFFFF";
  }
?>" size=2><b>Links</b></font></a>&nbsp;
    </td>

    <td nowrap ALIGN="CENTER">
      &nbsp;<a href="/contact.shtml"><font 
face="arial,helvetica" color="<?php
  if (preg_match("/^\/contact.shtml$/i",$REQUEST_URI)) {
    echo "#FF9C39";
  } else {
    echo "#FFFFFF";
  }
?>" size=2><b>Contact&nbsp;Us</b></font></a>&nbsp;
    </td>

    <td nowrap ALIGN="CENTER">
      &nbsp;<a href="/forum.shtml"><font 
face="arial,helvetica" color="<?php
  if (preg_match("/^\/forum.shtml$/i",$REQUEST_URI)) {
    echo "#FF9C39";
  } else {
    echo "#FFFFFF";
  }
?>" size=2><b>Forums</b></font></a>&nbsp;
    </td>

    <td nowrap ALIGN="CENTER">
      &nbsp;<a href="/events.shtml"><font 
face="arial,helvetica" color="<?php
  if (preg_match("/^\/events.shtml$/i",$REQUEST_URI)) {
    echo "#FF9C39";
  } else {
    echo "#FFFFFF";
  }
?>" size=2><b>Events</b></font></a>&nbsp;
    </td>

  </tr>

  <TR>
  <TD COLSPAN=5 ALIGN="CENTER"><A HREF="http://www.meetup.com/Promoting-Open-Source-Libre-to-the-Canadian-government/" target="_GOSLINGMEET"><FONT face="arial,helvetica" color="#FFFFFF">Join us for our weekly meetup</FONT></A></TD>
  </TR>


</TABLE>




<P>

<?php
  } // End of non-printer mode
?>
<!-- End of template-top.php3 -->
