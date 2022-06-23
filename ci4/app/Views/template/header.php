<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Sederhana</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div id="container">

    </div>
    <header>
        <h1>Daftar Artikel</h1>
    </header>
    <nav>
        <a href="<?= base_url('/')?>" class="active">Home</a>
        <a href="<?= base_url('/artikel/index')?>">Artikel</a>
        <a href="<?= base_url('/about')?>">About</a>
        <a href="<?= base_url('/contact')?>">Kontak</a>
        <a href="http://localhost:8080/index.php/admin/artikel">Admin Portal Berita</a>
    </nav>
    
    <!-- <section id="hero"> 
        <h1>Hello Word</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos exercitationem placeat excepturi perspiciatis eius facilis pariatur ducimus quis quas temporibus. Quam debitis temporibus voluptatibus, quasi fuga consequuntur voluptate numquam accusantium?</p>
        <a href="home.html" class="btn btn-large">learn more &raquo;</a>
    </section> -->

    <section id="hero"></section>
    <section id="wrapper">
        <section id="main"></section>
        <aside id="sidebar"></aside>
    </section>

    