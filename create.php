<html>
    <head>
        <title>Create Data</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <h3>Input Data Blog</h3>
        <div class="container">
            <div class="card col-md-12">
                <form action="proses-save.php" method="POST" style="margin:20px">
                    <div class="form-group row">
                        <label for="judul" class="col-md-3">Judul Post</label>
                        <input type="text" class="form-control col-md-9" name="judul_post" placeholder="Judul Post">
                    </div>
                    <div class="form-group row">
                        <label for="isi" class="col-md-3">Isi Post</label>
                        <textarea name="isi" class="form-control col-md-9" rows="3"></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="tema" class="col-md-3">Tema Post</label>
                        <input type="text" class="form-control col-md-9" name="tema_post" placeholder="Tema Post">
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-success" style="margin: 10px">Save</button>
                        <button type="reset" class="btn btn-danger" style="margin: 10px">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>