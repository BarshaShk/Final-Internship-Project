

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Teacher Dashboard</title>

    <link rel="stylesheet" type="text/css" href="teacher.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>
<header class="header">

    <a href="">Teacher Dashboard</a>

    <div class="logout">

        <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>

</header>

<aside>
    <ul>
        
        <li>
        
            <a href="add_student.php">Add Student</a>
        </li>

        <li>
            
            <a href="editstudent.php">View Student</a>
        </li>

        <li>
            
            <a href="add_result.php">Add Result</a>
        </li>

        <li>
            
            <a href="view_results.php">View Results</a>
        </li>

       
    </ul>

</aside>

<div class="content">

    <center>
        <h1>Student Result Update</h1>
  
        <form action="insertresult.php" method="post">


<p>
                <label for="studentname">Student Name:</label>
                <input type="text" name="studentname" id="studentname">
            </p>
  
              
              
<p>
                <label for="coursename">Course Name:</label>
                <input type="text" name="coursename" id="coursename">
            </p>
  
  
              
              
<p>
                <label for="examdate">Exam Date:</label>
                <input type="number" name="examdate" id="examdate">
            </p>
  
              
              
<p>
                <label for="result">Result:</label>
                <input type="number" name="result" id="result">
            </p>



  
              
            <input type="submit" value="Submit">



        </form>


    </center>
</body>
  
</html>