<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <form action="postform" method="post">
            @csrf
            <input type="text" name="name" placeholder="Nhập họ và tên"/>
            <input type="submit" name="Lưu"  />
        </form>

    </body>
</html>
