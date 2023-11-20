<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?= $data['title'] ?> </title>

</head>

<style>
/* CSS untuk tabel */
table {
    border-collapse: collapse;
    width: 100%;
    max-width: 800px; /* Maksimum lebar tabel */
    margin: 0 auto; /* Pusatkan tabel di tengah halaman */
    font-family: Arial, sans-serif;
    border: 1px solid #ddd; /* Garis tepi tabel */
}

th, td {
    border: 1px solid #ddd; /* Garis tepi sel */
    padding: 8px;
    text-align: left;
}

th {
    background-color: lightgray; /* Warna latar belakang header */
}

tr:nth-child(even) {
    background-color: #f2f2f2; /* Warna latar belakang baris genap */
}

/* Hover efek */
tr:hover {
    background-color: #ccc;
}
</style>

<body>

<div class="container">

<table>
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Kuantitas</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>

        <?php foreach($data as $item) : ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nama'] ?></td>
            <td><?= $item['kuantitas'] ?></td>
            <td><a href="Update.php">Edit</a></td>
            <td><a href="x">Hapus</a></td>
        </tr>
        <?php endforeach ?>

</table>
