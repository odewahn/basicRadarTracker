<?php
   include "config.php";

   $content_page_url = "";
   $page = $_GET["page"];
   $action=$_GET["action"];

   if (strlen($page) == 0) { $page = "home"; }

   if ($action == "nominate") {
      $content_page_url = $config["base_url"]."action_nominate.php?page=".$page;
   } else {
      $content_page_url = $config["base_url"]."action_show.php?page=".$page;
   }

   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>O'Reilly Research</title>

   <link rel="stylesheet" type="text/css" href="styles/layout.css" />
   <link rel="stylesheet" type="text/css" href="styles/horizontal_nav.css" />

</head>

<body>
<div id="maincontainer">

<div id="topsection"><div class="innertube">

<div id="header">
<table>
   <tr>
      <td> <img src="http://cdn.oreilly.com/radar/images/radar_logo.gif"/></td>
      <td style="padding: 5px"> <h1><?echo $config["site_title"]; ?></h1></td>
   </tr>
</table>

<ul class="nav">
   <li>
      <strong><a href="index.php?page=home">Home</a></strong>
   </li>
   <li>
      <strong><a href="index.php?page=topic_map">Topic Map</a></strong>
   </li>
   <li>
      <strong><a href="index.php?page=principles&action=show">Principles</a></strong>
      <ul>
         <li><a href="index.php?page=principles&action=nominate">Nominate a principle</a></li>
      </ul>
   </li>
   <li>
      <strong><a href="index.php?page=people&action=show">People</a></strong>
      <ul>
         <li><a href="index.php?page=people&action=nominate">Nominate a person</a></li>
      </ul>
   </li>
   <li>
      <strong><a href="index.php?page=projects&action=show">Projects</a></strong>
      <ul>
         <li><a href="index.php?page=projects&action=nominate">Nominate a project</a></li>
      </ul>
   </li>
   <li>
      <strong><a href="index.php?page=organizations&action=show">Organizations</a></strong>
      <ul>
         <li><a href="index.php?page=organizations&action=nominate">Nominate an organization</a></li>
      </ul>
   </li>
   <li>
      <strong><a href="index.php?page=technologies&action=show">Technologies</a></strong>
      <ul>
         <li><a href="index.php?page=technologies&action=nominate">Nominate a technology</a></li>
      </ul>
   </li>
   <li>
      <strong><a href="index.php?page=events&action=show">Events</a></strong>
      <ul>
         <li><a href="index.php?page=events&action=nominate">Nominate an event</a></li>
         <li><a href="index.php?page=oscon&action=show">View OSCON 2010 Presenters</a></li>
      </ul>
   </li>
</ul>


</div></div>

<div id="contentwrapper">
<div id="contentcolumn">
<div class="innertube">
<?php
   echo file_get_contents($content_page_url);
?>

</div>
</div>
</div>

<!--
<div id="leftcolumn">
<div class="innertube">
This is the content for the inner column that all goes here
</div>
</div>
-->

<div id="footer">
   Footer content goes here
</div>

</div>


</body>
</html>

