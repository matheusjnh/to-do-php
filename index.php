<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>To-do List PHP</title>
</head>

<body class="body">
    <div class="app">
        <h1 class="main-title">To-do List PHP</h1>

        <form class="add-task" action="add_task.php" method="POST">
            <div class="add-task__info">
                <input class="add-task__title" type="text" placeholder="Título" id="add_task_title" name="title"
                    value="This is a task for me to do!">
                <textarea class="add-task__description" id="add_task_description" name="description"
                    placeholder="Descrição"
                    rows="2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</textarea>
            </div>

            <div class="add-task__buttons">
                <button class="btn btn--red" type="submit">Adicionar</button>
                <button class="btn btn--cancel" type="button">Cancelar</button>
            </div>
        </form>

        <div class="task-list">
            <?php
            if (isset($_COOKIE["tasks"])) {
                $tasks = json_decode($_COOKIE["tasks"], true);

                foreach ($tasks as $task) {
                    $title = htmlspecialchars($task["title"]);
                    $description = htmlspecialchars($task["description"]);

                    echo '<div class="task">
                  <button class="task__finish-button"></button>
                  <div class="task__info">
                    <span class="task__title">' . $title . '</span>
                    <span class="task__description">' . $description . '</span>
                  </div>
                </div>';
                }
            }
            ?>
        </div>
    </div>
</body>

</html>