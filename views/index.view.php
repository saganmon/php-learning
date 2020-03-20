<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php require('partials/nav.php'); ?>

  <h1>My Tasks</h1>

  <?php foreach ($tasks as $task) : ?>
    <li>
      <?php if ($task->completed) : ?>
        <strike><?= $task->description; ?></strike>
      <?php else: ?>
        <?= $task->description; ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
</body>
</html>