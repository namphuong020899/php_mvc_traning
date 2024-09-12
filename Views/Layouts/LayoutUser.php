<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>header</h1>
        <hr />
    </header>
    <main>
        <?php $this->view($content, $sub_content);?>
    </main>
    <footer>
        <hr />
        <h1>footer</h1>
    </footer>
</body>

</html>