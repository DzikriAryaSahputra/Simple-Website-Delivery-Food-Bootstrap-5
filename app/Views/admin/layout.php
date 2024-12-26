<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Delivery App</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .content-wrapper {
      display: flex;
      flex: 1;
    }
    .sidebar {
      width: 250px;
      background-color: #343a40;
      color: white;
      padding: 20px;
      border-right: 1px solid #ddd;
      position: fixed;
      height: 100%;
      top: 0;
      transition: all 0.3s ease;
    }
    .sidebar h5 {
      color: #f8f9fa;
    }
    .sidebar .nav-link {
      color: #f8f9fa;
      margin-bottom: 10px;
      transition: color 0.3s;
    }
    .sidebar .nav-link:hover {
      color:#FFD700;
    }
    .sidebar .nav-link.active {
      color: #FFD700;
      font-weight: bold;
    }
    .main-content {
      flex: 1;
      margin-left: 250px;
      padding: 20px;
      transition: margin-left 0.3s ease;
    }
    .navbar-brand {
      font-size: 1.5rem;
      font-weight: bold;
    }
    
    .logout-button {
      background: none;
      border: none;
      color: #f8f9fa;
      text-align: left;
      padding: 10px 0;
      width: 100%;
      cursor: pointer;
    }
    .logout-button:hover {
      color: #FFD700;
    }
  </style>
</head>
<body>


<div class="content-wrapper">
  <div class="sidebar" id="sidebar">
    <h5 class="mb-3">Menu</h5>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="<?=base_url('admin/produk')?>"><i class="fas fa-box"></i> Data Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Data Order</a>
      </li>
    </ul>
    <button class="logout-button" onclick="window.location.href='<?=base_url('logout')?>'"><i class="fas fa-sign-out-alt"></i> Logout</button> </div>
  </div>

  <div class="main-content" id="mainContent">
    <?= $this->renderSection('mainadmin');?>
  </div>
</div>

<footer class="p-3 bg-warning mt-auto text-center">
  &copy; 2024. Dzikri Arya Sahputra UAS Pemrograman Web2.
</footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var hapusModal = document.getElementById('hapusModal');
    hapusModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var textId = hapusModal.querySelector('#textId');
        var idHapus = hapusModal.querySelector('#idHapus');
        
        console.log('ID yang akan dihapus: ' + id); // Debug output
        textId.textContent = id;
        idHapus.value = id;
    });
});



// Fungsi pencarian
document.getElementById('searchInput').addEventListener('keyup', function() {
  const value = this.value.toLowerCase();
  const rows = document.querySelectorAll('table tbody tr');
  rows.forEach(row => {
    const text = row.textContent.toLowerCase();
    row.style.display = text.indexOf(value) > -1 ? '' : 'none';
  });
});

  
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
