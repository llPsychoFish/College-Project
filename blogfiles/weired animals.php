<?php
  include '../dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Top 10 Weirdest Animals</title>
    <link rel="stylesheet" href="weired.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0
  </head>
  <body>
    <div class="green-header">
      <?php
      $sql = "SELECT * FROM blogs WHERE id = 2";
      $result = mysqli_query($conn, $sql);
      $queryResults = mysqli_num_rows($result);

      if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<h1>".$row['title']."</h1>
                </div>
                <hr>
                <p class='pet'>".$row['content']."</p>";
        }
      } else {
        echo "No results found.";
      }
      ?>
      
    

<li>
  <h2><strong>Axolotl</strong> – A smiling salamander that never grows up. </h2>
    <div class="animal-detail-flex">
<div class="animal-images">
 <img class="animal-img-left" src="images/axolotl 1.webp" alt="Axolotl Left" />
 <img class="animal-img-right" src="images/axolotl 3.webp" alt="Axolotl Right" />
</div>  
    <div class="animal-desc">
      The axolotl (pronounced ACK-suh-lot-ul) is a neotenic salamander, which means it never outgrows its larval stage. Unlike most amphibians that go through metamorphosis (like tadpole to frog), the axolotl stays in its youthful, underwater form for its entire life — keeping its external gills, finned tail, and aquatic lifestyle. Native only to lakes Xochimilco and Chalco in Mexico, axolotls are now critically endangered in the wild, though they thrive in labs and aquariums worldwide. <br>
      It Can Regrow EVERYTHING!

The axolotl is a regeneration master — it can regrow its legs, tail, heart, spine, and even parts of its brain and eyes. Scientists study axolotls for clues to human tissue regeneration.
      <br> <br>
      <strong> Weird & Awesome Facts:</strong><br> 
1) It Can Regrow EVERYTHING! <br>
The axolotl is a regeneration master — it can regrow its legs, tail, heart, spine, and even parts of its brain and eyes. Scientists study axolotls for clues to human tissue regeneration. <br>
2) It Never Grows Up
Axolotls exhibit neoteny, meaning they keep their baby features forever. They become sexually mature without transforming into adult salamanders — staying aquatic and gilled for life.<br>
3) They Can Be Albino and Glow
Some axolotls are genetically modified in labs to glow green under UV light, thanks to jellyfish genes used in scientific research.<br>
4) They Can Breathe Three Ways
Through their gills, lungs, and skin! That’s some serious respiratory flexibility.<br>
5)They Eat by Suction
Axolotls don’t chew. Instead, they suck in food like a vacuum using the pressure of their wide mouths. <br>  <br> 

<strong>Fun Fact:</strong> Axolotls can live up to 15 years in captivity and come in various colors, including pink, golden albino, and black.<br> <br>
    </div>
  </div>
</li> <hr>
<br> <br>
    
<h2><strong>Glass frog</strong> </h2>
   <div class="animal-detail-flex">
<div class="animal-images">
 <img class="animal-img-left" src="images/glass frog.webp" alt="Glass frog Left" />
 <img class="animal-img-right" src="images/glass frog 2.webp" alt="Glass frogRight" />
</div>  
    <div class="animal-desc">

      he Glass Frog looks like a regular green tree frog from above — but when you turn it over, things get weird:
🔍 Its skin is transparent on the underside, revealing its heart, liver, intestines, and even eggs in some females!

This clear belly is what gives the glass frog its name — it’s like having invisible skin over its organ
      
      <br> <br>
      <strong> Weird & Awesome Facts:</strong><br> 
1) You can see its heart beating! <br>
 Their undersides are so clear that you can literally watch their organs function in real time without surgery or X-rays <br>
2) It’s a natural camouflage master <br>
 The green coloring on their backs blends in perfectly with leaves, while their transparent underside makes them harder for predators to see from below.<br>
3) Scientists still don’t know why they’re see-through <br>
Unlike deep-sea fish, glass frogs live in bright rainforests — so scientists are still trying to understand the evolutionary reason for their transparency
Some axolotls are genetically modified in labs to glow green under UV light, thanks to jellyfish genes used in scientific research.<br>
4) Males are excellent dads <br>
 In many species, the male guards the eggs laid on leaves, keeping them moist and safe from predators — sometimes for weeks.<br>
5)They’re small but mighty <br>
 Most glass frogs are tiny — around 1–3 inches long — but some can leap great distances and make high-pitched chirps to attract mates.<br>

    </div>
  </div>
</li> <hr>
<br> <br>


<h2><strong>Leafy Sea Dragon </strong> </h2>
  <div class="animal-detail-flex">
   <div class="animal-images">
 <img class="animal-img-left" src="images/leafy sea dragon 2.webp" alt="Leafy Sea Dragon" />
 <img class="animal-img-right" src="images/leafy sea dragon 3.webp" alt="Leafy Sea Dragon" />
   </div> 
    <div class="animal-desc">

      The Leafy Sea Dragon is a marine fish that looks like a floating sea plant. Its body is covered in leaf-like fins and frills, which it uses not for swimming — but for camouflage!
Although it resembles floating seaweed, it’s actually a slow-moving fish that relies on blending in to stay safe.
It’s called a “dragon” because of its resemblance to mythical dragons, especially with its long snout and frilly appendages.
   
      <br> <br>
      <strong> Weird & Awesome Facts:</strong> <br> 
1) It doesn’t use its leafy parts to swim <br>
 All those leafy extensions? They don’t help it move. Instead, the Leafy Sea Dragon swims using tiny, nearly invisible fins, making it look like it’s drifting with the current. <br>
