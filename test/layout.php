<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA1</title>
</head>
<body>
    <header>
        <nav>
           <ul>
            <li>
                <a href="/demo/test/index.php">Home</a>
            </li>
            <li>
                <a href="/demo/test/index.php?san-pham">Danh sách sản phẩm</a>
            </li>
            <li>
                <a href="/demo/test/index.php?gio-hang">Home</a>
            </li>
           </ul>
        </nav>
    </header>
    <main>
        <?php include_once $VIEW_NAME ?>
    </main>


    <footer>
        FOOTER
    </footer>
</body>
</html>