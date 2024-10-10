<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Study Progress</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-700 text-white">

    <!-- Include navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Main Content -->
    <main class="container mx-auto pt-8 text-lg">
        <div class="bg-gray-800 shadow-lg p-6 rounded-lg">
            <h2 class="text-4xl font-bold text-center mb-8">My Study Progress</h2>

            <!-- First Table -->
            <table class="min-w-full table-auto bg-gray-700 rounded-lg mb-8">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="px-2 py-2">Quarter 1</th>
                        <th class="px-4 py-2">Course</th>
                        <th class="px-4 py-2">ECs</th>
                        <th class="px-4 py-2">Assessment</th>
                        <th class="px-4 py-2">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Quarter 1 -->
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2 text-center" rowspan="3">1</td>
                        <td class="px-4 py-2">Programme and Career Orientation</td>
                        <td class="px-4 py-2 text-center">2.5</td>
                        <td class="px-4 py-2 text-center">Interview</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2">Computer Science Basics</td>
                        <td class="px-4 py-2 text-center">5</td>
                        <td class="px-4 py-2 text-center">Written Exam</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2">Programming Basics</td>
                        <td class="px-4 py-2 text-center">5</td>
                        <td class="px-4 py-2 text-center">Case Study Exam</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>

                    <!-- Quarter 2 (merged rows for course "Object Oriented Programming") -->
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2 text-center" rowspan="2">2</td>
                        <td class="px-4 py-2" rowspan="2">Object Oriented Programming</td>
                        <td class="px-4 py-2 text-center">5</td>
                        <td class="px-4 py-2 text-center">Group Assessment</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2 text-center">5</td>
                        <td class="px-4 py-2 text-center">Individual Assessment</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                </tbody>
            </table>

            <div class="my-10 py-4 flex items-center justify-center">
                <div class="w-3/4 h-2 bg-gradient-to-r from-gray-600 to-gray-500 shadow-lg rounded-full"></div>
            </div>

            <!-- Second Table -->
            <table class="min-w-full table-auto bg-gray-700 rounded-lg mb-8">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="px-4 py-2">Quarter 2</th>
                        <th class="px-4 py-2">Course</th>
                        <th class="px-4 py-2">ECs</th>
                        <th class="px-4 py-2">Assessment</th>
                        <th class="px-4 py-2">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Quarter 3  -->
                    <tr class="bg-gray-700 border-b ">
                        <td class="px-4 py-2 text-center" rowspan="4">3</td>
                        <td class="px-24 py-2" rowspan="4">Framework Project</td>
                        <td class="px-4 py-2 text-center">5</td>
                        <td class="px-4 py-2 text-center">Written test (case-study)</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2 text-center">1.25</td>
                        <td class="px-4 py-2 text-center">Written test (database exam)</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2 text-center">2.5</td>
                        <td class="px-4 py-2 text-center">Group Assignment</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2 text-center">1.25</td>
                        <td class="px-4 py-2 text-center">Individual Assignment</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                </tbody>
            </table>

            <div class="my-10 py-4 flex items-center justify-center">
                <div class="w-3/4 h-2 bg-gradient-to-r from-gray-600 to-gray-500 shadow-lg rounded-full"></div>
            </div>

            <!-- Third Table -->
            <table class="min-w-full table-auto bg-gray-700 rounded-lg mb-8">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="px-4 py-2">Quarter 3</th>
                        <th class="px-4 py-2">Course</th>
                        <th class="px-4 py-2">ECs</th>
                        <th class="px-4 py-2">Assessment</th>
                        <th class="px-4 py-2">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Quarter 4 (merged rows for course "Framework Project 2") -->
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2 pl-24" rowspan="3">4</td>
                        <td class="px-4 py-2" rowspan="3">Framework Project 2</td>
                        <td class="px-4 py-2 text-center">2.5</td>
                        <td class="px-4 py-2 text-center">Portfolio</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2 text-center">2.5</td>
                        <td class="px-4 py-2 text-center">Portfolio</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2 text-center">5</td>
                        <td class="px-4 py-2 text-center">Portfolio</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                </tbody>
            </table>

            <div class="my-10 py-4 flex items-center justify-center">
                <div class="w-3/4 h-2 bg-gradient-to-r from-gray-600 to-gray-500 shadow-lg rounded-full"></div>
            </div>

            <!-- Fourth Table -->
            <table class="min-w-full table-auto bg-gray-700 rounded-lg mb-8">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="px-4 py-2">Quarter 4</th>
                        <th class="px-4 py-2">Course</th>
                        <th class="px-4 py-2">ECs</th>
                        <th class="px-4 py-2">Assessment</th>
                        <th class="px-4 py-2">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2 text-center">5</td>
                        <td class="px-4 py-2">Project Management</td>
                        <td class="px-4 py-2 text-center">5</td>
                        <td class="px-4 py-2 text-center">Group Assessment</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                    <tr class="bg-gray-700 border-b">
                        <td class="px-4 py-2 text-center">5</td>
                        <td class="px-4 py-2">User Experience Design</td>
                        <td class="px-4 py-2 text-center">5</td>
                        <td class="px-4 py-2 text-center">Individual Assessment</td>
                        <td class="px-4 py-2 text-center">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>

</html>