2) It’s a master of disguise <br>
 hanks to its plant-like appearance, predators often can’t tell it’s an animal at all. It blends in with seaweed and kelp perfectly.<br>
3) Males carry the babies! <br>
 Like seahorses, the male Leafy Sea Dragon carries and incubates the eggs — but on the underside of his tail, not in a pouch. <br>
4) It’s very slow <br>
 They’re terrible swimmers, moving so slowly that they rely almost entirely on camouflage to survive. <br>
5) It’s endangered and protected <br>
 Due to habitat loss and pollution, they’re considered vulnerable in the wild. Australia protects them under wildlife law <br>

    </div>
  </div>
</li> <hr>
<br> <br>



<h2><strong>The Saiga Antelope </strong> </h2>
  <div class="animal-detail-flex">
<div class="animal-images">
 <img class="animal-img-left" src="images/saiga antelope 1.webp" alt="The Saiga Antelope Left" />
 <img class="animal-img-right" src="images/saiga antelope 2.webp" alt="The Saiga Antelope Right" />
</div>  
    <div class="animal-desc">
    
The Saiga Antelope is a medium-sized antelope with a truly bizarre feature: its large, downward-facing, flexible nose. This strange “trunk-like” nose isn’t just for show — it helps it survive in some of the harshest environments on Earth.
Its nose acts as a built-in air filter and climate control system, filtering out dust in summer and warming the icy air in winter before it reaches the lungs.

   
      <br> <br>
      <strong> Weird & Awesome Facts:</strong> <br> 
1) Its nose is like a built-in air conditioner <br>
 The Saiga’s oversized nose warms and moistens freezing air in winter, and filters out dust during the dry, windy summers of the steppes <br>
2) They’re speedy survivors <br>
  Saigas can run at speeds of up to 80 km/h (50 mph) to escape predators like wolves. <br>
3) They suffered a mysterious mass die-off <br>
  In 2015, over 200,000 Saigas (60% of the global population) died suddenly due to a bacterial infection made worse by hot, humid weather — a possible link to climate change. <br>
4)They migrate in massive herds <br>
 Saigas once roamed across Eurasia in huge migratory groups, like wildebeests in Africa. Today, those migrations are rare due to habitat fragmentation. <br>
5) They’re evolutionary leftovers<br>
 Saigas coexisted with woolly mammoths and saber-toothed cats during the Ice Age — and their odd nose likely helped them survive glacial winds. <br>
    </div>
  </div>
</li> <hr>
<br> <br>



<h2><strong>Proboscis Monkey</strong> </h2>
  <div class="animal-detail-flex">
    <div class="animal-images">
      <img class="animal-img-left" src="images/proboscis monkey 1.webp" alt="Proboscis Monkey Left" />
      <img class="animal-img-right" src="images/proboscis monkey 2.webp" alt="Proboscis Monkey Right" />
    </div>
    <div class="animal-desc">
    
The Proboscis Monkey is a large monkey with reddish-brown fur, a long tail, and a strikingly large nose — especially in adult males. The male’s nose hangs over its mouth like a fleshy banana, which gives the monkey a cartoon-like appearance.
This nose isn’t just for looks — it actually helps amplify their vocal calls, which is useful for attracting mates and warning other males. The bigger the nose, the more attractive the male is thought to be!
   
      <br> <br>
      <strong> Weird & Awesome Facts:</strong> <br> 
1) That nose is a vocal amplifier <br>
 Male proboscis monkeys use their oversized nose to make loud, honking calls that echo through the forest. Females prefer louder males — so, big nose = big love. <br>
2) They look permanently bloated — and there’s a reason <br>
  Proboscis monkeys have huge potbellies due to their specialized multi-chambered stomachs that ferment leafy food (kind of like cows). This helps them digest tough plant material, but makes them look comically full all the time. <br>
3) They are excellent swimmers <br>
  Proboscis monkeys are one of the best swimmers among primates. They have partially webbed feet and hands, and can dive into rivers to escape predators like crocodiles! <br>
4)They communicate with more than just honks <br>
 Besides vocal calls, proboscis monkeys use facial expressions, body posture, and even nose gestures to communicate with their troop. <br>
5) They’re endangered<br>
 Due to habitat loss, hunting, and deforestation in Borneo, their populations have dropped significantly, and they are now classified as endangered. <br>
    </div>
  </div>
</li> <hr>
<br> <br>





      <li>
        <strong>Star-Nosed Mole</strong> – Has 22 fleshy tentacles on its nose!
      </li>

      <li>
        <strong>Glass Frog</strong> – See-through skin that reveals its internal
        organs.
      </li>

      <li>
        <strong>Pistol Shrimp</strong> – Shoots bubbles that create shockwaves.
      </li>

      <li>
        <strong>Blobfish</strong> – Named the world’s ugliest animal (but it's
        kind of cute).
      </li>

      <li>
        <strong>Saiga Antelope</strong> – Its large nose helps filter dust.
      </li>

      <li><strong>Leafy Sea Dragon</strong> – Looks exactly like seaweed!</li>

      <li><strong>Okapi</strong> – A zebra-giraffe hybrid found in Africa.</li>

      <li>
        <strong>Yeti Crab</strong> – Furry pincers and lives near deep sea
        vents.
      </li>

      <li>
        <strong>Proboscis Monkey</strong> – With a comically large nose and pot
        belly.
      </li>
    </ol>

    <p>
      Weird, wonderful, and wildly unique — these animals show how diverse life
      on Earth really is.
    </p>

    <a class="back-link" href="blog2.html">← Back to Blog List</a>
  </body>
</html>

