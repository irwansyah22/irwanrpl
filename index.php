<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Product Skincare</h2>
    <table border="1">
        <tr>
            <th>Nama barang</th>
            <th>Id Product</th>

        </tr>

        <?php
        include "koneksi.php";
        $query = mysqli_query($koneksi, "select * from product");
        while($data = mysqli_fetch_array($query)){
         ?>
         <tr>
            <td><?php echo $data["nama"]?></td>
            <td><?php echo $data["id_kategori"]?></td>
         </tr>  
         <?php 
        }
        
        ?>
</body>
</html>