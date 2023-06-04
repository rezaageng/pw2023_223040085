<?php
require_once '../vendor/autoload.php';

use Dotenv\Dotenv;
use Mpdf\Mpdf;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

$mpdf = new Mpdf();

require './helpers/helpers.php';

$id = $_GET['id'];

if (!$id) {
  header('Location: index.php');
  exit;
}

$item = query("SELECT * FROM news WHERE id = $id")[0];

$html = '<!DOCTYPE html>
<html>
<head>
    <title>' . $item['title'] . '</title>
</head>
<body>
    <main class="max-w-4xl m-auto p-4 mb-16">
        <div class="flex flex-col gap-4 ">
            <h1 class="text-3xl text-center" style="text-align: center;">' . $item['title'] . '</h1>
            <img src="./images/' . $item['image'] . '" alt="image" class="w-full">
            <p class="text-justify" style="text-align: justify;">' . $item['content'] . '</p>
            <script src="https://cdn.tailwindcss.com"></script>
        </div>
    </main>
</body>
</html>';

$mpdf->WriteHTML($html);

$mpdf->Output('news.pdf', 'I');
