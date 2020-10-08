<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <form enctype="multipart/form-data" action="proses_upload.php" method="POST">
        File yang diupload : <input type="file" name="fupload"><br>
        Deskripsi File : <br><textarea name="deskripsi" cols="20" rows="6"></textarea><br>
        <input type="submit" value="Upload">
    </form>
</body>

</html>