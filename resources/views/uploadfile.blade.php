<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form action="uploadfile" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="filename">
        <input type="submit" name="" value="UPLOAD">
    </form>

</body>

</html>
