<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Inactivity Page</title>
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">  
    
  <div class="card shadow p-4" style="max-width: 600px; width: 100%;">

    <p>Logged out due to inactivity and being redirected to login page...</p>
      <script>
    let logoutTimer;

    function resetTimer() {
        clearTimeout(logoutTimer);
        logoutTimer = setTimeout(() => {
            window.location.href = "/login";
        }, 4000); // 2 secs
    }    

    resetTimer(); // Start the timer on page load
</script>
</body>

</html>