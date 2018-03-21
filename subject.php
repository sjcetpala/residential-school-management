<form action="#" method="post">
  <?php
include("connection.php");
    $subject_name ="";
    echo "<table border='1'><thead><tr><td>Students Name</td>";
    $query_subjects = mysqli_query($con,"SELECT * FROM subject ORDER BY subject_name ASC");
    while ($row_subject=mysqli_fetch_array($query_subjects))
    {
      $subject_name .= $row_subject['subject_name'];
      echo "<td>".$row_subject['subject_name']."</td>";
    }
    echo "</tr></thead>";
    $query_students = mysqli_query($con,"SELECT id FROM primaryy WHERE id!='NULL'");
    while ($row_students=mysqli_fetch_array($query_students))
    {
      $student_id = $row_students['id'];
      echo "<tr><td>".$row_students['id']."</td>";
      $query_subjects2 = mysqli_query($con,"SELECT * FROM subject ORDER BY subject_name ASC");
      while ($row_subject2 =mysqli_fetch_array($query_subjects2))
      {
        $subject_name2 =$row_subject2['subject_name'];
        echo "<td>
                <input type='hidden'  name='$subject_name2'>
                <input type='text' size='4' name='$subject_name2'>
              </td>";
			  
			  
			  
       
        if (isset($_POST['submit']))
        {
          $score[] = $_POST['$subject_name2'];
		//  $score = $_POST['score'];
    foreach ($score as $key) 
    {
    $query = "INSERT INTO score_sheet(student_id,subject_name,score) VALUES('$student_id','$subject_name2','$key') ";   
    $query = mysqli_query($con,$query);    
    }
      }
    } 
	}	
  ?>
  <input type='submit' name='submit'>
</form>