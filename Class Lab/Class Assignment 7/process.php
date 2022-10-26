
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
  		table,td {border: 1px solid black;}
  		table {border-collapse: collapse;}
  	</style>
  </head>
  <body>

    <table>
      <tr>
        <td>CourseNo</td>
        <td>title</td>
        <td>Instructor</td>
      </tr>
      <tr>
        <td><?php echo $_POST["CourseNumber"];?></td>
        <td><?php echo $_POST["CourseTitle"];?></td>
        <td><?php echo $_POST["Instructor"];?></td>
      </tr>
    </table>

  </body>
</html>
