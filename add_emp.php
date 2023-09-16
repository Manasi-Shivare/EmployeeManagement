<?php include 'header.php';
error_reporting(0);
include 'dbconnect.php';
if(isset($_POST['btnsubmit']))
{

    $sql="insert into emp(e_name,salary)values('".$_POST['e_name']."','".$_POST['salary']."')";
    if(mysqli_query($conn,$sql))
    {
      echo "<script>alert('Emplyee Added')</script>";
    }
    else
    {
        echo "Record not inserted";
    }
}

//update

if(isset($_POST['btnedit']))
{

    $sql="update emp set e_name='".$_POST['e_name']."',salary='".$_POST['salary']."' where id='".$_POST['id']."'";
    if(mysqli_query($conn,$sql))
    {
       echo '<script type="text/javascript">
                 alert("Emplyee Data updated");
                 location="e_table.php";
            </script>';
    }
    else
    {
        echo "Record not updated";
    }
}
 ?>


    <form action="add_emp.php" method="POST">
        <h2 class="mb-4">Add Employee</h2>
         <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
        <div class="container">
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-12">
                        <label>Employee Name <span style="color: red">*</span></label>
                        <input type="text" name="e_name" onkeypress="javascript:return isString(event)" value="<?php echo $_POST['e_name'] ?>" placeholder="Enter Employee Name" class="form-control" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <label>Employee Salary</label>
                        <input type="text" name="salary" onkeypress="javascript:return isString(event)" value="<?php echo $_POST['salary'] ?>" placeholder="Enter Salary" class="form-control" required="">
                    </div>
                </div>
                <br>
               
                <div class="row">
                    <div class="col-sm-12">
                        <?php

                        if(!$_POST['edit'])
                        {
                        echo '<input type="submit" name="btnsubmit" value="Submit" class="btn btn-primary">';
                        }
                        else
                        {
                        echo '<input type="submit" name="btnedit" value="Edit" class="btn btn-warning">';
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
        </form>


       
      </div>
        </div>
<?php include 'footer.php'; ?>