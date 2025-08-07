<?php
// Simple contact form handler (no database, just email)
// Replace with actual email sending logic or integrate with a mail API in production.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if ($name && $email && $message) {
        // Example: send email (server must be configured with mail)
        $to = 'info@aksipelajar.id';
        $subject = "Pesan dari AKSI PELAJAR Website";
        $headers = "From: $email\r\nReply-To: $email";
        $body = "Nama: $name\nEmail: $email\nPesan:\n$message";
        // mail($to, $subject, $body, $headers); // Uncomment on production

        // For demo purpose, just show success message
        echo "<script>alert('Terima kasih atas pesan Anda!');window.location='index.php#contact';</script>";
        exit;
    } else {
        echo "<script>alert('Mohon lengkapi semua data dengan benar!');window.location='index.php#contact';</script>";
        exit;
    }
}
?>