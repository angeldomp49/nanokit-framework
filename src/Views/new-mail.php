<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost:8000/mail" method="post">
        <input type="text" name="name" id="name" placeholder=""><?php _t( "Name" ); ?>
        <button type="submit"><?php _t( "Send" ); ?></button>
    </form>
</body>
</html>