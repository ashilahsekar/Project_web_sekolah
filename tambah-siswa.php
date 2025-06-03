<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//ambil value dari input
	$nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilai = $_POST['nilai'];

    $query = mysqli_query($conn, "SELECT * FROM daftar_nilai WHERE nama = '$nama' ");
    if($query === false) {
        echo "Error: " . mysqli_error($conn);
    }else {
        if(mysqli_num_rows($query) > 0) {
            header("location:Belajar2.php");
        }else {
            $insert = mysqli_query($conn, "INSERT INTO daftar_nilai (nisn, nama, kelas, nilai) VALUES ('$nisn', '$nama', '$kelas', '$nilai') ");
        } if ($insert) {
            header("location:Belajar2.php");
            exit;
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($conn);
        }
    }
    

    $sql = "INSERT INTO daftar_nilai (nisn, nama, kelas, nilai) VALUES ('$nisn', '$nama', '$kelas', '$nilai')";
    header("location.Belajar2.php");

    if($conn->query($sql)) {
    	echo "<script>window.location.href = 'Belajar2.php'</script>";
        header("location:Belajar2.php");
        }else {
            echo"error";
        }
}
?>