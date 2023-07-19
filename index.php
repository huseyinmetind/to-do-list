<?php
        require_once __DIR__.'/vendor/autoload.php';
        $router= new AltoRouter();
        $router->setBasePath('/todolist');
        
        $router->map('GET', '/', function(){
            echo '<h1>To-Do List</h1>';

        });
        $router->map('GET', '/tasks',function(){
            echo '<h2>Görev Listesi</h2>';
            echo '<ul>';
            echo '<h2><li>Spora Gitmek</li><h2>';
            echo '<h2><li>Ders Calismak</li><h2>';
            echo '<h2><li>Alisveris Yapmak</li><h2>';
            echo '</ul>';
        
        });
        $router->map('GET','/tasks/add',function(){
            echo '<h2>Görev Ekleme Formu</h2>';
            echo '<form method="POST" action="/todolist/tasks/add">';
            echo '<input type="text" name="task_name" placeholder="Görev Adi" required>';
            echo '<button type="submit">Görev Ekle</button>';
            echo '</form>';
            

        });
        $router->map('POST','/tasks/add',function(){
            $taskName = $_POST['task_name'];
            echo 'Görev Ekleme İşlemi - Görev Adi: '.$taskName;
        
        });

        $match= $router->match();
        if ($match && is_callable($match['target']))
        {
            call_user_func_array($match['target'],$match['params']);
        }
        else
        {
            echo '404 sayfa bulunamadi';
        }
?>
    