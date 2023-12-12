<?php include 'inc/header.php' ?>

<?php
$example_items = array(
  "Jog around the park 3x",
  "Read a book",
  "Meditate for 10 minutes",
  "Pick up groceries",
  "Complete todo app",
  "Complete online javascript course",
  "Read more on kubernetes",
  "Continue working on hobbie operating system",
  "Continue reading on x86 assembly",
  "Return crime and punishment to the library"
)
?>


<div class="bg-img light">

</div>
<div class="todo-content">
  <div class="header">
    <h1>Todo</h1>
    <button type="button">
      <img src="./static/images/icon-moon.svg" alt="Moon Icon">
    </button>
  </div>
  <div class="new-entry-container">
    <input type="text">
    <span class="placeholder-text">
      <div class="note-icon"></div>
      <p>Create a new todo...</p>
    </span>
  </div>
  <div class="entries">
    <ul class="entries__list">
      <?php
      foreach ($example_items as $item) {
        echo "
          <li class='entries__list__item'>
          <div class='note-icon'></div>
          <p>$item</p>
          <li>
        ";
      }
      ?>
    </ul>
    <div class="entries__info">
      <p>5 items left</p>
      <div class="entries__info__categories">
        <p>All</p>
        <p>Active</p>
        <p>Completed</p>
      </div>
      <p>Clear Completed</p>
    </div>
  </div>
</div>
<div class="empty-space">
  <p class="empty-space__text">Drag and drop to reorder items</p>
</div>
<?php include 'inc/footer.php' ?>