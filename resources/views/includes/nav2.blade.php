
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$currentPage = str_replace('.php', '', $currentPage);
// echo "Current Page: " . $currentPage;
?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Students</a>
      </div>
      <ul class="nav navbar-nav">
        <li <?php if($currentPage == 'create') echo 'class="active"'; ?>><a href="{{ route('addStudent') }}">Add</a></li>
        <li <?php if($currentPage == 'index') echo 'class="active"'; ?>><a href="{{ route('students') }}">Student</a></li>
      </ul>
    </div>
  </nav>
