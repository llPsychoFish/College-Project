<?php
  include '../dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Cute But Dangerous Baby Animals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="cute.css" type="text/css" />
  </head>
  <body>
    <div class="green-header">
      <?php
      $sql = "SELECT * FROM blogs WHERE id = 3";
      $result = mysqli_query($conn, $sql);
      $queryResults = mysqli_num_rows($result);

      if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<h1>".$row['title']."</h1>
                </div>
                <hr>
                <a href='blog2.html' class='back-link'>← Back to Home</a>
                <p class='pet'>".$row['content']."</p>";
        }
      } else {
        echo "No results found.";
      }
      ?>
      
      <p class="pet">In this blog, we take a walk on the wild side and explore the world of baby animals that look like living plush toys but come with serious warning labels. So buckle up — these baby animals might melt your heart, but they’re definitely not your average cuddle buddies.
    </p>
 </div>
  </div>
 <hr>
<br> 

 
<li>
  <h2><strong>Tiger Cubs</strong> </h2>
  <div class="animal-detail-flex">
    <div class="animal-images">
      <img class="animal-img-left" src="images/tiger cub 1.webp" alt="Tiger Cub Left" />
      <img class="animal-img-right" src="images/tiger cub 2.webp" alt="Tiger Cub Right" />
    </div>
    <div class="animal-desc">
     
Tiger cubs are undeniably adorable — with their soft fur, playful behavior, and big blue eyes.
 But don’t be fooled — these little cuties come with serious danger nearby
      <br> <br>
      <strong>Why They’re Cute: </strong>
      <br> 
1) Tiger cubs are born with blue eyes, which gradually turn golden <br>
2)They love to play-fight and tumble, just like house kittens <br>
3)They make soft chirping sounds to call for their mothers <br>
4)Covered in fluffy fur with small paws and innocent expressions <br>
      <br>
      <strong>Why They’re Dangerous: </strong><br>
      1) Mama tiger is always nearby.<br>
      Female tigers are extremely protective of their cubs,
    a mother will attack without warning if she senses any threat
    She can leap 10 feet, sprint at 60 km/h, and take down animals 10x her size <br>
      2)  Cubs learn aggression early.<br>
      Even at just a few weeks old, cubs begin to show dominance and fight for territory during play
    Their claws and teeth are already sharp, and they bite during play<br> 
      3)They blend in, but you’re the one who stands out.<br>
In the wild, cubs hide in tall grass — but if you approach without seeing them, mom might strike before you even know she’s there <br>
<br>
      <strong>weird and wild facts </strong><br>  
  •	Cubs stay with their mother for up to 2 years, learning to hunt and stalk prey<br>
  •	They double in weight every few weeks after birth<br>
  •	Tigers are born blind and helpless but grow into apex predators within months<br>
  •	Cubs begin stalking prey playfully at around 6 months<br>
 </div>
  </div>
</li> <hr>
<br> <br>


<li>
  <h2><strong>Bear Cubs</strong> </h2>
  <div class="animal-detail-flex">
    <div class="animal-images">
      <img class="animal-img-left" src="images/bear cub 1.webp" alt="Bear Cub Left" />
      <img class="animal-img-right" src="images/bear cub 2.webp" alt="Bear Cub Right" />
    </div>
    <div class="animal-desc">
     
    Bear cubs are adorable and playful offspring of bears, born to species like grizzly bears, black bears, polar bears and pandars Most bear cubs are born tiny (often under 1 lb / 0.5 kg) and helpless during winter while the mother hibernates (except polar bears).  
- Litters usually consist of 1–4 cubs, depending on the species.  
- They nurse for months and stay close to their mother for warmth and protection. 
      <br> <br>
      <strong>Why They’re Cute: </strong>
      <br> 
1) Tiny ears, fuzzy bellies, and wobbly legs
 <br>
2)Playful behavior like wrestling, climbing, and chasing butterflies
 <br>
3)Soft grunts and squeaks that sound harmless
 <br>
