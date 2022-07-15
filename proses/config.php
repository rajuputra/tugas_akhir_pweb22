<?php
// Start the session
// session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugas_akhir";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $ulangi_password = mysqli_real_escape_string($conn, $data["ulangi_password"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>alert('username sudah digunakan');</script>";
        return false;
    }

    if($password !== $ulangi_password) {
        echo "<script>alert('password tidak sama');</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password') ");

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM anggota WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $hobi = htmlspecialchars($data["hobi"]);

    $query = "INSERT INTO anggota VALUES ('','$nama','$hobi')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = ($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $hobi = htmlspecialchars($data["hobi"]);

    $query = "UPDATE anggota SET
    nama = '$nama',
    hobi = '$hobi'
    WHERE id = $id
    ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}