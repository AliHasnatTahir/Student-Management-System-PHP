<?php
include('common/headerandnav.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Student</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <form action="code.php" method="POST">
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
<input type="text" name="studentname" id="inputName" class="form-control">
</div>

<div class="form-group">
<label for="inputName">Roll No</label>
<input type="text" name="rollno" id="inputName" class="form-control">
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
<input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="dob">
<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
<div class="input-group-text"><i class="fa fa-calendar"></i></div>
</div>
</div>
</div>

<div class="form-group">
<label for="inputDescription">Address</label>
<textarea id="inputDescription" name="address" class="form-control" rows="4"></textarea>
</div>


<input type="submit" name="save" value="Save" class="btn btn-success float-right">
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