4)Look like living teddy bears!
 <br>
      <br>
      <strong>Why They’re Dangerous: </strong><br>
      1)A mother bear will attack first, ask questions never
 .<br>
      Bear mothers are known for ferocity and fearlessness
  they can charge at up to 35 mph (56 km/h) — faster than any human.
    They don’t bluff — if they think you’re a threat, they’ll try to eliminate you
 <br>
      2) You probably won’t see the mom until it’s too late.<br>
     Cubs roam a little while exploring, but mama is always watching, even if hidden in brush or trees.
  Many bear attacks on hikers or campers are triggered by accidental cub encounters
 <br> 
      3)Cubs quickly learn aggression and strength.<br>
Even small cubs have strong jaws and claws for climbing and swatting.
  They begin learning to hunt, fight, and assert dominance through play and imitation
 <br>
<br>
      <strong>weird and wild facts </strong><br>  
  •	Bear cubs are born during hibernation, blind and toothless, about the size of a soda can
<br>
  •	They stay with their mom for 1.5 to 3 years, depending on the species
<br>
  •	Grizzly and polar bear moms are among the most protective mothers in the animal kingdom<br>
  •	Cubs communicate with whines, grunts, and squeals — and mom responds instantly<br>

  <p>• If you see a bear cub in the wild — freeze, back away slowly, and leave immediately.
You are dangerously close to a protective, powerful, and potentially deadly mother.</p>
 </div>
  </div>
</li> <hr>
<br> <br>


<li>
  <h2><strong>Crocodile hatchlings</strong> </h2>
  <div class="animal-detail-flex">
    <div class="animal-images">
      <img class="animal-img-left" src="images/crocodile hatchling 1.webp" alt="Crocodile Hatchling Left" />
      <img class="animal-img-right" src="images/crocodile hatchling 2.webp" alt="Crocodile Hatchling Right" />
    </div>
    <div class="animal-desc">
     
    Crocodile hatchlings are small, squeaky, and surprisingly cute — with their tiny snouts and striped baby scales.
     But behind their cuteness is one of the most ancient and dangerous survival strategies in the animal kingdom. 

      <br> <br>
      <strong>Why They look soo Cute: </strong>
      <br> 
1) Hatchlings are about the size of your hand (6–10 inches long) when they first emerge from their eggs.
 <br>
2)Their tiny snouts, curious eyes, and striped patterns give them an innocent, toy-like appearance.
 <br>
3)They make adorable chirping sounds, especially when hatching or calling their mother.
 <br>
4)You might even see them riding in their mother’s mouth, which looks strangely nurturing.
 <br>
      <br>
      <strong>Why They’re Actually Dangerous: </strong><br>
      1)That chirping sound is a built-in alarm system
 .<br>
      The cute squeaks they make? That’s a distress call.
    Their mother, often hidden nearby, responds instantly and violently to any sign of a threat — including humans.

 <br>
      2)Mama Crocodile is closer than you think.<br>
   Despite their cold reputation, crocodile mothers are highly protective.
    She will attack anything that approaches her nest or hatchlings — and can leap from the water with shocking speed and strength.  
 <br> 
      3) They may be small, but they’re born ready.<br>
Hatchlings are natural predators from day one.
  Within hours of hatching, they begin snapping at insects and fish and instinctively know how to hide and strike.
   4) Don’t be fooled — you’re not just watching babies
.<br>
Seeing a group of croc hatchlings? You’re probably already in the strike zone.
  One wrong step, and you’re face-to-face with a 500–1000 kg mother that hasn’t had a meal in a while.

 <br>
<br>
      <strong>Strange But True </strong><br>  
  •	Crocodiles don’t have vocal cords, but their babies still chirp from inside their eggs to alert mom that it’s hatching time.
<br>
  •	A mother may carry dozens of babies in her mouth gently, despite having one of the strongest bites on Earth.

<br>
  •	Even after hatching, less than 1% survive to adulthood — they face predators everywhere… except when mom is near.<br>
  •	Crocodiles have been using the same parenting methods for over 200 million years — they outlived the dinosaurs for a reason.<br>

  <p>• Crocodile hatchlings may look harmless — but they’re alarm systems on legs.
Approach them, and you’re not just dealing with a baby… you’re triggering an attack from one of the world’s most powerful animals.</p>

 </div>
  </div>
