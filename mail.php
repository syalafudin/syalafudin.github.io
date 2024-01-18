<?php
    // Ambil data dari formulir
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Tujuan email
    $to = "syalafudinf@gmail.com";

    // Subject email
    $subject = "Pesan baru dari formulir kontak";

    // Isi pesan
    $pesan = "Nama: " . $name . "\n" . "Email: " . $email . "\n" . "Pesan: " . $message;

    // Set header
    $headers = "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    // Kirim email
    mail($to, $subject, $pesan, $headers);

    // Redirect ke halaman sukses
    header("Location: success.html");
    exit();
?>
