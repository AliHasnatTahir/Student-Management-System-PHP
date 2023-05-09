<?php
include('common/headerandnav.php');
include('config/dbcon.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Students list</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students list</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    <?php
        if(isset($_REQUEST['delete'])){
            $sql = "DELETE FROM students WHERE id = {$_REQUEST['id']}";
            $result = $conn->exec($sql);
            if($result){
                echo "<h4>Student Data Deleted</h4>";
            }
            else{
                echo "<h4>Student Data Not Deleted</h4>";
            }
        }

        
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);
        if($result->rowCount() > 0) {
            echo '<table class="table table-bordered">';
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Student Name</th>";
                    echo "<th>Roll No</th>";
                    echo "<th>Class</th>";
                    echo "<th>Gender</th>";
                    echo "<th>DOB</th>";
                    echo "<th>Address</th>";
                    echo "<th>Actions</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row=$result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                        echo "<td>" .$row["studentname"]. "</td>";
                        echo "<td>" .$row["rollno"]. "</td>";
                        echo "<td>" .$row["class"]. "</td>";
                        echo "<td>" .$row["gender"]. "</td>";
                        echo "<td>" .$row["dob"]. "</td>";
                        echo "<td>" .$row["address"]. "</td>";
                        echo '<td><form action="" method="POST"><input type="hidden" name="id" value=' . $row["id"] . '><input type="submit" class="btn btn-danger" name="delete" value="Delete"></form>
                              <form action="editstudent.php" method="POST"><input type="hidden" name="id" value='. $row["id"] .'><input type="submit" class="btn btn-warning" name="edit" value="Edit"></form></td>';

                    echo "</tr>";
            }
                echo "</tbody>";
        echo "</table>";
        }
        else{
            echo "No Records Found";
        }
    ?>

    </section>

</div>
<?php
include('common/footer.php');
?>