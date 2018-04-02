<!-- Untuk menampilkan tabel di menu-->



<!-- Latest compiled and minified CSS & JS -->
<!--<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
-->



<?require("../koneksi.php");?>
    <?  $Tampil_data = $koneksi->prepare('SELECT * FROM daftar_service ');?>

        <?  $Tampil_data->execute();?>
        <? $daftar = $Tampil_data->fetchAll(PDO::FETCH_OBJ);?>



<table id="tabel-data" class="table table-bordered ">
<thead>
        <tr>
        <th><center> ID Service</center></th>
        <th><center>Nama Service</center></th>
        <th><center>Lihat Detail</center></th>
        <th><center>Update Data</center></th>
        <th><center>Delete Data</center></th>
        </tr>
       <center><center>
       </thead>     
        
            <?php foreach ($daftar as $data):?>
            <tr>
            <center><td><?="$data->id_service " ?></td></center>
                <center><td><?="$data->nama_service " ?></td></center>
                <td><input type="button" name="view" value="view" id="<?php echo $data->id_service; ?>" class="btn btn-info  view_data" /></td>
                <td><button onclick="GetUserDetails('<?echo  $data->id_service?>')" class="btn btn-primary">Update</button></td>
                <td><button onclick="DeleteUser('<?echo $data->id_service?>')" class="btn btn-danger">Delete</button></td>
                


            </tr>
            <?endforeach?>
        </table>
        </div>