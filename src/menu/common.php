<?php

if (isset($_SESSION['user_id']) && isset($_SESSION['user_role']))
{
  if ($_SESSION['user_role'] == 'admin')
  {
    include './src/menu/admin.php';
  }
  if ($_SESSION['user_role'] == 'user')
  {
    include './src/menu/user.php';
  }
} else {
  include './src/menu/unauthorized.php';
}
