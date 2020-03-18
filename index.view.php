<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Task For The Day</h1>

  <ul>
      <li>
        <strong>Name: </strong> <?= $task['title']; ?>
      </li>

      <li>
        <strong>Due Date: </strong> <?= $task['due']; ?>
      </li>

      <li>
        <strong>Name: </strong> <?= $task['assigned_to']; ?>
      </li>

      <li>
        <strong>Status: </strong>
        <?php if ($task['completed']) : ?>
          <span class="icon">Completed</span>
        <?php else : ?>
          <span class="icon">Incompleted</span>
        <?php endif; ?>
      </li>
  </ul>


</body>
</html>