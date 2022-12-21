


@extends('layouts.main')
@section('container')
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "laravel";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
	if (isset($_POST['post_comment'])) {

		$nama = $_POST['nama'];
		$pesan = $_POST['pesan'];
		
		$sql = "INSERT INTO comments (nama, pesan)
		VALUES ('$nama', '$pesan')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

      <!-- Komentar Section -->
      <section id="komentar" class="komentar_section ">
        <div class="container h-100 p-top40">
          <div class="heading_container text-center p-btm80">
            <h2>Komentar</h2>
            <h6>Anda dapat menuliskan komentar terkait rekomendasi tempat wisata</h6>
          </div>
          <div class="wrapper p-top80">
            <form action="/comments" method="post" class="form">
                @csrf
                <input type="text" class="nama" name="nama" placeholder="Nama">
                <br>
                <textarea name="pesan" cols="30" rows="10" class="pesan" placeholder="pesan"></textarea>
                <br>
                <button type="submit" class="btn" name="post_comment">Post Comment</button>
            </form>
        </div>
        <div class="content">
            <?php

                $sql = "SELECT * FROM comments";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                
            ?>
            <h3><?php echo $row['nama']; ?></h3>
            <p><?php echo $row['pesan']; ?></p>

            <?php } } ?>
        </div>

        </div>
      </section>
      <!-- Komentar Section -->

@endsection