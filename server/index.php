<!DOCTYPE html>
<html>
    <head>
        <title>Camera upload</title>
    </head>
    <body>
        <h1>Camera upload</h1>
        <form action="upload.php" method="post">
            <input type="password" name="token" />
            <input type="file" accept="image/*;capture=camera" name="image" />
            <input type="submit" />
        </form>
    </body>
</html>
