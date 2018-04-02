<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!-- Latest compiled and minified CSS & JS -->
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="daftar_service.js"></script>
    

</head>
<body>


<div class="container">
<div class="row">
<div class="col-md-12">
<h2></h2>
<div class="pull-right">
<!--Button triger modal-->
<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
<!--End button triger modal-->
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h4>Records:</h4>
<div class="records_content"></div>
</div>
</div>
</div>



<!-- Bootstrap Modal - To Add New Record -->
<!-- Modal -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" id="myModalLabel">Tambah Data Konsumen</h4>

</div>
<div class="modal-body">
 
<div class="form-group">
<label for="namabara">Nama konsumen</label>
<input type="text" id="namakonsumen"  class="form-control" />
</div>
 
<div class="form-group">
<label for="hargabarang">Alamat konsumen</label>
<input type="text" id="alamatkonsumen"  class="form-control" />
</div>

TTL
  <input class="form-control" type="date" id="tanggal" >
  <br>
 
<!--Jenis Kelamin
     <input id="gender" type="radio" name="gender"  value="laki-laki" checked> Laki-laki
     <input id="gender" type="radio" name="gender"  value="perempuan" > Perempuan
 -->
 <div class="form-group">
                     <label for="update_Gender">Jenis Kelamin</label>
                        <select class="form-control" name="gender" id="gender">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                         
                        </select>
                        </div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
</div>
</div>
</div>
</div>
<!--End Of Modal For Add -->




</body>
</html>