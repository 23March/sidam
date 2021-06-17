
<?php 
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
  
    
    if(isset($_POST['submit'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        //$orig_file = $_FILES["avatar"]["tmp_name"];
        //$ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        //$target_dir = 'uploads/';
        //$destination = "$target_dir$contact.$ext";
        //move_uploaded_file($orig_file,$destination);

        $isSuccess = $crud->insertAttendees($fname, $lname, $gender, $dob, $email, $contact, $specialty);
        //$specialtyName = $crud->getSpecialtyById($specialty);

        if($isSuccess){
            include 'includes/successmessage.php';
        }
        else{
            include 'includes/errormessage.php';
        }
    }

?>
    
<h1 class="text-center text-success"> Anda telah melakukan registrasi! </h1>

<div class="card" style="width: 30rem;">
    <div class="card-body">
    <h5 class="card-title"><?php echo  $_POST['FirstName']. ' '. $_POST['LastName']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo  $_POST['specialty']; ?></h6>
    <p class="card-text">
        Tanggal Lahir : <?php echo  $_POST['dob']; ?>
    </p>
    <p class="card-text">
        Jenis Kelamin : <?php echo  $_POST['gender']; ?>
    </p>
    <p class="card-text">
        Email : <?php echo  $_POST['email']; ?>
    </p>
    <p class="card-text">
        Telepon : <?php echo  $_POST['phone']; ?>
    </p>
    
  </div>
</div>
<br>
<?php require_once 'includes/footer.php';?>