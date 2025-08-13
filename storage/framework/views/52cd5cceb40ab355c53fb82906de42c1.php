<!DOCTYPE html>
<html lang="en" class="bg-black text-green-400">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login - Cyber Terminal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Share Tech Mono', monospace;
      background: radial-gradient(ellipse at center, #000000 0%, #0f0f0f 100%);
    }

    .terminal {
      border: 2px solid #00ff00;
      background-color: rgba(0, 0, 0, 0.85);
      box-shadow: 0 0 20px #00ff00;
      padding: 30px;
      border-radius: 10px;
    }

    .glow-border:focus {
      outline: none;
      box-shadow: 0 0 10px #00ff00;
      border-color: #00ff00;
    }

    .glitch {
      position: relative;
      color: #00ff00;
      animation: glitch 2s infinite;
    }

    @keyframes glitch {
      0% {text-shadow: 1px 0 red, -1px 0 blue;}
      20% {text-shadow: -1px -1px red, 1px 1px blue;}
      40% {text-shadow: -2px 2px red, 2px -2px blue;}
      60% {text-shadow: 1px 0 red, 0 1px blue;}
      80% {text-shadow: 0 -1px red, -1px 1px blue;}
      100% {text-shadow: 1px 1px red, -1px -1px blue;}
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen">
  <div class="terminal w-full max-w-md">
    <h2 class="text-3xl mb-6 glitch text-center">[ ADMIN LOGIN ]</h2>

    
    <?php if(session('error')): ?>
      <p class="text-red-500 text-center mb-4"><?php echo e(session('error')); ?></p>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('adminpannellogin')); ?>" class="space-y-5">
        <?php echo csrf_field(); ?>
        <!-- Username -->
        <div>
          <label class="block mb-1 text-green-300">Username</label>
          <input type="text" name="username" class="w-full p-2 bg-black border border-green-400 text-green-300 glow-border" placeholder="root_admin_01" required>
        </div>

        <!-- Password -->
        <div>
          <label class="block mb-1 text-green-300">Password</label>
          <input type="password" name="password" class="w-full p-2 bg-black border border-green-400 text-green-300 glow-border" placeholder="••••••••" required>
        </div>

        <!-- Submit -->
        <div>
          <button type="submit" class="w-full bg-green-500 text-black py-2 hover:bg-green-600 transition font-bold">ACCESS SYSTEM</button>
        </div>
    </form>
  </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\RapidRescue\resources\views/adminlayout/adminlogin.blade.php ENDPATH**/ ?>