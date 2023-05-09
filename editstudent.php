<?php
include('common/headerandnav.php');
include('config/dbcon.php');

if(isset($_REQUEST['update']))
{
    if(($_REQUEST['studentname'] == "")||($_REQUEST['rollno'] == "")||($_REQUEST['class'] == "")||($_REQUEST['gender'] == "")||($_REQUEST['dob'] == "")||($_REQUEST['address'] == "")){
        echo "Error";
    }
    else{
    $studentname = $_REQUEST['studentname'];
    $rollno = $_REQUEST['rollno'];
    $class = $_REQUEST['class'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];

    $query = "UPDATE students set `studentname` = '$studentname', `rollno` = '$rollno', `class` = '$class', `gender` = '$gender', `dob` = '$dob', `address` = '$address' WHERE `id` = {$_REQUEST['id']}";
    $query_run = $conn->exec($query);

    echo "Student Data Updated";
}
}
?>


<div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Student</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
 
 <section class="content">
        <?php
            if(isset($_REQUEST['edit'])){
                $query = "SELECT * FROM students WHERE id = {$_REQUEST['id']}";
                $result = $conn->query($query);
                $row = $result->fetch(PDO::FETCH_ASSOC);
            }
        ?>
    <form action="" method="POST">
<div class="row">
<div class="col-md-6">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Student Information</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="form-group">
<label for="inputName">Student Name</label>
<input type="text" name="studentname" id="inputName" class="form-control" value="<?php if(isset($row['studentname'])){echo $row['studentname'];} ?>">
</div>

<div class="form-group">
<label for="inputName">Roll No</label>
<input type="text" name="rollno" id="inputName" class="form-control" value="<?php if(isset($row['rollno'])){echo $row['rollno'];} ?>">
</div>

<div class="form-group">
<label for="inputStatus">Class</label>
<select id="inputStatus" name="class" class="form-control custom-select">
<option selected="" disabled="">Select one</option>
<option value="10">10th</option>
<option value="9">9th</option>
<option value="8">8th</option>
<option value="7">7th</option>
<option value="6">6th</option>
</select>
</div>

<div class="form-group">
<label for="inputDescription">Gender</label>
<div class="form-check">
<input class="form-check-input" type="radio" value="male" name="gender">
<label class="form-check-label">Male</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="gender" value="female">
<label class="form-check-label">Female</label>
</div>
</div>

<div class="form-group">
<label>Date of Birth</label>
<div class="input-group date" id="reservationdate" data-target-input="nearest">
<input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="dob" value="<?php if(isset($row['dob'])){echo $row['dob'];} ?>">
<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
<div class="input-group-text"><i class="fa fa-calendar"></i></div>
</div>
</div>
</div>

<div class="form-group">
<label for="inputDescription">Address</label>
<textarea id="inputDescription" name="address" class="form-control" rows="4"><?php if(isset($row['address'])){echo $row['address'];} ?></textarea>
</div>

<input type="hidden" name="id" value="<?php echo $row['id'] ?>">

<input type="submit" name="update" value="Update" class="btn btn-success float-right">
</div>

</div>

</div>

</div>
</form>
</section>
    <!-- /.content -->
  </div>

<?php
include('common/footer.php');
?>