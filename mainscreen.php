﻿<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>Sample form to take user input in XHTML</title>
<style type = "text/css">
.prompt { color: Black;
font-family: sans-serif;
font-size: large }
</style>
</head>
<body>
<h1>Baseball Statistics</h1>
<!-- post form data to form.php -->
<form method = "post" action = "form.php">
<div>
<span class = "prompt">
Please use the dropdown menus to search for the statistics you want.<br />
NOTE: You do not have to fill them all out. <br />
<br />
</span>
<!-- create dropdowns for queiries -->
<p>
League:  <br />
<select league = "lea">
<option value  =""?> Select...</option>
</select>
</p>

<p>
PlayerID:  <br />
<select playerID = "pID">
<option value  =""?> Select...</option>
</select>
</p>

<p>
GameID: <br />
<select gameID = "gID"> 
<option value  =""?> Select...</option>
</select>
</p>

<p>
Inning: <br />
<select inning = "inn"> <br />
<option value  =""?> Select...</option>
</select>
</p>

