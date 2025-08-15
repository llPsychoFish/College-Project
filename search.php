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
    <link rel="stylesheet" href="search.css" type="text/css"/>
  </head>

    <body>
        <header>
            <h1>🐾 Animal Atlas & Encyclopedia</h1>
            <p>Explore the fascinating world of animals!</p>
        </header>

        <nav class="menu">
            <ul>
                <li><a href="index.php">HOME</a></li>
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

        <main>
            <h1>Search Page</h1>
            <?php
            if (isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string($conn, $_POST['search']);
        
                // Count results from all tables
                $birdsSql = "SELECT * FROM birds WHERE name LIKE '%$search%' OR habitat LIKE '%$search%' OR description LIKE '%$search%'";
                $birdsResult = mysqli_query($conn, $birdsSql);
                $birdsCount = mysqli_num_rows($birdsResult);
        
                $blogsSql = "SELECT * FROM blogs WHERE title LIKE '%$search%' OR content LIKE '%$search%'";
                $blogsResult = mysqli_query($conn, $blogsSql);
                $blogsCount = mysqli_num_rows($blogsResult);
        
                $habitatSql = "SELECT * FROM habitat WHERE name LIKE '%$search%' OR description LIKE '%$search%'";
                $habitatResult = mysqli_query($conn, $habitatSql);
                $habitatCount = mysqli_num_rows($habitatResult);
        
                $totalResults = $birdsCount + $blogsCount + $habitatCount;
        
                echo "<h2>There are ".$totalResults." results in total</h2>";
            }
            ?>

            <?php
            if (isset($_POST['submit-search']) && $birdsCount > 0) {
                echo '<div class="birds">';
                while ($row = mysqli_fetch_assoc($birdsResult)) {
                    $birdName = str_replace(' ', '_', $row['name']);
                    echo "<a href='../list/bird.php#".$birdName."'>
                          <h2>".$row['name']."</h2>
                          <p>".$row['description']."</p></a>";                
                }
                echo '</div>';
            }
            ?>

            <?php
            if (isset($_POST['submit-search']) && $blogsCount > 0) {
                echo '<div class="blogs">';
                while ($row = mysqli_fetch_assoc($blogsResult)) {
                    // Check search term to determine which PHP file to link to
                    if (stripos($search, 'wild') !== false) {
                        $linkFile = 'blogfiles/wild.php';
                    } elseif (stripos($search, 'cute') !== false) {
                        $linkFile = 'blogfiles/cute.php';
                    } elseif (stripos($search, 'fastest') !== false) {
                        $linkFile = 'blogfiles/fastest animals.php';
                    } else {
                        $linkFile = 'blogfiles/weired animals.php';
                    }
                    
                    echo "<a href='".$linkFile."'>
                          <h2>".$row['title']."</h2>
                          <p>".$row['content']."</p></a>";
                }
                echo '</div>';
            }                  
            ?>

            <?php
            if (isset($_POST['submit-search']) && $habitatCount > 0) {
                echo '<div class="habitat">';
                while ($row = mysqli_fetch_assoc($habitatResult)) {
                    // Check search term to determine which PHP file to link to
                    if (stripos($search, 'ocean') !== false) {
                        $linkFile = 'habitat/ocean.php';
                    } elseif (stripos($search, 'forest') !== false) {
                        $linkFile = 'habitat/tropics.php';
                    } else {
                        $linkFile = 'habitat/tropics.php'; // default
                    }
                    
                    echo "<a href='".$linkFile."'>
                          <h2>".$row['name']."</h2>
                          <p>".$row['description']."</p></a>";
                }
                echo '</div>';
            }
            ?>

            <?php
            if (isset($_POST['submit-search']) && $totalResults == 0) {
            echo "<p>There are no results matching your search</p>";
            }
            ?>
            </div>

            <footer>
                <p>© 2025 Animal Atlas | Group 6A Project</p>
            </footer>

        </main>
    </body>
</html>