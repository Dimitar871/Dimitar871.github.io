<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="faq.js" defer></script> <!-- Include JavaScript file -->
    <style>
        /* For smooth transition of answer box */
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
        }
    </style>
</head>

<body class="bg-gray-700 text-white">
    <!-- Include navbar -->
    <?php include 'navbar.php'; ?>
    <!-- End including -->

    <!-- Main Content -->
    <main class="min-h-screen py-10">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="bg-gradient-to-br from-gray-800 to-gray-700 p-10 rounded-lg shadow-lg">
                <h1 class="text-5xl font-extrabold text-white text-center mb-12">Frequently Asked Questions</h1>

                <div class="space-y-8">
                    <!-- Question 1 -->
                    <div class="faq-item border-b border-gray-600 pb-4">
                        <h2 class="text-3xl font-semibold text-white faq-question cursor-pointer hover:text-gray-400 transition-colors duration-300">
                            1. How can you print a document from your laptop at HZ?
                        </h2>
                        <p class="text-xl text-gray-300 faq-answer mt-4">
                            To print a document from your laptop at HZ, connect to the HZ network and find the available printers. You may need to install specific printer drivers or use a designated printing portal provided by HZ.
                        </p>
                    </div>

                    <!-- Question 2 -->
                    <div class="faq-item border-b border-gray-600 pb-4">
                        <h2 class="text-3xl font-semibold text-white faq-question cursor-pointer hover:text-gray-400 transition-colors duration-300">
                            2. How can you scan a document and send it to your laptop at HZ?
                        </h2>
                        <p class="text-xl text-gray-300 faq-answer mt-4">
                            Use the scanning stations available on campus. After scanning, choose the option to email the scanned document or save it to a USB drive.
                        </p>
                    </div>

                    <!-- Question 3 -->
                    <div class="faq-item border-b border-gray-600 pb-4">
                        <h2 class="text-3xl font-semibold text-white faq-question cursor-pointer hover:text-gray-400 transition-colors duration-300">
                            3. How can I buy something (like when I sign up for the IT introduction event) on the HZ web shop?
                        </h2>
                        <p class="text-xl text-gray-300 faq-answer mt-4">
                            Visit the web shop portal and browse the available items or events. Select your items and proceed to checkout, where you can enter your payment details.
                        </p>
                    </div>

                    <!-- Question 4 -->
                    <div class="faq-item border-b border-gray-600 pb-4">
                        <h2 class="text-3xl font-semibold text-white faq-question cursor-pointer hover:text-gray-400 transition-colors duration-300">
                            4. How can you book a project space?
                        </h2>
                        <p class="text-xl text-gray-300 faq-answer mt-4">
                            Visit the HZ booking system online, log in with your credentials, and choose a project space that suits your needs.
                        </p>
                    </div>

                    <!-- Question 5 -->
                    <div class="faq-item border-b border-gray-600 pb-4">
                        <h2 class="text-3xl font-semibold text-white faq-question cursor-pointer hover:text-gray-400 transition-colors duration-300">
                            5. What are the instructions if you want to park your car at the HZ parking lot?
                        </h2>
                        <p class="text-xl text-gray-300 faq-answer mt-4">
                            Obtain a parking permit if required and follow the parking guidelines displayed at the entrance.
                        </p>
                    </div>

                    <!-- Question 6 -->
                    <div class="faq-item">
                        <h2 class="text-3xl font-semibold text-white faq-question cursor-pointer hover:text-gray-400 transition-colors duration-300">
                            6. How expensive is the food in the cafeteria?
                        </h2>
                        <p class="text-xl text-gray-300 faq-answer mt-4">
                            The food at the HZ cafeteria is reasonably priced. Discounts are available by returning used cans at the vending machine.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>

</html>