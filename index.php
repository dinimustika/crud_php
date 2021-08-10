<html>
    <head>
        <title>Data Blog</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <h3>Data Blog</h3>
        <div class="container">
            <div class="card col-md-12">
                <table class="table table-striped" style="margin: 10px;">
                    <tr>
                        <td>Nomor</td>
                        <td>Judul Post</td>
                        <td>Isi Post</td>
                        <td>Tanggal Terbit</td>
                        <td>Tema</td>
                        <td>Aksi</td>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $urutkan = mysqli_query($conn, "SELECT*FROM blog");
                    if(mysqli_num_rows($urutkan)){
                        while($data = mysqli_fetch_array($urutkan)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['judul']; ?></td>
                        <td><?php echo $data['isi_blog']; ?></td>
                        <td><?php echo $data['tanggal_terbit']; ?></td>
                        <td><?php echo $data['tema']; ?></td>
                        <td>
                            <button type="button" class="btn btn-info"><a href="edit.php?id=<?php echo $data['id_blog']; ?>" style="color: white">Edit</a></button>
                            <button type="button" class="btn btn-danger"><a onclick="return(confirm('Yakin akan menghapus data blog?'))" href="delete.php?id=<?php echo $data['id_blog']; ?>" style="color: white">Delete</a></button>
                        </td>
                    </tr>
                    <?php }} ?>
                </table>
            </div>
        </div>
    </body>
</html>