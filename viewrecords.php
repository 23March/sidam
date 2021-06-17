<?php
    $title='Data Mahasiswa';
    require_once 'header.php';
    require_once 'koneksi.php';

    //get all attendees
    $results = $crud->getMahasiswas();
?>

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th> 
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Actions</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
                <td><?php echo $r['mahasiswa_id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <td><?php echo $r['gender'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php }?>
    </table>

<br>
<br>
<br>
<?php require_once 'footer.php';?> 