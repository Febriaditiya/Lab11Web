<?= $this->include('template/header');?>

<div class="contak">
  <div style="text-align:left">
    <h2>Contact Us</h2>
    <p>Jika ada yang bisa kami bantu bisa hubungi:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="https://yukcoding.id/wp-content/uploads/2021/08/Tutorial-Modul-CodeIgniter.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">Nama Awal</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Nama Akhir</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Negara</label>
        <select id="country" name="country">
          <option value="australia">Pilih Negara...</option>
          <option value="australia">Indonesia</option>
          <option value="canada">Australia</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Pesan </label>
        <textarea id="subject" name="subject" placeholder="Tulis Pesan..." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<?= $this->include('template/footer');?>