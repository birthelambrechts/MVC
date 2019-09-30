<!DOCTYPE html>
<link rel='stylesheet' href='style.list.css'/>
<html>
<body>
<?php
  require "database.php";
  require "models/projects.php";
  require "controllers/controller.php";
  $project = new Projects();
  foreach ($project->get() as $u) {
          echo 

         "<ul class='info'><li> Project title: " .$u['title'] . "</li>" .
         "<li> Link: <a href=".$u['link']."> project </a></li>" .
         "<li> Description: " . $u['description'] . "</li>" .
         "<li> Language: " . $u['lang'] . "</li>" .
         "<li> Made on: " . $u['made'] . "</li>" .
         "<li> Link to code: <a href=".$u['code']."> code </a></li>" .
         "</ul>".
         "<iframe class='iframe' src=".$u['link'].">
        </iframe>" ;
      }

?>

</body>
</html>