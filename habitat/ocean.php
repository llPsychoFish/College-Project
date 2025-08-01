<?php
  include '../dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ocean.css" type="text/css">
    <title>Ocean Habitat - Animal Atlas</title>
</head>
<body>
        <header>
            <h1>🐾 Animal Atlas & Encyclopedia</h1>
            <p>Explore the fascinating world of animals!</p>
        </header>

        <nav class="menu">
        <ul>
            <li><a href="../index.php">HOME</a></li>
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

    <!--slideshow Header-->
    <div class="carousel-container">
        <div class="slides" id="slides">
            <div class="slide">
                <img src="habitat_images/sea1.jpg" alt="Ocean1">
            </div>
            <div class="slide">
                <img src="habitat_images/sea2.jpg" alt="Ocean2">
            </div>
            <div class="slide">
                <img src="habitat_images/ocean3.jpg" alt="Ocean3">
            </div>
            </div>
        
        <div class="navigation">
            <button class="nav-btn" onclick="preslide()">Prev</button>
            <button class="nav-btn" onclick="nextslide()">Next</button>
            </div>
        
    </div>

        <div class="header-text">
            <?php
            $sql = "SELECT * FROM habitat WHERE id = 1";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            if ($queryResults > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<h1>".$row['name']."</h1>";
              }  
            }
            ?>
               
               <p>Covering 70% of the earth, oceans are home to a vast world of
                marine life.</p>
        </div>
    </div>

        <!--Main Content-->
        <div class="section">
            <?php
            $sql = "SELECT * FROM habitat WHERE id = 1";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            if ($queryResults > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                   echo "<h2>What is an Ocean?</h2>
                        <p>".$row['description']."</p>"; 
                }
            }
            ?>
            
            <h2>Types of Ocean Habitats</h2>
            <div class="ocean-type">

                <!--Coral Reefs-->
                <div class="ocean-card" onclick="openModal({image: 'habitat_images/coral reef.jpeg', title: 'Coral Reefs', info: 'Colorful underwater structures formed by corals. Coral reefs are rich in biodiversity, home to clownfish, sea turtles, and anemones.'})">
                    <img src="habitat_images/coral reef.jpeg" alt="Coral Reef">
                    <div class="info">
                        <h3>Coral Reefs</h3>
                        <p>Colorful underwater structures formed by corals. Coral reefs are rich in biodiversity, home to clownfish, sea turtles, and anemones.</p>
                    </div>
                </div>
                <!--Open Ocean-->
                <div class="ocean-card" onclick="openModal({image: 'habitat_images/opean ocean.jpg', title: 'Open Ocean', info: 'This is the deep blue sea, far from shore. Whales, dolphins, tuna, and sharks roam these vast waters.'})">
                    <img src="habitat_images/opean ocean.jpg" alt="Open Ocean">
                    <div class="info">
                        <h3>Open Ocean</h3>
                        <p>This is the deep blue sea, far from shore. Whales, dolphins, tuna, and sharks roam these vast waters.</p>
                    </div>
                </div>

                <!--Deep Sea-->
                <div class="ocean-card" onclick="openModal({image: 'habitat_images/deep sea.jpg', title: 'Deep Sea', info: 'Dark and cold, the deep sea is home to strange creatures like anglerfish and giant squid. It\'s one of the least explored places on Earth.'})">
                    <img src="habitat_images/deep sea.jpg" alt="Deep Sea">
                    <div class="info">
                        <h3>Deep Sea</h3>
                        <p>Dark and cold, the deep sea is home to strange creatures like anglerfish and giant squid. It's one of the least explored places on Earth.</p>
                    </div>
                </div>

            </div>

            <h2>Ocean Animals</h2>
            <div class="ocean-type">

                <div class="ocean-card" onclick="openModal({image: 'habitat_images/dolphin.jpg', title: 'Dolphin', info: 'Smart and social mammals that live in pods. They communicate with clicks and whistles.'})">
                    <img src="habitat_images/dolphin.jpg" alt="Dolphin">
                    <div class="info">
                        <h3>Dolphin</h3>
                        <p>Smart and social mammals that live in pods. They communicate with clicks and whistles.</p>
                    </div>
                </div>
                <div class="ocean-card" onclick="openModal({image: 'habitat_images/sea turtle.jpg', title: 'Sea Turtle', info: 'Graceful swimmers with hard shells, they nest on beaches and live most of their lives in the sea.'})">
                    <img src="habitat_images/sea turtle.jpg" alt="Sea Turtle">
                    <div class="info">
                        <h3>Sea Turtle</h3>
                        <p>Graceful swimmers with hard shells, they nest on beaches and live most of their lives in the sea.</p>
                    </div>
                </div>

                <div class="ocean-card" onclick="openModal({image: 'habitat_images/shark.jpeg', title: 'Sharks', info: 'Top predators of the ocean, sharks help keep marine life populations balanced.'})">
                    <img src="habitat_images/shark.jpeg" alt="Shark">
                    <div class="info">
                        <h3>Sharks</h3>
                        <p>Top predators of the ocean, sharks help keep marine life populations balanced.</p>
                    </div>
                </div>
            </div>
               <a href="../index.html" class="button">Back</a> 
        </div>
    
        <footer>
            <p>© 2025 Animal Atlas | Group 6A Project</p>
        </footer>

        <!-- Lightbox Modal HTML -->
        <div id="lightboxModal" class="modal-overlay" style="display:none;">
          <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <img id="modalImage" style="max-width:95%; max-height:340px; object-fit:cover; display:none; margin-bottom:1rem;" />
            <h2 id="modalTitle" style="display:none;"></h2>
            <p id="modalBody" style="display:none;"></p>
          </div>
        </div>
        <!--Javascript for carousel-container and modal-->
        <script src="ocean.js"></script>
       
</body>
</html>