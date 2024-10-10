<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="scripts.js" defer></script>
</head>

<body class="bg-gray-800">
  <!-- Include navbar -->
  <?php include 'navbar.php'; ?>
  <!-- End including -->

  <!-- Main -->
  <main>
    <div class="relative bg-gray-800 p-10 min-h-screen">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <div class="relative z-10 bg-gray-900 p-6 m-6 rounded-lg shadow-lg">
        <div class="space-y-4 text-xl text-gray-300 font-semibold">

          <h1 class="text-3xl">Questionnaire</h1>

          <div>
            <h2 class="cursor-pointer text-2xl text-gray-200 hover:text-blue-400" onclick="toggleAnswer(event)">What is your name?</h2>
            <p class="answer hidden text-base text-gray-300 opacity-0">Dimitar Yosifov</p>
          </div>

          <div>
            <h2 class="cursor-pointer text-2xl text-gray-200 hover:text-blue-400" onclick="toggleAnswer(event)">What is your age?</h2>
            <p class="answer hidden text-base text-gray-300 opacity-0">19</p>
          </div>

          <div>
            <h2 class="cursor-pointer text-2xl text-gray-200 hover:text-blue-400" onclick="toggleAnswer(event)">Where do you live?</h2>
            <p class="answer hidden text-base text-gray-300 opacity-0">Bulgaria</p>
          </div>

          <div>
            <h2 class="cursor-pointer text-2xl text-gray-200 hover:text-blue-400" onclick="toggleAnswer(event)">What is your living situation?</h2>
            <p class="answer hidden text-base text-gray-300 opacity-0">Student dorm</p>
          </div>

          <div>
            <h2 class="cursor-pointer text-2xl text-gray-200 hover:text-blue-400" onclick="toggleAnswer(event)">Which prior education have you completed?</h2>
            <p class="answer hidden text-base text-gray-300 opacity-0">HAVO</p>
          </div>

          <div>
            <h2 class="cursor-pointer text-2xl text-gray-200 hover:text-blue-400" onclick="toggleAnswer(event)">What profile (or subjects/courses) did you do in your prior education?</h2>
            <p class="answer hidden text-base text-gray-300 opacity-0">IT/Math</p>
          </div>

          <div>
            <h2 class="cursor-pointer text-2xl text-gray-200 hover:text-blue-400" onclick="toggleAnswer(event)">Have you followed a programme at a university of applied sciences or a university before?</h2>
            <p class="answer hidden text-base text-gray-300 opacity-0">No</p>
          </div>

          <h2 class="cursor-pointer text-2xl text-gray-200 hover:text-blue-400" onclick="toggleAnswer(event)">Which study choice check activities have you done?</h2>
          <div class="answer hidden text-base text-gray-300 opacity-0">
            <div class="flex flex-col space-y-2 text-base text-gray-300 items-start">
              <div class="flex items-center">
                <input type="checkbox" class="mr-2 h-4 w-4 text-gray-600 border-gray-400 rounded focus:ring-gray-600" />
                <p>Open day</p>
              </div>
              <div class="flex items-center">
                <input type="checkbox" class="mr-2 h-4 w-4 text-gray-600 border-gray-400 rounded focus:ring-gray-600" />
                <p>Student for a day</p>
              </div>
              <div class="flex items-center">
                <input type="checkbox" class="mr-2 h-4 w-4 text-gray-600 border-gray-400 rounded focus:ring-gray-600" checked />
                <p>Trial study day</p>
              </div>
              <div class="flex items-center">
                <input type="checkbox" class="mr-2 h-4 w-4 text-gray-600 border-gray-400 rounded focus:ring-gray-600" />
                <p>Online information session</p>
              </div>
              <div class="flex items-center">
                <input type="checkbox" class="mr-2 h-4 w-4 text-gray-600 border-gray-400 rounded focus:ring-gray-600" checked />
                <p>Chat with a student (via hz.nl)</p>
              </div>
              <div class="flex items-center">
                <input type="checkbox" class="mr-2 h-4 w-4 text-gray-600 border-gray-400 rounded focus:ring-gray-600" />
                <p>Conversation with a study choice advisor (via hz.nl)</p>
              </div>
              <div class="flex items-center">
                <input type="checkbox" class="mr-2 h-4 w-4 text-gray-600 border-gray-400 rounded focus:ring-gray-600" />
                <p>No study choice activities</p>
              </div>
            </div>
          </div>

          <div>
            <h2 class="cursor-pointer text-2xl text-gray-200 hover:text-blue-400" onclick="toggleAnswer(event)">What do you see yourself doing after completing the program?</h2>
            <p class="answer hidden text-base text-gray-300 opacity-0 break-words">
              I am passionate about becoming a tech entrepreneur, creating a startup that focuses on developing innovative software solutions or products that address pressing needs in the market. I am especially drawn to fields like artificial intelligence and cybersecurity, as these areas are rapidly evolving and have the potential to transform industries and daily life. By founding my own company, I would have the creative freedom to explore new ideas, innovate, and build a team of like-minded individuals dedicated to pushing the boundaries of technology.
            </p>
          </div>

          <div>
            <h2 class="cursor-pointer text-2xl text-gray-200 hover:text-blue-400" onclick="toggleAnswer(event)">What hobbies do you have?</h2>
            <p class="answer hidden text-base text-gray-300 opacity-0 break-words">
              I have a few hobbies and interests that I’m really passionate about. One of my main hobbies is going to the gym. I enjoy working out because it helps me stay fit and healthy, and it's a great way to relieve stress. I like challenging myself with different workouts, whether it’s weightlifting, cardio, or trying out new fitness programs. Going to the gym has become an important part of my routine, and I love seeing the progress I make over time. Recently, I’ve developed an interest in learning how to fish. I’ve never been fishing before, but I’m intrigued by the idea of being outdoors, enjoying nature, and learning a new skill. Fishing seems like a relaxing yet rewarding activity that requires patience and technique, and I’m eager to give it a try.
            </p>
          </div>
          <!-- Images Section -->
          <div class="flex justify-center items-start space-x-4 p-6">
            <!-- Strengths Section -->
            <div class="flex w-1/2 ">
              <img src="https://www.primalstrength.com/cdn/shop/files/gymdesign_render_Two_collumn_grid_cb1b5850-fa8e-4a7b-a2b3-190c2e45facd.jpg?v=1680719688&width=1500" alt="Strength Image" class="w-1/3 object-cover rounded shadow-md" />
              <div class="ml-4">
                <h1 class="text-3xl font-semibold text-gray-100">Strengths</h1>
                <p class="text-base text-gray-300">
                  My biggest strengths are my skills in working with a team and my endless creativity. I thrive in collaborative environments where I can connect with others, share ideas, and work towards common goals. I believe that effective teamwork is all about communication, mutual respect, and leveraging each person's strengths to achieve the best outcome. I’m always ready to listen to others, contribute my ideas, and help create an inclusive and productive team atmosphere.
                </p>
              </div>
            </div>
          </div>

          <div class="flex justify-center items-start space-x-4 p-6">
            <!-- Weaknesses Section -->
            <div class="flex w-1/2">
              <img src="https://www.eschoolnews.com/files/2023/07/arts-education-STEAM.jpeg" alt="Weakness Image" class="w-1/3 object-cover rounded shadow-md" />
              <div class="ml-4">
                <h1 class="text-3xl font-semibold text-gray-100">Weaknesses</h1>
                <p class="text-base text-gray-300">
                  My biggest weakness is that I tend to make fast decisions, which sometimes aren’t as well thought-out as they should be. While my quick decision-making can be beneficial in situations that require rapid responses, it can also lead to overlooking important details.
                </p>
              </div>
            </div>
          </div>


        </div>
        <aside>
          <div class="text-gray-200 display-flex text-4xl">
            <ul class="text-4xl">FeedBacks:</ul>
            <li class="3xl underline pt-4"> <a href="firstFeedback.html" target="_blank">First Feedback</a></li>
            <li class="3xl underline pt-4"> <a href="https://prnt.sc/fNueyMK-_osO " target="_blank">Feedback 1</a></li>
            <li class="3xl underline pt-4"> <a href="https://prnt.sc/I8aHKWUF31KX" target="_blank">Feedback 2</a></li>
            <li class="3xl underline pt-4"><a href="https://prnt.sc/X6BCq4RmFRDQ" target="_blank">Feedback 3</a></li>
            <div class="flex justify-end">
              <img class="w-12 " src="images/hz-logo.png" alt="Hz logo">
            </div>
          </div>

      </div>
  </main>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
</body>

</html>