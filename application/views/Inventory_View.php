<!DOCTYPE html>
<html>
<head>
  <title>Circle Sticky Button</title>
  <style>
    .circle-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background-color: #ff3366;
      color: #ffffff;
      text-align: center;
      line-height: 60px;
      cursor: pointer;
      transition: all 0.3s ease;
      z-index: 9999;
    }

    .circle-button:hover {
      transform: scale(1.1);
    }

    .menu {
      position: fixed;
      bottom: 90px;
      right: 20px;
      width: 200px;
      height: 0;
      background-color: #ffffff;
      overflow: hidden;
      transition: height 0.3s ease;
      border-radius: 5px;
      z-index: 9998;
    }

    .menu.open {
      height: 200px;
    }

    .menu-item {
      padding: 10px;
      border-bottom: 1px solid #ccc;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .menu-item:hover {
      background-color: #f0f0f0;
    }
  </style>
</head>
<body>
  <div class="circle-button" onclick="toggleMenu()">+</div>
  <div class="menu" id="menu">
    <div class="menu-item">Add Item 1</div>
    <div class="menu-item">Add Item 2</div>
    <div class="menu-item">Add Item 3</div>
  </div>

  <script>
    function toggleMenu() {
      var menu = document.getElementById('menu');
      menu.classList.toggle('open');
    }
  </script>
</body>
</html>
