<?php

if (isset($_SESSION['user_role']) && isset($_SESSION['user_name']))
{
  if ($_SESSION['user_role'] == 'admin')
  {
    include './src/menu/admin.php';
  }
  if ($_SESSION['user_role'] == 'user')
  {
    include './src/menu/user.php';
  }
  ?>
  <li>
    <a class="" style="padding-left: 40px;">Здравствуйте, <?echo $_SESSION['user_name'];?>!</a>
  </li>
  <?php
} else {
  include './src/menu/unauthorized.php';
}