

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5</title>
</head>
<body>
    <form action="" id="formMahasiswa" >
        <label for="prodi">Program Studi: </label>
        <select name="prodi" id="prodi">
            <option value="IF">Teknik Informatika</option>
            <option value="GL">Teknik Geologi</option>
            <option value="SI">Teknik Sipil</option>
            <option value="GM">Teknik Geomatika</option>
            <option value="BI">Biologi</option>
            <option value="EL">Teknok Elektro</option>
            <option value="TP">Teknik Pangan</option>
            <option value="FM">Farmasi</option>
        </select>
    </form>

    <div id="tampil_data"></div>


    <script src = "https://code.jquery.com/jquery-3.6.1.min.js"
        integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin = "anonymous">
    </script>

    <script>
        // $(document).ready(function () {
        //     $("#tampil_data").load("lihat.php");
        //     $("#prodi").click(function () {
        //         let data = $("#formMahasiswa").serialize();
        //         $.ajax({
        //             type : "POST",
        //             url : "info.php",
        //             data : "request=" + value,
        //             success : function (response) {
        //             $("#tampil_data").load("lihat.php");
        //             }
        //         });
        //     });
        // });

        $(document).ready(function(){
        $("#prodi").change(function(){
            var value=$(this).val();
        $.ajax({
            url:"lihat.php",
            type:"POST",
            data:"request=" + value,
            success:function(data){
                $("#tampil_data").html(data);
            }
        }) 
    });
    });
    </script>
</body>
</html>