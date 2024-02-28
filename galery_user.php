<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Gallery</title>
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
    position: relative;
  }
  .gallery-item img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease-in-out;
  }
  .gallery-item img:hover {
    transform: scale(1.1);
  }
  .comment {
    margin-top: 10px;
    text-align: center;
    font-style: italic;
  }
  .like-button {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: transparent;
    border: none;
    cursor: pointer;
    outline: none;
  }
</style>
</head>
<body>

<h1>User Gallery</h1>

<div class="gallery">
  <div class="gallery-item">
    <img src="gambar1.jpg" alt="Gambar 1">
    <button class="like-button">👍 0</button>
    <div class="comment">Komentar untuk Gambar 1</div>
  </div>
  <div class="gallery-item">
    <img src="gambar2.jpg" alt="Gambar 2">
    <button class="like-button">👍 0</button>
    <div class="comment">Komentar untuk Gambar 2</div>
  </div>
  <div class="gallery-item">
    <img src="gambar3.jpg" alt="Gambar 3">
    <button class="like-button">👍 0</button>
    <div class="comment">Komentar untuk Gambar 3</div>
  </div>
  <!-- Tambahkan gambar-gambar lainnya sesuai kebutuhan -->
</div>

<script>
  // JavaScript untuk tombol "suka"
  const likeButtons = document.querySelectorAll('.like-button');

  likeButtons.forEach(button => {
    let liked = false;
    button.addEventListener('click', () => {
      liked = !liked;
      if (liked) {
        button.innerHTML = `👍 1`;
      } else {
        button.innerHTML = `👍 0`;
      }
    });
  });
</script>

</body>
</html>
