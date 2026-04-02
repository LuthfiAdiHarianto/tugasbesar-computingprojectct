<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WARASA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .gradient-text {
            background: linear-gradient(to right, #3b82f6, #9333ea);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="font-sans">

<!-- Navbar -->
<nav class="flex justify-between items-center px-10 py-4 bg-white shadow">
    <div class="flex items-center gap-2">
        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg"></div>
        <h1 class="text-xl font-bold text-blue-600">WARASA</h1>
    </div>

    <div class="flex items-center gap-6">
        <a href="#" class="text-gray-700 hover:text-black">FAQ</a>
        <a href="#" class="text-gray-700 hover:text-black">Contact</a>
        <a href="#" class="text-gray-700 hover:text-black">Login</a>
        <a href="#" class="px-4 py-2 rounded-lg text-white bg-gradient-to-r from-blue-500 to-purple-500">
            Get Started
        </a>
    </div>
</nav>

<!-- Hero Section -->
<section class="bg-green-600 text-center py-20 px-6">

    <!-- Badge -->
    <div class="inline-block px-4 py-2 bg-white/80 rounded-full text-purple-600 font-medium mb-6">
        ✨ AI-Powered Product Generator
    </div>

    <!-- Title -->
    <h1 class="text-4xl md:text-6xl font-bold text-black leading-tight">
        Generate Perfect Product Content in
        <span class="gradient-text">Seconds with AI</span>
    </h1>

    <!-- Description -->
    <p class="mt-6 text-lg text-gray-200 max-w-2xl mx-auto">
        WARASA helps e-commerce sellers create compelling product titles,
        descriptions, images, and export ready-to-use Shopee files.
        All powered by advanced AI.
    </p>

    <!-- Buttons -->
    <div class="mt-8 flex justify-center gap-4 flex-wrap">
        <a href="#" class="px-6 py-3 text-white rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 text-lg">
            Start Generating Products →
        </a>
        <a href="#" class="px-6 py-3 bg-gray-200 rounded-xl text-lg">
            View Demo
        </a>
    </div>

    <!-- Features -->
    <div class="mt-10 flex justify-center gap-8 text-green-100 flex-wrap">
        <div>✔ Free to Use</div>
        <div>✔ No Credit Card</div>
        <div>✔ Unlimited Products</div>
    </div>

</section>

</body>
</html>