<?php
/**
 * Simple form handling example -- we return all input values in a table
 * 
 * Assumes that the request method is POST.
 * With GET it's the same, just replace all instances of $POST with $_GET. 
 */

echo "<html>
<head>
    <title>Form input</title>
    <style>
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
  <tr>
    <td>Name:</td>
    <td>" . $_POST["name"] . "</td>
  </tr>
  <tr>
    <td>Age:</td>
    <td>" . $_POST["age"] . "</td>
  </tr>
  <tr>
    <td>Secret:</td>
    <td>" . $_POST["secret"] . "</td>
  </td>
</table>
</body>
</html>";

?>