</li> <hr>
<br> <br>


<li>
  <h2><strong>Elephant calves</strong> </h2>
  <div class="animal-detail-flex">
    <div class="animal-images">
      <img class="animal-img-left" src="images/elephant calves 1.webp" alt="Elephant Calf Left" />
      <img class="animal-img-right" src="images/elephant calves 2.webp" alt="Elephant Calf Right" />
    </div>
    <div class="animal-desc">
     
    Elephant calves are among the most beloved baby animals in the world — floppy ears, fuzzy heads, and playful trunk-swinging make them look like giant toddlers.
     But don’t be fooled — getting close to one can put you directly in harm’s way

      <br> <br>
      <strong>Why They look soo Cute: </strong>
      <br> 
1) Floppy oversized ears and a fuzzy little body.
 <br>
2)Trunks they haven’t quite figured out how to control.
 <br>
3)Playful behavior like splashing in water, tripping over their own feet, and chasing birds.
 <br>
4)They stick close to mom, often hiding under her belly or wrapping trunks with other calves.
 <br>
      <br>
      <strong>Why You Shouldnt Mess With Them: </strong><br>
      1)They are the most protected babies in the wild
 .<br>
      Elephant herds are matriarchal and extremely protective of calves,
  If a baby trumpets in distress, the entire herd may charge.
  Even distant elephants may respond — they communicate through ground vibrations and low rumbles
 <br>
      2)Adults will flatten threats without hesitation.<br>
   An adult female African elephant can weigh up to 6,000 kg (13,000 lbs),
    they can run at 25 km/h (15 mph) — and they don’t bluff
    People, vehicles, or predators seen near a calf are often charged immediately.  
 <br> 
      3) They remember you — and not fondly.<br>
Elephants have incredible memory and strong emotional intelligence
    If you cause stress to a calf or get too close, the herd will remember the danger.<br> 
   4)They form tight family bonds.<br>
Calves are raised not just by their mothers, but by aunties and older sisters in the herd
    Approaching one calf means you’re surrounded by a defensive wall of giants.
 <br>
<br>
      <strong>Wild & Weird Facts </strong><br>  
  •	Elephant calves are born weighing around 220 lbs (100 kg).
<br>
  •They can’t control their trunks for the first few months — they suck on them like human babies suck thumbs.
<br>
  •	Calves nurse for 2 to 4 years, often while already eating solid food.
  <br>
  •They play to learn coordination, social skills, and herd roles.
  <br>

  <p>•.</p>

 </div>
  </div>
</li> <hr>
<br> <br>



<li>
  <h2><strong>Elephant calves</strong> </h2>
  <div class="animal-detail-flex">
    <div class="animal-images">
      <img class="animal-img-left" src="images/elephant calves 2.webp" alt="Elephant Calf Left" />
      <img class="animal-img-right" src="images/elephant calves 1.webp" alt="Elephant Calf Right" />
    </div>
    <div class="animal-desc">
     
    Elephant calves are among the most beloved baby animals in the world — floppy ears, fuzzy heads, and playful trunk-swinging make them look like giant toddlers.
     But don’t be fooled — getting close to one can put you directly in harm’s way

      <br> <br>
      <strong>Why They look soo Cute: </strong>
      <br> 
1) Floppy oversized ears and a fuzzy little body.
 <br>
2)Trunks they haven’t quite figured out how to control.
 <br>
3)Playful behavior like splashing in water, tripping over their own feet, and chasing birds.
 <br>
4)They stick close to mom, often hiding under her belly or wrapping trunks with other calves.
 <br>
      <br>
      <strong>Why You Shouldnt Mess With Them: </strong><br>
      1)They are the most protected babies in the wild
 .<br>
      Elephant herds are matriarchal and extremely protective of calves,
  If a baby trumpets in distress, the entire herd may charge.
  Even distant elephants may respond — they communicate through ground vibrations and low rumbles
 <br>
      2)Adults will flatten threats without hesitation.<br>
   An adult female African elephant can weigh up to 6,000 kg (13,000 lbs),
    they can run at 25 km/h (15 mph) — and they don’t bluff
    People, vehicles, or predators seen near a calf are often charged immediately.  
 <br> 
      3) They remember you — and not fondly.<br>
