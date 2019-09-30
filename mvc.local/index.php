<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel='stylesheet' href='style.index.css'/>
</head>
<body>
    <div class="text-box">
<h1>Portfolio</h1>
<p>A showcase of the projects made during my Be-Code training.</p>
<form method="GET">
    <button type="submit" id="GoToProjects" name="GoToProjects"> Show me! </button>
</form>
</div>
</body>
</html>
<?php
if (isset($_GET["GoToProjects"])) {
    header("Location: ../MVC/");
}
?>