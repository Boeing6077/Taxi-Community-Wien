<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $category = $_POST['category'];
    $message = $_POST['message'];

    $inserat = [
        'name' => $name,
        'email' => $email,
        'category' => $category,
        'message' => $message,
        'date' => date('Y-m-d H:i:s')
    ];

    $file = 'inserate.json';
    $data = [];

    if (file_exists($file)) {
        $data = json_decode(file_get_contents($file), true);
    }

    $data[] = $inserat;

    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
    echo "Inserat erfolgreich gespeichert!";
}
?>
