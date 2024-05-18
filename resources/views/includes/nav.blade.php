
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$currentPage = str_replace('.php', '', $currentPage);
// echo "Current Page: " . $currentPage;
?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Clients</a>
      </div>
      <ul class="nav navbar-nav">
        <li <?php if($currentPage == 'create') echo 'class="active"'; ?>><a href="{{ route('addClient') }}">Add</a></li>
        <li <?php if($currentPage == 'index') echo 'class="active"'; ?>><a href="{{ route('clients') }}">Client</a></li>
        <li <?php if($currentPage == 'trash') echo 'class="active"'; ?>><a href="{{route('trashClient')}}">Trash</a></li>
      </ul>
    </div>
  </nav>




