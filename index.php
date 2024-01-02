<?php include 'inc/header.php' ?>

<?php
$result = $conn->query("SELECT * FROM notes");
$tasks = array();

while ($row = $result->fetch_assoc()) {
  array_push($tasks, $row);
}

$num_of_incomplete_tasks = $conn->query("SELECT COUNT(*) FROM notes WHERE Completed=0")->fetch_column();

?>


<div class="bg-img light">

</div>
<div class="todo-content">
  <div class="header">
    <h1 class="header__title">Todo</h1>
    <button type="button" class="header__button">
      <img class="header__button__icon" src="./static/images/icon-moon.svg">
    </button>
  </div>
  <form action="services/create_post_service.php" method="POST" class="new-entry-container">
    <input class="new-entry-container__text" type="text" name="new_note">
    <span class="placeholder-text">
      <div class="note-icon" tabindex="0"></div>
      <p>Create a new todo...</p>
    </span>
  </form>
  <div class="entries">
    <ul class="entries__list">
      <?php
      foreach ($tasks as $task) {
        $content = $task['Content'];
        $post_id = $task['ID'];

        echo "
          <li class='entries__list__item'>
          <div class='entries__list__item__wrapper'>
            <div class='note-icon' tabindex=0></div>
            <p>$content</p>
          </div>
          <form action='services/delete_post_service.php' method='POST'>
          <button type='submit' class='entries__list__item__delete' name='$post_id'>
          <img class='entries__list__item__delete__icon'/>
          </button>
          </form>
          <li>
        ";
      }
      ?>
    </ul>
    <div class="entries__info">
      <p><?php echo $num_of_incomplete_tasks ?> items left</p>
      <div class="entries__info__categories">
        <button>All</button>
        <button>Active</button>
        <button>Completed</button>
      </div>
      <form action="services/delete_posts_service.php" method="POST">
        <button type="submit">Clear Completed</button>
      </form>
    </div>

    <div class="entries__info__categories__mobile">
      <button>All</button>
      <button>Active</button>
      <button>Completed</button>
    </div>
  </div>
</div>
<div class="empty-space">
  <p class="empty-space__text">Drag and drop to reorder items</p>
</div>
<?php include 'inc/footer.php' ?>