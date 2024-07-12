<?php
// require_once '../config/connection.php';

// if(!isset($_SESSION['student'])){
//     header('location: index.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exam Paper Repository System | Dashboard</title>
    <link
      rel="shortcut icon"
      href="../assets/img/logo.jpeg"
      type="image/x-icon"
    />
    <!-- DataTable -->
    <link
      rel="stylesheet"
      href="../assets/vendors/datatable/css/bootstrap-datable.css"
    />
    <link
      rel="stylesheet"
      href="../assets/vendors/datatable/css/datatable.css"
    />

    <!-- Full Calendar -->
    <link rel="stylesheet" href="../assets/vendors/fullcalendar/style.css" />

    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>
  <body>
    <main class="main">
      <!-- Aside -->
      <aside class="aside">
        <h1><span>EXAMS</span> REPO</h1>
        <nav class="nav">
          <ul class="nav-list">
            <li>
              <a 
              class="<?=$page == 'dashboard' ? 'active' : ''?>" 
              href="../dashboard"
                ><span><i class="fas fa-dashboard"></i></span> &nbsp;
                Dashboard</a
              >
            </li>
            <li>
              <a 
              class="<?=$page == 'exams' ? 'active' : ''?>" 
              href="../exams">
                <span><i class="fas fa-folder"></i> </span> &nbsp; Examinations
                Papers</a
              >
            </li>
            <li>
              <a 
              class="<?=$page == 'departments' ? 'active' : ''?>" 
              href="../departments">
                <span><i class="fas fa-building"></i> </span> &nbsp;
                Departments</a
              >
            </li>
            <li>
              <a 
              class="<?=$page == 'examsofficer' ? 'active' : ''?>" 
              href="../examsofficer">
                <span><i class="fas fa-user-group"></i> </span> &nbsp; Exams
                Officers</a
              >
            </li>
            <li>
              <a 
              class="<?=$page == 'students' ? 'active' : ''?>" 
              href="../students">
                <span><i class="fas fa-users"></i> </span> &nbsp; Students</a
              >
            </li>
          </ul>
          <ul class="nav-list">
            <li>
              <a 
              class="<?=$page == 'profile' ? 'active' : ''?>" 
              href="../profile">
                <span><i class="fas fa-user"></i> </span> &nbsp; Profile</a
              >
            </li>
            <li>
              <a onclick="logout()" href="#">
                <span><i class="fas fa-sign-out-alt"></i> </span> &nbsp;
                Logout</a
              >
            </li>
          </ul>
        </nav>
      </aside>
      <!-- End Aside -->

      <!-- Right Section -->
      <section class="right-section">
        <header class="header">
          <section onclick="toggleMenu()" class="header_menu-toggler">
            <i class="fas fa-bars fa-1x"></i>
          </section>
          <section class="header_user-avatar drop-down">
            <span class="user-avatar drop-down-trigger"
              ><i class="fas fa-user"></i>
            </span>
            &nbsp;
            <section class="drop-down-content">
              <ul>
                <li>
                  <a href="../profile">
                    <span><i class="fas fa-user"></i> </span> &nbsp; Profile</a
                  >
                </li>
                <li>
                  <a onclick="logout()" href="#">
                    <span><i class="fas fa-sign-out-alt"></i> </span> &nbsp;
                    Logout</a
                  >
                </li>
              </ul>
            </section>
          </section>
        </header>
      
