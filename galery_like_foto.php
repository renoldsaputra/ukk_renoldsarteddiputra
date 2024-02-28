<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Photo Gallery with Likes</title>
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
    position: relative; /* Added to position the like button */
  }
  .gallery-item img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease-in-out;
  }
  .gallery-item img:hover {
    transform: scale(1.1);
  }
  .like-btn {
    position: absolute;
    bottom: 10px;
    right: 10px;
    background-color: #ccc;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
  }
</style>
</head>
<body>

<h1>Photo Gallery with Likes</h1>

<div class="gallery">
  <div class="gallery-item">
    <img src="gambar1.jpg" alt="Gambar 1">
    <button class="like-btn" onclick="likePhoto(this)">Like</button>
  </div>
  <div class="gallery-item">
    <img src="gambar2.jpg" alt="Gambar 2">
    <button class="like-btn" onclick="likePhoto(this)">Like</button>
  </div>
  <div class="gallery-item">
    <img src="gambar3.jpg" alt="Gambar 3">
    <button class="like-btn" onclick="likePhoto(this)">Like</button>
  </div>
  <!-- Tambahkan gambar-gambar lainnya sesuai kebutuhan -->
</div>

<script>
  function likePhoto(button) {
    // Ambil element sebelumnya, yaitu gambar, dan teks like
    var image = button.previousElementSibling;
    var likeText = document.createElement('span');
    likeText.textContent = ' Liked!';
    likeText.style.color = 'red';
    // Jika tombol Like belum ditekan, tambahkan teks Liked! dan ganti warna tombol
    if (!button.classList.contains('liked')) {
      image.parentNode.appendChild(likeText);
      button.textContent = 'Liked';
      button.classList.add('liked');
      button.style.backgroundColor = 'red';
    } else {
      // Jika tombol Like sudah ditekan, hapus teks Liked! dan ganti warna tombol
      image.parentNode.removeChild(image.parentNode.lastChild);
      button.textContent = 'Like';
      button.classList.remove('liked');
      button.style.backgroundColor = '#ccc';
    }
  }
</script>

</body>
</html>
