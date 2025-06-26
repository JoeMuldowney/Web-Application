<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Error Page</title>
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">  
    
  <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
    <?php 
    $errors = $_SESSION['error'] ?? [];
    if (!empty($errors)) echo "<p style='color:red'>$errors</p>";  unset($_SESSION['error']);?>
    <p>Try logging in again?</p>
      <button class="btn btn-primary w-50" onclick="window.location.href='/login';">
  Login
  </button>
</body>

</html>