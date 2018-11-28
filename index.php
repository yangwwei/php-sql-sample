<html>
  <head>
    <title>A simple PHP web page loads data from sqllite DB</title>
  </head>
  <body>
  <?php
  $db = new SQLite3('/tmp/sample.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
  $results = $db->query('SELECT * FROM "emp"');

  echo "<h2>Following table content is loaded from SQLite3 database, db file: /mnt/data/sample.db</h2>"
  echo "<table border='1'>
    <tr>
      <th>Employ NO</th>
      <th>Name</th>
      <th>Job</th>
      <th>Manager</th>
      <th>Hire data</th>
      <th>Salary</th>
      <th>Comm</th>
      <th>Department NO</th>
    </tr>";
  while ($row = $results->fetchArray()) {
    echo "<tr>";
    echo "<td>" . $row['empno'] . "</td>";
    echo "<td>" . $row['ename'] . "</td>";
    echo "<td>" . $row['job'] . "</td>";
    echo "<td>" . $row['mgr'] . "</td>";
    echo "<td>" . $row['hiredate'] . "</td>";
    echo "<td>" . $row['sal'] . "</td>";
    echo "<td>" . $row['comm'] . "</td>";
    echo "<td>" . $row['deptno'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";

  $db->close();
  ?>
  </body>
</html>
