<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/src/output.css">
    <title>Login Page</title>
</head>
<body class="h-full">
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <div class="card shadow bg-red-50">
        <div class="card-body p-5">
          <div class="card-body p-5">
            <img class="mx-auto h-10 w-auto" src="bantengsaranghae.jpg">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">REGISTER<br>BULL SARANGHAE<br>Contact App Manager</h2>
          </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="src/index.html" method="POST">
        <div>
          <label for="email" class="mb-2 fw-bold text-muted">EMAIL</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#8a4647] sm:text-sm sm:leading-6" placeholder="Masukkan email anda..." >
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="mb-2 fw-bold text-muted">PASSWORD</label>
            <div class="text-sm">
              <a href="#" class="font-semibold text-[#8a4647] hover:text-[#aa4647]">Forgot Password?</a>
            </div>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#8a4647] sm:text-sm sm:leading-6" placeholder="Masukkan password anda...">
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-[#8a4647] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#aa4647] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#8a4647]">Login</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
        Don't have an account yet?
        <a href="src/register.html" class="font-semibold leading-6 text-[#8a4647] hover:text-[#aa4647]">Let's Register!</a>
      </p>
    </div>
  </div>
</body>
</html>