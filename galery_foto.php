<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Photo Gallery</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  h1 {
    text-align: center;
  }
  .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    padding: 20px;
  }
  .gallery-item {
    margin-bottom: 20px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }
  .gallery-item img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease-in-out;
  }
  .gallery-item img:hover {
    transform: scale(1.1);
  }
</style>
</head>
<body>

<h1>Photo Gallery</h1>

<div class="gallery">
  <div class="gallery-item">
    <img src="gambar1.jpg" alt="Gambar 1">
  </div>
  <div class="gallery-item">
    <img src="gambar2.jpg" alt="Gambar 2">
  </div>
  <div class="gallery-item">
    <img src="gambar3.jpg" alt="Gambar 3">
  </div>
  <!-- Tambahkan gambar-gambar lainnya sesuai kebutuhan -->
</div>

<script>
// Tidak ada skrip khusus yang dibutuhkan untuk galeri foto dasar ini.
</script>

</body>
</html>
