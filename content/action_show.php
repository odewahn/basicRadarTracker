<?php
   include "../config.php";
   $page = $_GET["page"];
   $page_to_show = "";

   //Lookup table that maps the given page to a correspondin exhibit template   
   $page_lookup = array (
      "home" => "content_home.php",
      "topic_map" => "content_topic_map.php",
      "people" => "content_people.php",
      "events" => "content_events.php",
      "technologies" => "content_technologies.php",
      "organizations" => "content_organizations.php",
      "projects" => "content_projects.php",
      "principles" => "content_principles.php",
      "oscon" => "content_oscon.php"
  );

  $page_to_show = $config["base_url"].$page_lookup[$page];
?>

<div style="padding: 10px">
   <iframe src="<?php echo $page_to_show; ?>" width="1100" height="1145" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>
