<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-700 text-white">
  <!-- Include navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Main -->
  <main>
    <div class="p-10 min-h-screen">
      <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
        <h1 class="text-5xl font-bold text-center mb-6">About Me</h1>

        <div class="text-xl space-y-4">
          <p>
            Hi, I'm Dimitar Yosifov, a 19-year-old student from Bulgaria. Currently, I am living in a student dorm as I pursue my education. My background includes a HAVO diploma with a focus on IT and Math. I am passionate about technology and aspire to become a tech entrepreneur, aiming to create innovative software solutions that can make a difference in people's lives.
          </p>
          <p>
            In my free time, I enjoy going to the gym to stay fit and relieve stress. I also have a keen interest in learning new skills, such as fishing. I love being outdoors and connecting with nature. Additionally, I have a penchant for movies, especially thrillers that I can watch repeatedly.
          </p>
        </div>

        <h2 class="text-3xl font-bold text-center mt-6 mb-4">Characteristics</h2>
        <ul class="list-disc list-inside text-xl space-y-2 pl-5">
          <li>Creative</li>
          <li>Adaptable</li>
          <li>Team player</li>
          <li>Enthusiastic</li>
        </ul>

        <h2 class="text-3xl font-bold text-center mt-6 mb-4">Connect with Me</h2>
        <div class="flex justify-center space-x-6 mt-4">
          <a href="https://www.facebook.com/profile.php?id=100029874052265" target="_blank" class="text-blue-400 hover:underline">FaceBook</a>
          <a href="https://open.spotify.com/user/31aqqyax7ysw6t6hqswe4lmxcf4q" target="_blank" class="text-blue-400 hover:underline">Spotify</a>
          <a href="https://twitter.com/yourprofile" target="_blank" class="text-blue-400 hover:underline">Phone</a>
        </div>

        <div class="flex justify-center mt-6">
          <img
            src="https://t3.ftcdn.net/jpg/05/16/11/58/360_F_516115826_5pFVrzx7dGqmvNCGa7ct1UvCmPAQ7LtD.jpg"
            alt="Profile Image"
            class="w-1/2 object-cover rounded shadow-md" />
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
</body>

</html>