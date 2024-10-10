<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why I Love ICT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="description" content="An article about my passion for ICT and favorite technologies">
</head>

<body class="bg-gray-700 text-gray-100">

    <!-- Include navbar -->
    <?php include 'navbar.php'; ?>
    <!-- End including -->

    <main>
        <!-- Header Section -->
        <header class="bg-gray-800 text-white text-center py-10 animate__animated animate__fadeIn">
            <h1 class="text-4xl font-extrabold tracking-wide">Why I Love ICT</h1>

        </header>

        <!-- Article Section -->
        <article class="px-6 py-12">

            <!-- Introduction -->
            <section class="mb-16">
                <p class="mb-6 text-center text-xl leading-relaxed  ">
                    Information and Communication Technology (ICT) fascinates me due to its rapid evolution and impact on our daily lives.
                    The ability to develop solutions that enhance productivity and improve communication drives my passion for this field.
                </p>

                <!-- First Image: Centered with rounded border and shadow -->
                <div class="flex justify-center mb-10 ">
                    <img src="images/accessibility.jpg" alt="Technology" class="w-1/2 lg:w-1/3 h-auto rounded-lg shadow-light">
                </div>

                <p class="mb-6 text-center text-xl leading-relaxed  animate__animated animate__fadeIn animate__delay-3s">
                    By pursuing a career in ICT, I aim to leverage my skills to create innovative solutions and contribute to advancements in technology.
                    This field offers endless opportunities for learning and development.
                </p>
            </section>

            <!-- Technologies Section -->
            <section class="flex flex-col items-start gap-10">
                <!-- Second Image: On the left -->
                <div class="w-full lg:w-1/2 animate__animated animate__fadeIn animate__delay-4s">
                    <img src="https://cdn.shopify.com/s/files/1/0070/5901/3716/files/coding_background.jpg?v=1688538955" alt="Programming" class="w-full h-auto rounded-lg shadow-light">
                </div>

                <!-- Text Content on the right -->
                <div class="w-full">
                    <h2 class="text-3xl font-bold mb-6">My Favorite Technologies</h2>
                    <ul class="list-disc list-inside mb-6 text-lg space-y-2">
                        <li class="transition-colors duration-500 hover:text-blue-500">Web Development</li>
                        <li class="transition-colors duration-500 hover:text-blue-500">Artificial Intelligence</li>
                        <li class="transition-colors duration-500 hover:text-blue-500">Data Analysis</li>
                    </ul>
                    <p class="mb-6 leading-relaxed">
                        These technologies are at the forefront of innovation and have incredible potential for transforming various industries.
                        I’m particularly interested in how they can be integrated to develop smarter, more efficient systems.
                    </p>
                    <p class="text-xl font-medium">Learn more about these technologies through the following links:</p>
                    <ul class="mt-4 space-y-2">
                        <li><a href="https://www.w3schools.com/" class="text-gray-400 hover:underline hover:text-white transition-colors duration-500">W3Schools - Web Development</a></li>
                        <li><a href="https://www.ibm.com/artificial-intelligence" class="text-gray-400 hover:underline hover:text-white transition-colors duration-500">IBM - Artificial Intelligence</a></li>
                    </ul>
                </div>
            </section>
        </article>

        <!-- Footer Section -->
        <?php include 'footer.php'; ?>
    </main>

</body>

</html>