<?php
  include 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="author" content="Arnold | Others"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="This is a website about wildlife ranging from endangerd species to sea creatures to the amazon and the harsh climate of the artic by group 6A"/>
    <link rel="icon" href="images/logo.png" type="image/x-icon"/>
    <title>Animal Atlas And Encyclopedia</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
  </head>
  <body>
    <header>
      <h1>🐾 Animal Atlas & Encyclopedia</h1>
      <p>Explore the fascinating world of animals!</p>
    </header>

    <nav class="menu">
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li class="dropdown">
          <a href="#" class="dropbtn">ANIMAL LIST</a>
          <div class="dropdown-content">
            <a href="../list/mammals.html">MAMMALS</a>
            <a href="../list/reptiles.html">REPTILES & AMPHIBIANS</a>
            <a href="../list/bird.php">BIRDS</a>
            <a href="../list/fish.html">SEA CREATURES</a>
          </div>
        </li>
        <li><a href="../conservation.html">CONSERVATION</a></li>
        <li class="dropdown">
          <a href="#" class="dropbtn">HABITAT</a>
          <div class="dropdown-content">
            <a href="../habitat/ocean.php">OCEAN</a>
            <a href="../habitat/desert.html">DESERT</a>
            <a href="../habitat/tropics.php">FOREST</a>
            <a href="../habitat/arctic.html">ARCTIC</a>
          </div>
        </li>
        <li class="dropdown">
          <a href="#" class="dropbtn">RESOURCES</a>
          <div class="dropdown-content">
            <a href="../resources/facts-jokes.html">FACTS & JOKES</a>
            <a href="../resources/quiz.html">FUN QUIZ</a>
          </div>
        </li>
        <li><a href="../blogfiles/blog2.html">BLOG</a></li>
      </ul>
    </nav>

    <div class="search">
      <form action="search.php" method="POST">
        <input class="srch" type="search" name="search" placeholder="Search Animals"/>
        <button class="btn" type="submit" name="submit-search">Search</button>
      </form>
    </div>

    <div class="content">
      <h2>
        Welcome to Animal Atlas and Encyclopedia: Your Ultimate Guide to the
        Animal Kingdom!
      </h2>
      <p class="par">
        Dive into the fascinating world of animals with our comprehensive and
        interactive platform. Animal Atlas and Encyclopedia is designed to be
        your go-to resource for exploring the diverse and incredible species
        that share our planet.
      </p>
      <p class="per">
        Whether you're a student, a researcher, or simply an animal lover,
        Animal Atlas and Encyclopedia offers an immersive and educational
        experience that celebrates the richness and complexity of the animal
        kingdom. Join us on this journey of discovery and appreciation for the
        incredible creatures that call Earth home.
      </p>
      <p><strong>Explore, Learn, and Be Inspired!</strong></p>
      <a href="list/bird.html" class="cn">Explore Our Animals</a>
    </div>

    <main>
      <!-- Animal Cards Section -->
      <section class="animals">
        <h2 class="wf">Weekly Features</h2>
        <div class="animal-cards">
          <!-- Animal Card -->
          <div class="card">
            <img src="images/dingo.jpg" alt="Dingo" />
            <h3>Dingo (Animal of the Week)</h3>
            <p class="des1 card-desc">
              Dingoes are highly adaptable and can thrive in various
              environments, including deserts, grasslands, and forests.
            </p>
          </div>
          <!-- Habitat Card -->
          <div class="card">
            <img
              src="images/tropical_rainforest.jpg"
              alt="Tropical Rainforest"
            />
            <h3>Tropical Rainforest (Weekly Habitat)</h3>
            <p class="des2 card-desc">
              Tropical rainforests are dense, warm, and wet forests that are
              home to a diverse array of plant and animal species.
            </p>
          </div>
          <!-- Endangered Species Card -->
          <div class="card">
            <img src="images/okapi.jpg" alt="Okapi (Endangered)" />
            <h3>Okapi (Endangered Species)</h3>
            <p class="des3 card-desc">
              Okapis are elusive forest animals native to the Democratic
              Republic of the Congo and are threatened by habitat loss.
            </p>
          </div>
        </div>
      </section>

      <!-- Fun Fact Generator -->
      <section class="fact-generator">
        <h2>Random Animal Fact</h2>
        <p id="fact-text">Click the button to learn something new!</p>
        <button onclick="generateFact()">Generate Fact</button>
      </section>

      <!-- Gallery -->
      <section class="gallery">
        <h2>Animal Gallery</h2>
        <div class="gallery-images"></div>
        <button class="gallery-nav gallery-prev" aria-label="Previous image">
          &#8592;
        </button>
        <button class="gallery-nav gallery-next" aria-label="Next image">
          &#8594;
        </button>
      </section>
    </main>

    <footer>
      <p>© 2025 Animal Atlas | Group 6A Project</p>
    </footer>

    <script src="script.js"></script>
  </body>
</html>