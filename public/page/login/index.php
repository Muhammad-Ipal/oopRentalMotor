<?php

session_start();

if (isset($_POST["login"])) {
  $inputUsername = $_POST['username'];
  $inputPassword = $_POST['password'];

  if (empty($inputUsername) || empty($inputPassword)) {
    echo "<script>alert('Username dan Password tidak boleh kosong');</script>";
  } else {
    $username = $_SESSION['username'] ?? '';
    $password = $_SESSION['password'] ?? '';

    if ($inputUsername === $username && $inputPassword === $password) {
      $_SESSION["login"] = true;
      $_SESSION["username"] = $inputUsername;
      header("Location: ../home/");
      exit();
    } else {
      echo "<script>alert('Username atau Password salah');</script>";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="../.././css/output.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
</head>

<body class="font-urbanist">
  <section class="relative flex flex-wrap lg:h-screen lg:items-center">
    <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-lg text-center">
        <h1 class="text-2xl font-bold sm:text-3xl">Hello friend!</h1>

        <p class="mt-4 text-gray-500">
          Welcome back! Join us to explore new adventures, create unforgettable memories, and embark on a journey you'll never forget.
        </p>
      </div>

      <form class="mx-auto mb-0 mt-8 max-w-md space-y-4" method="post" >
        <div>
          <div class="relative">
            <input type="text" class="w-full rounded-lg bg-gray-100 p-4 pe-12 text-sm" placeholder="Enter username" name="username" />

            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
              </svg>
            </span>
          </div>
        </div>

        <div>
          <div class="relative">
            <input type="password" class="w-full rounded-lg bg-gray-100 p-4 pe-12 text-sm" placeholder="Enter password" name="password" />

            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </span>
          </div>
        </div>

        <div class="flex items-center justify-between">
          <p class="text-sm text-gray-500">
            No account?
            <a class="underline" href="../register/">Sign up</a>
          </p>

          <button type="submit" class="inline-block rounded-lg bg-purpleColor px-5 py-3 text-sm font-medium text-white" name="login" >
            Sign in
          </button>
        </div>
      </form>
    </div>

    <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
      <img alt="" src="https://images.unsplash.com/photo-1600671673117-cddc65ffa897?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 h-full w-full object-cover" />
    </div>
  </section>

</body>

</html>