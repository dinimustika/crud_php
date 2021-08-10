<html>
    <head>
        <title>Edit Data</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <h3>Edit Data Blog</h3>
        <div class="container">
            <div class="card col-md-12">
                <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($conn, "SELECT * FROM blog WHERE id_blog='$id'");
                $blog = mysqli_fetch_array($data);
                $judul = $blog['judul'];
                $id_blog = $blog['id_blog'];
                $tema = $blog['tema'];
                $isi_blog = $blog['isi_blog'];
                ?>
                <form action="proses-update.php" method="POST" style="margin:20px">
                    <div class="form-group row">
                        <label for="judul" class="col-md-3">Judul Post</label>
                        <input type="text" value="<?php echo $blog['id_blog']?>" name="id_blog" hidden>
                        <input value="<?php echo $blog['judul']?>" type="text" class="form-control col-md-9" name="judul_post" placeholder="Judul Post">
                    </div>
                    <div class="form-group row">
                        <label for="isi" class="col-md-3">Isi Post</label>
                        <textarea name="isi" class="form-control col-md-9" rows="3"><?php echo $blog['isi_blog']?></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="tema" class="col-md-3">Tema Post</label>
                        <input value="<?php echo $blog['tema']?>" type="text" class="form-control col-md-9" name="tema_post" placeholder="Tema Post">
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-success" style="margin: 10px">Update</button>
                        <button type="button" class="btn btn-danger" style="margin: 10px" onclick="goBack()">Back</button>
                    </div>
                </form>
            </div>
        </div>
        <script>
            function goBack() {
                window.history.back()
            }
        </script>
    </body>
</html>