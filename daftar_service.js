// Add Record 
function addRecord() {
    // get values
    var namakonsumen = $("#namakonsumen").val();
    var alamatkonsumen = $("#alamatkonsumen").val();
    var tanggal = $("#tanggal").val();
    var gender = $("#gender").val();

    if (namakonsumen.trim() == '') {
        alert('Masukkan Nama Konsumen.');
        $('#namakonsumen').focus();
        return false;
    }
    else if (alamatkonsumen.trim() == '') {
        alert('Masukkan alamat konsumen.');
        $('#alamatkonsumen').focus();
        return false;

    }
    else if (tanggal == '') {
        alert('Masukkan TTL konsumen.');
        $('#tanggal').focus();
        return false;

    } else {
        // Add record
        $.post("konsumen/Insertkonsumen.php", {
            namakonsumen: namakonsumen,
            alamatkonsumen: alamatkonsumen,
            tanggal: tanggal,
            gender: gender

        }, function (data, status) {
            // close the popup

            $("#add_new_record_modal").modal("hide");



            // read records again
            readRecords();

            // clear fields from the popup
            $("#namakonsumen").val("");
            $("#alamatkonsumen").val("");
            $("#tanggal").val("");



        });

    }


}


function GetUserDetails(idkonsumen) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(idkonsumen);
    $.post("konsumen/DetailKonsumen.php", {
        idkonsumen: idkonsumen
    },

        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#updatenamakonsumen").val(user.namakonsumen);
            $("#updatealamat").val(user.alamatkonsumen);
            $("#updatetanggal").val(user.ttl);
            $("#updategender").val(user.jenis_kelamin);

        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}


// READ records
function readRecords() {
    $.get("daftar_service/daftar_service.view.php", {}, function (data, status) {
        $(".records_content").html(data);

    });
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});