Elephants have incredible memory and strong emotional intelligence
    If you cause stress to a calf or get too close, the herd will remember the danger.<br> 
   4)They form tight family bonds.<br>
Calves are raised not just by their mothers, but by aunties and older sisters in the herd
    Approaching one calf means you’re surrounded by a defensive wall of giants.
 <br>
<br>
      <strong>Wild & Weird Facts </strong><br>  
  •	Elephant calves are born weighing around 220 lbs (100 kg).
<br>
  •They can’t control their trunks for the first few months — they suck on them like human babies suck thumbs.
<br>
  •	Calves nurse for 2 to 4 years, often while already eating solid food.
  <br>
  •They play to learn coordination, social skills, and herd roles.
  <br>

  <p>•.</p>

 </div>
  </div>
</li> <hr>
<br> <br>


  <li>
  <h2><strong> Wild Boar Piglets</strong> </h2>
  <div class="animal-detail-flex">
    <div class="animal-images">
      <img class="animal-img-left" src="images/wild boar piglets 1.webp" alt="Wild Boar Piglet Left" />
      <img class="animal-img-right" src="images/wild boar piglets 2.webp" alt="Wild Boar Piglet Right" />
    </div>
    <div class="animal-desc">
     
   Wild boar piglets are tiny, striped, and full of charm. They grunt, squeal, and wobble through forests like fuzzy forest kittens. 
   But despite their sweet look, wild boar piglets come with tusked, fast, and furious protection — and making the mistake of getting close could land you in serious trouble.
      <br> <br>
      <strong>Why They Seem So Innocent: </strong>
      <br> 
1)Piglets are born with soft brown fur and cream-colored stripes, almost like mini watermelon.
 <br>
2)They snort and squeal playfully, follow their moms in single file, and dig up dirt with their tiny snouts.
 <br>
3)Their stubby legs and clumsy trot make them look more like cartoons than wild animals..
 <br>

      <br>
      <strong> Why You Should Never Approach One: </strong><br>
      1)The mother will charge without hesitation.<br>
      Wild boar moms are incredibly protective. If she thinks her piglets are threatened, she’ll run at you full speed (up to 30 mph) and attack with her tusks, hooves, and brute strength.
       It’s not just a scare tactic — people and pets have been seriously injured this way.
 <br>
      2) They hide in grass and brush.<br>
   You may not even see piglets until you’re right on top of them — and if you’re that close, the mother sees you as a predator.  
 <br> 
      3)They’re smarter and more strategic than they look.<br>
Sows often position themselves between their piglets and any danger, and will even flank and circle a threat. They don’t give up easily and have been known to attack vehicles and chase humans far from the nest.
<br>   
<br>
      <strong> Fast Facts: </strong><br>  
  •	Piglets are born in litters of 4–6 and weigh about 1–2 lbs at birth.
<br>
  •Their stripes fade by 3–4 months old, around the same time they become fast and more independent.
<br>
  •Wild boars are omnivores and may raid farms, gardens, and trash — which increases human encounters.
  <br>
  •In many areas, wild boars are considered dangerous invasive species.
  <br>

  <p>•If you see a wild boar piglet, back away — fast.
There’s no such thing as an unguarded baby in the wild, and this one comes with a short temper and tusks to prove it..</p>

 </div>
  </div>
</li> <hr>

   
    <p>
      t’s easy to be enchanted by the innocent looks and playful antics of baby animals, but as we’ve seen, looks can be deceiving. 
      From powerful instincts to hidden aggression and the ever-present threat of protective parents, these tiny creatures are not to be taken lightly.
       While their cuteness draws us in, it’s important to remember that they’re still wild at heart — and nature doesn’t play by human rules.

So next time you spot a fluffy cub or a tiny hatchling in the wild, admire it from a safe distance. Because when it comes to survival, even the smallest animals know how to protect themselves — and they might just surprise you with what they’re capable of.
    </p>

    <a class="back-link" href="blog2.html">← Back to Blog List</a>
  </body>
</html>
