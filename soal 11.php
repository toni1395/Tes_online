<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h1>Upload</h1>

    <form action="proses.php" method="POST" enctype="multipart/form-data">
        <div>
            <label>Foto</label> <br>
            <input type="file" name="foto">
        </div>
        <div style="margin-top: 1rem">
            <button>Upload</button>
        </div>
    </form>
</body>
</html>