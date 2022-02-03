<html>
    <body>
        <h1><?php echo "Hello, world!"; ?></h1>
        I'm <?php echo $_REQUEST['name'] ?? 'Noname'; ?>
        
        <?php
echo "Hi!";

$tree = (new \Node('Electronics'))
    ->addChild(
        (new \Node('Televisions'))
            ->addChild(new \Node('Tube'))
            ->addChild(new \Node('LCD'))
            ->addChild(new \Node('Plasma'))
        )
    ->addChild(
        (new \Node('Portable electronic'))
            ->addChild((new \Node('MP3 players'))->addChild(new \Node('Flash')))
            ->addChild(new \Node('CD players'))
            ->addChild(new \Node('2 way radios'))
        )    
    ;
?>

    </body>
</html>

/*
Как я поняла, надо создать документ Node.php, вставить туда шаблон из ДЗ3. Но я не знаю, что здесь надо поменять, ведь все категории товаров уже заполнены.
Как вывести каталог на страницу браузера так же не понятно. В интернете пишут разные команды для этого: scandir, showdir, opendir, showtree. Но какой выбрать? Непонятен синткасис, что означают все знаки ($, $file == '.' и многие другие).
*/
