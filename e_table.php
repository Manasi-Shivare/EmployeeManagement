<?php include 'header.php';
include 'dbconnect.php';
if(isset($_POST['delete']))
{

  $sql="delete from emp where id='".$_POST['id']."'";
  if(mysqli_query($conn,$sql))
  {

    echo "Deleted";
  }
  else
  {

    echo "not deleted";
  }
}


 ?>


    
        <h2 class="mb-4"> Employee</h2>

        <div class="container">
         <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Employee Name</th>
    
      <th scope="col"> Salary</th>
       <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $counter=1;
    $sql=mysqli_query($conn,"select * from emp");
    while ($row=mysqli_fetch_assoc($sql)) 
{
    echo '<tr>
    <form action="add_emp.php" method="post">
    <input type="hidden" name="id" value="'.$row['id'].'">
      <th scope="row">'.$counter++.'</th>
      <td>'.$row['e_name'].'</td>
       <input type="hidden" name="e_name" value="'.$row['e_name'].'">
       
       <td>'.$row['salary'].'</td>
       <input type="hidden" name="salary" value="'.$row['salary'].'">
      <td><input type="submit" value="Edit" class="btn btn-success" name="edit"></td>
      </form>

      <form action="e_table.php" method="post">
    <input type="hidden" name="id" value="'.$row['id'].'">
        <td><input type="submit" value="Delete" class="btn btn-danger" name="delete"></td>
        </form>
    </tr>';
  }
    ?>
    
  </tbody>
</table>
        </div>
      


        
      </div>
    </div>
<?php include 'footer.php'; ?>
 