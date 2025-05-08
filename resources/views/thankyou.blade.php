<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Additional CSS -->
    <style>
        /* Body and general styles */
        body {
            font-family: 'Fredoka', sans-serif;
        }

        /* Header styles */
        header {
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header a:hover {
            text-decoration: underline;
        }

        /* Thank You Section */
        section {
            padding: 30px 20px;  /* Mengurangi padding top untuk menaikkan posisi */
        }

        h1 {
            color: #1d4ed8; /* Blue */
            margin-top: 0;  /* Menghapus margin top untuk posisi lebih tinggi */
        }

        .thank-you-message p {
            font-size: 1.1rem;
            color: #4b5563; /* Gray */
            line-height: 1.6;
        }

        /* Footer Styles */
        footer {
            background-color: #1e3a8a; /* Dark blue */
            color: #ffffff;
            padding-top: 40px;
            padding-bottom: 20px;
        }

        footer p {
            font-size: 0.875rem;
        }

        footer .max-w-6xl {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body class="bg-white text-gray-800 font-sans">

    <!-- Header -->
    <header class="flex justify-between items-center p-4 border-b">
        <div class="font-bold text-2xl">LOGO</div>
        <nav class="space-x-4">
            <a href="#" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">Home</a>
        </nav>
        <button class="bg-blue-900 text-white px-4 py-2 rounded-full text-sm">SIGN UP</button>
    </header>

    <!-- Thank You Section -->
    <section class="grid grid-cols-1 md:grid-cols-2 items-center">
        <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786" alt="Plant" class="w-full h-auto object-cover">
        <div class="p-8 text-center">
            <h1 class="text-4xl font-bold text-blue-900 font-['Fredoka'] bg-blue-200 inline-block px-4 py-2 rounded-xl mb-4">THANK YOU!</h1>
            <p class="text-gray-600">
                Integer tempus augue id enim tristique, et dapibus sapien ultricies. Quisque facilisis enim nec dui rhoncus
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-8">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-4 text-sm">
            <div><strong>LOGO</strong></div>
            <div>
                <p>Integer tempus augue</p>
                <p>Integer tempus augue</p>
                <p>Integer tempus augue</p>
            </div>
            <div>
                <p>Integer tempus augue</p>
                <p>Integer tempus augue</p>
                <p>Integer tempus augue</p>
            </div>
            <div>
                <p>Integer tempus augue</p>
                <p>Integer tempus augue</p>
                <p>Integer tempus augue</p>
            </div>
        </div>
        <p class="text-center mt-4 text-xs">Integer tempus augue 2024 a tralala trelele. footer</p>
    </footer>

</body>
</html>
