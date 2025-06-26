<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kanban Board</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<h2>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
  <p>You are logged into tha admin portal!</p>
  <button onclick="window.location.href='/logout';">
  Logout
  </button> 
  <script>
    let logoutTimer;

    function resetTimer() {
        clearTimeout(logoutTimer);
        logoutTimer = setTimeout(() => {
            window.location.href = "/logout";
        }, 60 * 1000); // 1 minute
    }

    // Reset timer on any user activity
    ['mousemove', 'keydown', 'click', 'scroll', 'touchstart'].forEach(event => {
        window.addEventListener(event, resetTimer);
    });

    resetTimer(); // Start the timer on page load
</script>
  
</body>
</html>