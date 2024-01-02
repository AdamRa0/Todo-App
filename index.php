<?php include 'inc/header.php' ?>

<?php
$result = $conn->query("SELECT * FROM notes");
$notes = array();

while ($row = $result->fetch_assoc()) {
  array_push($notes, $row);
}
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
      foreach ($notes as $note) {
        $content = $note['Content'];

        echo "
          <li class='entries__list__item'>
          <div class='entries__list__item__wrapper'>
            <div class='note-icon' tabindex=0></div>
            <p>$content</p>
          </div>
          <button class='entries__list__item__delete'>
          <img class='entries__list__item__delete__icon'/>
          </button>
          <li>
        ";
      }
      ?>
    </ul>
    <div class="entries__info">
      <p>5 items left</p>
      <div class="entries__info__categories">
        <button>All</button>
        <button>Active</button>
        <button>Completed</button>
      </div>
      <button>Clear Completed</button>
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