<?php include 'inc/header.php' ?>
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
      <li>
        <div>
          <img src="" alt="">
          <p></p>
        </div>
      </li>
      <li>
        <div>
          <img src="" alt="">
          <p></p>
        </div>
      </li>
      <li>
        <div>
          <img src="" alt="">
          <p></p>
        </div>
      </li>
      <li>
        <div>
          <img src="" alt="">
          <p></p>
        </div>
      </li>
      <li>
        <div>
          <img src="" alt="">
          <p></p>
        </div>
      </li>
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