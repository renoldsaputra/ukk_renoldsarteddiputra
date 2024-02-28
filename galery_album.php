<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri Album</title>
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
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
  }
  .gallery img {
    width: 100%;
    height: auto;
  }
</style>
</head>
<body>

<h1>Galeri Album</h1>

<div class="gallery">
  <a href="gambar1.jpg" target="_blank">
    <img src="gambar1.jpg" alt="Gambar 1">
  </a>
  <a href="gambar2.jpg" target="_blank">
    <img src="gambar2.jpg" alt="Gambar 2">
  </a>
  <a href="gambar3.jpg" target="_blank">
    <img src="gambar3.jpg" alt="Gambar 3">
  </a>
  <!-- Tambahkan gambar-gambar lainnya sesuai kebutuhan -->
</div>

</body>
</html>
