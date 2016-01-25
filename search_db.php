
<?php
require 'header.php';

echo '<h1>Search Results</h1>';

  $searchVal = $_POST['search'];
  
//   $sql = "SELECT EMPLOYEES.EMPLOYEE_ID,EMPLOYEES.FIRST_NAME, EMPLOYEES.LAST_NAME, EMPLOYEES.PHONE_NUMBER, EMPLOYEES.EMAIL, DEPARTMENT.DEPARTMENT_NAME FROM DEPARTMENTS WHERE EMPLOYEES.LAST_NAME LIKE '{$searchVal}%' OR EMPLOYEES.FIRST_NAME LIKE '{$searchVal}%'";
$sql = "SELECT EMPLOYEES.EMPLOYEE_ID,EMPLOYEES.FIRST_NAME, EMPLOYEES.LAST_NAME, EMPLOYEES.PHONE_NUMBER, DEPARTMENTS.DEPARTMENT_NAME, EMPLOYEES.EMAIL, DEPARTMENTS.MANAGER_ID, LOCATIONS.STREET_ADDRESS, JOBS.JOB_TITLE

FROM DEPARTMENTS

INNER JOIN EMPLOYEES
ON EMPLOYEES.DEPARTMENT_ID=DEPARTMENTS.DEPARTMENT_ID

INNER JOIN LOCATIONS
ON DEPARTMENTS.LOCATION_ID=LOCATIONS.LOCATION_ID

LEFT JOIN JOBS
ON EMPLOYEES.JOB_ID=JOBS.JOB_ID
WHERE EMPLOYEES.LAST_NAME LIKE '{$searchVal}%' OR EMPLOYEES.FIRST_NAME LIKE '{$searchVal}%'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    //output data of each row
    echo '<table>
  <thead>
    <tr>
      <th>Employee ID</th>
      <th>Last Name</th>
      <th>First Name</th>
      <th>Phone Number</th>
      <th>Department Name</th>
      <th>Manager ID</th>
      <th>Street Address</th>
      <th>Job Title</th>
    </tr>
  </thead>
  <tbody>';
    while ($row = $result->fetch_assoc()) {
      if($row["JOB_TITLE"]!=""){
        $jobTitle = $row["JOB_TITLE"];
      } else {
        $jobTitle = "N/A";
      }
        printf ("<tr><td>%d</td><td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%d</td> <td>%s</td> <td>%s</td></tr>",$row["EMPLOYEE_ID"], $row["LAST_NAME"], $row["FIRST_NAME"], $row["PHONE_NUMBER"], $row["DEPARTMENT_NAME"], $row["MANAGER_ID"], $row["STREET_ADDRESS"], $jobTitle);
      
    }
    echo '</tbody></table>';
    
    if ($result->num_rows == 0) {
    echo "0 results <br>";
    }
    
  }
  $conn->close();
    require 'footer.php'
?>	
