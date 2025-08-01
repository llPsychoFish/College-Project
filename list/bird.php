<?php
  include '../dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Birds</title>
    <link rel="stylesheet" href="../list/bird.css" type="text/css" />
  </head>
  <body>
    <header>
      <h1>🐾 Animal Atlas & Encyclopedia</h1>
      <p>Discover The World Of Birds</p>
    </header>

    <nav class="menu">
      <ul>
        <li><a href="../index.php">HOME</a></li>
        <li class="dropdown">
          <a href="#" class="dropbtn">ANIMAL LIST</a>
          <div class="dropdown-content">
            <a href="../list/mammals.html">MAMMALS</a>
            <a href="../list/reptiles.html">REPTILES & AMPHIBIANS</a>
            <a href="../list/birds.php">BIRDS</a>
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
    <div class="content">
      <h1>Birds</h1>
      <div class="readmore-block">
        <p class="par">
          Birds are warm-blooded vertebrates belonging to the class Aves. They are
          characterized by feathers, beaks without teeth, lightweight skeletons,
          and the ability to lay hard-shelled eggs. Most birds can fly, thanks to
          their strong chest muscles and wings, although some species like
          ostriches, emus, and penguins are flightless. There are over 10,000
          known species of birds found on every continent, from icy Antarctica to
          tropical rainforests. Birds have excellent vision, which helps them
          hunt, navigate, and avoid danger.</p>
        <span class="read-more-toggle">Read More</span>
        <div class="read-more">
          <p>
          Birds are divided into two main groups: non-raptors and raptors. Non-raptor
          birds include species like sparrows, robins, and parrots, which primarily
          feed on seeds, fruits, insects, or nectar. Raptors, such as eagles,
          hawks, and owls, are birds of prey that hunt and feed on other animals.
          They have sharp talons and beaks adapted for catching and tearing flesh.
          Birds are also known for their migratory behavior, with many species
          traveling long distances between breeding and wintering grounds. This
          migration is often triggered by changes in daylight, temperature, and
          food availability. Some birds, like the Arctic Tern, undertake the longest
          migrations of any animal, traveling thousands of miles each year.
          </p>
        </div>
      </div>
      <p class="par">
       
      </p>

    </div>

    <main>
      <button class="button" onclick="showInfo('Arctic_Tern')">
        Arctic Tern
      </button>

      <div id="Arctic_Tern" class="info-section">
        <?php
        $sql = "SELECT * FROM birds WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<h2>".$row['name']."</h2>
                    <img src='list_image/arctic_tern.jpg' alt='Arctic Tern'/>
                    <p>Scientific Name: <b>Sterna paradisaea</b></p>
                    <p>Type :<abbr title='Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar'><b>Non-raptor</b></abbr></p>
                    <p>".$row['description']."</p>
                    <h3>Habitat</h3>
                    <p>".$row['habitat']."</p>
                    <h3>Migration</h3>
                    <p>Every year, the Arctic Tern travels from the Arctic to the Antarctic and back again, making a round trip of about 70,000 to 80,000
                    kilometers (43,000 to 50,000 miles)—the longest known migration in the animal kingdom. They follow a zigzag route, catching favorable wind
                    currents and stopping at key feeding sites along the way. This journey is not only a test of endurance but also a demonstration of how finely
                    attuned these birds are to Earth's geography and weather systems.</p>
                    <h3>Breeding and Life Cycle</h3>";
            }
          } else {
            echo "No results found.";

          }

        ?>






        <p>
          Breeding takes place during the Arctic summer, when daylight is nearly
          continuous. Arctic Terns are monogamous and often return to the same
          breeding grounds—and even the same mate—year after year. They lay 1 to
          3 eggs in shallow ground nests lined with grass and feathers. Both
          parents share in incubation and feeding the chicks.<br />
          Once hatched, the chicks are semi-precocial: they are born with down
          and can walk, but they rely on their parents for food. Fledging occurs
          after about three to four weeks, and not long after, the long
          migration south begins.
        </p>

        <h3>Niche and Ecological Role</h3>
        <p>
          The Arctic Tern plays a key role in the marine ecosystem. As predators
          of small fish and invertebrates, they help control these populations.
          They are also indicators of ocean health; changes in their migration
          patterns or breeding success can reflect shifts in fish populations or
          ocean temperatures due to climate change.<br />
          Moreover, they have few natural predators due to their remote nesting
          locations, though eggs and chicks are vulnerable to foxes, gulls, and
          skuas. Humans pose threats through habitat disturbance, climate
          change, and pollution. Fortunately, they are currently listed as Least
          Concern on the IUCN Red List, though local populations may vary in
          status.
        </p>

        <h3>Facts</h3>
        <p>
          An individual Arctic Tern can fly over 2.5 million kilometers in its
          lifetime—enough to reach the Moon and back more than three times.<br />
          They have a lifespan of around 30 years, meaning they may see more
          daylight than any other animal.<br />
          During migration, they feed along the way, often stopping in the North
          Atlantic, off the coast of Africa, or near New Zealand, depending on
          the route.<br />
          Despite their graceful appearance, they are highly aggressive around
          their nests and will dive-bomb humans and predators alike.
        </p>
        <p>
          The Arctic Tern's migration is so extensive that it has been observed
          to fly over 100,000 kilometers (62,000 miles) in a single year,
          experiencing both the Arctic and Antarctic summers.
        </p>
        <p>
          Their name comes from the Old Norse word "terna," meaning "tern," and
          they are closely related to other terns, gulls, and skuas.  
        </p>
        
        <button class="back-btn" onclick="hideInfo('Arctic_Tern')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Blue_Footed_Booby')">
        Blue-Footed Booby
      </button>

      <div id="Blue_Footed_Booby" class="info-section">
        <h2>Blue-Footed Booby</h2>
        <img src="list_image/blue_foot.jpg" alt="Blue-Footed Booby" />
        <p>Scientific Name :<b> Sula nebouxii</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          The Blue-footed Booby is one of the most iconic seabirds in the world,
          instantly recognizable by its bright turquoise-blue feet and comical
          behavior. Native to the eastern Pacific coastline, this bird combines
          beauty, skill, and quirkiness, making it a favorite among wildlife
          watchers and scientists alike. Behind its playful appearance lies a
          bird perfectly adapted to life at sea and a fascinating case of
          natural selection and mate choice.
        </p>

        <h3>Habitat and Distribution</h3>
        <p>
          The Blue-footed Booby is mainly found along the coastal regions of the
          eastern Pacific Ocean, particularly:<br />
          The Galápagos Islands (home to a large and well-known population)<br />
          Western coasts of Central and South America, especially in countries
          like Ecuador, Peru, and Mexico.<br />
          They inhabit rocky shores, islands, and coastal cliffs, nesting in
          open, flat areas free from vegetation. Their habitat is always close
          to rich fishing grounds, since they rely heavily on marine life to
          survive and raise their young.
        </p>

        <h3>Feeding Habits</h3>
        <p>
          Blue-footed Boobies are skilled marine predators, feeding mainly
          on:<br />
          Small fish such as anchovies, sardines, and mackerel<br />
          Occasionally, squid and crustaceans.<br />
          Their feeding technique is both elegant and powerful. They fly high
          above the water, then dive headfirst at high speeds, folding their
          wings just before hitting the surface like a dart. These plunge-dives
          can be so precise that they catch fish swimming below the surface.
          They often hunt in groups, making their dives together to confuse and
          trap schools of fish.<br />
          Boobies have excellent eyesight and can spot fish from remarkable
          heights. Their nostrils are permanently closed to avoid water rushing
          in during dives—they breathe through their mouths instead.
        </p>

        <h3>Breeding and Courtship</h3>
        <p>
          One of the most famous aspects of the Blue-footed Booby is its
          courtship dance—a truly unforgettable sight. The male uses his bright
          blue feet to attract a mate by performing a high-stepping dance,
          lifting each foot slowly and dramatically while showing off to the
          female. He may also present small stones or twigs and spread his wings
          in a sky-pointing display.<br />
          What makes this dance even more interesting is that:<br />
          Foot color matters: The bluer the feet, the more attractive the male.
          Brighter feet signal good health and strong genes.<br />
          If a male’s feet are pale, a female may reject him, as it could
          indicate poor nutrition or illness.<br />
          After mating, the female lays 1 to 3 eggs in a small scrape on the
          ground. Both parents take turns incubating the eggs with their feet,
          which have special blood vessels to transfer heat. Chicks hatch after
          about 40–45 days and are fed regurgitated fish by both parents.
        </p>

        <h3>Adaptations for Survival</h3>
        <p>
          The Blue-footed Booby is well adapted to its marine environment:<br />
          Webbed blue feet aid in swimming and are key to mate selection.<br />
          Streamlined bodies and strong wings allow for long-distance flying and
          agile diving.<br />
          Salt glands above their eyes help remove excess salt from seawater,
          which they excrete through their nostrils.<br />
          Excellent vision helps them track prey from high above the ocean.<br />
          Despite their awkwardness on land, they are powerful and graceful in
          the air and water.
        </p>

        <h3>Niche and Ecological Role</h3>
        <p>
          As top-level fish predators, Blue-footed Boobies help maintain the
          balance of fish populations in the ocean. Their diet and behavior are
          influenced by ocean conditions, making them indicators of ocean
          health. During events like El Niño, when water temperatures rise and
          fish become scarce, booby populations may suffer reduced breeding
          success.<br />
          Their colonies also contribute guano (droppings), which enriches the
          surrounding soil and supports other island life.
        </p>

        <h3>Unique & Fascinating Facts</h3>
        <p>
          Both parents share duties equally—from incubation to feeding, making
          them excellent partners.<br />
          They can dive from heights of up to 25 meters (80 feet) and swim
          underwater to chase fish.<br />
          Chicks compete for food, and sometimes siblicide occurs when food is
          scarce—the stronger chick may push its sibling out of the nest.Despite
          their silly name, Blue-footed Boobies are intelligent and strategic
          hunters.<br />
          Their feet lose brightness if they are not well-fed or healthy, making
          foot color an honest signal of fitness.
        </p>
        <p>
          The Blue-footed Booby's name comes from the Spanish word "bobo," which
          means "fool" or "clown," likely due to their clumsy movements on land.
          They are also known as "blue-footed boobies" to distinguish them from
          other booby species, such as the Red-footed Booby and the Nazca Booby.
        </p>
        <p>
          The Blue-footed Booby is a protected species in many areas, and
          conservation efforts focus on preserving their nesting habitats and
          monitoring populations to ensure their survival in the wild.
        </p>
        <p>
          The Blue-footed Booby is a popular subject of study for scientists
          interested in evolution, behavior, and ecology. Their unique mating
          rituals and adaptations provide valuable insights into the processes
          of natural selection and sexual selection.
        </p>
        <p>
          The Blue-footed Booby's feet are not only a mating signal but also
          serve a practical purpose. Their webbed feet help them swim efficiently
          in the ocean, allowing them to catch fish and evade predators.
        </p>
        <p>
          The Blue-footed Booby's migration patterns are not well understood,
          but they are known to travel long distances in search of food and
          suitable breeding grounds. They are capable of flying at speeds of up
          to 40 miles per hour (64 kilometers per hour) during migration.
        </p>


        <button class="back-btn" onclick="hideInfo('Blue_Footed_Booby')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Cassowary')">Cassowary</button>

      <div id="Cassowary" class="info-section">
       <?php
       $sql = "SELECT * FROM birds WHERE id = 2";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<h2>".$row['name']."</h2>"
                      ."<img src='list_image/cassowary.jpg' alt='Cassowary'/>"
                      ."<p>Type :<abbr title='Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar'><b>Non-raptor</b></abbr></p>"
                      ."<p>".$row['description']."</p>
                      <h3>Species of Cassowary</h3>
                      <p>
                      There are three species of cassowary:<br />
                      1.<abbr title='pictured above'><b>Sourthern Cassowary (Casuarius casuarius)</b></abbr>– the most well-known and widely studied<br />
                      2. Northern Cassowary (Casuarius unappendiculatus)<br />
                      3. Dwarf Cassowary (Casuarius bennetti)<br />
                      The Southern Cassowary is the largest and most iconic, often referred
                      to when people mention “the cassowary.”</p>
                      <h3>Habitat</h3>
                      <p>".$row['habitat']."</p>";

              }
          }

       ?>





        <h3>Physical Characteristics</h3>
        <p>
          The cassowary looks like something out of prehistory:<br />
          It can grow up to 6.6 feet (2 meters) tall and weigh over 130 pounds
          (60 kg). It has coarse black feathers that resemble hair. Its head and
          neck are brightly colored in blue, red, and purple, with color
          intensity increasing during mating season. On top of its head sits a
          casque—a helmet-like structure made of keratin and bone, whose exact
          function is still debated. It may help with sound amplification, head
          protection, or moving through dense vegetation. But the most iconic
          (and dangerous) part of the cassowary is its feet: each has three
          toes, and the inner toe sports a dagger-like claw up to 5 inches (12
          cm) long—capable of inflicting serious injuries.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Cassowaries are omnivorous, but their diet is largely frugivorous
          (fruit-based). They consume:<br />
          A wide variety of fallen tropical fruits<br />
          Fungi, insects, small animals, and even dead mammals if necessary<br />
          Their strong beaks and digestive systems allow them to eat toxic or
          tough fruits that other animals cannot. Remarkably, cassowaries play a
          crucial ecological role as seed dispersers. Many rainforest plants
          rely on cassowaries to eat their fruit and deposit the seeds—often far
          away, complete with natural fertilizer from their droppings.
        </p>
        <h3>Behavior and Movement</h3>
        <p>
          They are:<br />

          Excellent runners, capable of reaching 50 km/h (31 mph) through dense
          jungle<br />

          Strong swimmers, often crossing rivers and even swimming in the
          ocean<br />

          Silent movers, but they can produce deep booming sounds, which may
          help them communicate through thick forests<br />

          Despite their shy nature, when threatened—especially if cornered or
          protecting eggs-they can become extremely aggressive. There have been
          recorded attacks on humans, sometimes causing serious injuries or,
          rarely, death.
        </p>
        <h3>Breeding and Parenting</h3>
        <p>
          Cassowary reproduction is as fascinating as the bird itself. In a
          reversal of typical bird parenting roles:<br />

          Females are larger, more colorful, and dominant. After mating, the
          female lays 3–6 large, green eggs in a shallow ground nest. She then
          leaves—and the male takes full responsibility, the male incubates the
          eggs for about 50 days, and then raises the chicks for up to 9 months.
          During this time, he defends them fiercely, teaches them how to find
          food, and ensures they survive in the wild jungle environment.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Cassowaries are known as “keystone species” because of their crucial
          role in seed dispersal. Some rainforest trees and plants depend
          entirely on cassowaries to reproduce. Without them, these ecosystems
          would collapse. Cassowaries also help shape the forest structure
          by:<br />
          Spreading large seeds over great distances, enabling rare or
          endangered trees to survive Because they can consume over 150
          different types of fruit, they’re sometimes called the gardeners of
          the rainforest.
        </p>
        <h3>Niche Facts and Fascinating Details</h3>
        <p>
          The cassowary casque continues growing throughout its life and may
          help age or identify individuals. Cassowaries cannot fly, but their
          strong legs make them powerful runners and jumpers. The cassowary’s
          call—a deep, low-frequency "boom"—is one of the lowest-pitched bird
          calls in the world, possibly used for long-distance communication in
          dense forests. In Aboriginal culture, cassowaries are respected and
          sometimes feared—appearing in stories and myths as guardians of the
          forest. Despite their size, they are masters of camouflage in the
          underbrush, often going unnoticed even when nearby. 
          Cassowaries are listed as vulnerable due to habitat loss, hunting,
          and vehicle collisions. Conservation efforts focus on protecting their
          habitats and educating local communities about their ecological
          importance. The cassowary is the only bird in the world with a
          "helmet" on its head, which is made of keratin (the same material as
          human nails) and can grow up to 18 inches (45 cm) tall. This casque is
          thought to help the bird navigate through dense vegetation and may also
          play a role in attracting mates during the breeding season.
          The cassowary's feet are incredibly powerful, allowing it to run
          through dense forests at speeds of up to 50 km/h (31 mph). Its inner
          toe has a sharp, dagger-like claw that can inflict serious injuries,
          making the cassowary one of the most dangerous birds in the world.
          Despite their fearsome reputation, cassowaries are generally shy and
          prefer to avoid human contact. They are primarily solitary animals,
          although they may form small groups during the breeding season or when
          food is abundant.
          Cassowaries have a unique way of communicating with each other,
          producing deep, booming calls that can be heard over long distances.
          These calls are thought to play a role in attracting mates and
          establishing territory. They are also known to produce a variety of
          other vocalizations, including hisses, grunts, and growls, depending
          on their mood and situation.
          Cassowaries have a relatively long lifespan, living up to 20–25 years
          in the wild. They reach sexual maturity at around 3–4 years of age,
            and can live up to 20–25 years in the wild. They reach sexual maturity at around 3–4 years of age, and are known for their solitary nature outside of breeding season.


        </p>

        <button class="back-btn" onclick="hideInfo('Cassowary')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Drongo')">Drongo</button>

      <div id="Drongo" class="info-section">
        <h2>Drongo</h2>
        <img src="list_image/grt drongo.jpg" alt="Drongo" />
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          The Drongo is a small yet bold bird found across Africa, Asia, and
          Australia, famous for its aggressive attitude, sharp intelligence, and
          mimicry skills. Despite its modest size and sleek black appearance,
          the Drongo has earned a reputation as a feathered outlaw, fearlessly
          taking on larger birds and even tricking other animals to steal food.
          This combination of agility, bravery, and deception makes it one of
          the most intriguing birds in the animal kingdom.
        </p>
        <h3>Classification and Species</h3>
        <p>
          Drongos belong to the family Dicruridae, and there are about 25
          species of them. The most well-known include:<br />

          Fork-tailed Drongo (Dicrurus adsimilis) – common in sub-Saharan
          Africa<br />

          Black Drongo (Dicrurus macrocercus) – widespread in Asia<br />

          Ashy Drongo (Dicrurus leucophaeus) – found in Southeast Asia<br />

          Spangled Drongo (Dicrurus bracteatus) – found in Australia and New
          Guinea<br />

          All drongos share some key traits: mostly black or dark grey plumage,
          red or dark eyes, and a distinctive forked tail that often gives the
          impression of elegance in flight.<br />
          Pictured above is the<b></b>
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Drongos inhabit a wide range of environments including:<br />

          Savannas, Urban gardens and farmland, Open woodlands, Forest edges<br />

          They are territorial and often perch in open view, scanning their
          surroundings for insects or intruders.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Drongos are insectivorous, feeding on:<br />

          Beetles, Grasshoppers, Wasps, Termites, Ants. Occasionally small
          birds, lizards, or fruits.<br />
          They catch prey by:<br />

          Aerial hunting (snatching insects in mid-air). Ground pouncing after
          spotting movement from a perch. But what makes drongos truly unique is
          their food-stealing strategy: some species, like the Fork-tailed
          Drongo, use deceptive mimicry to trick other animals—such as meerkats
          or other birds—into dropping their food. They do this by imitating
          alarm calls, causing the animal to flee, thinking a predator is near,
          and then swooping down to snatch the abandoned food.<br />

          This behavior has earned them nicknames like:<br />

          <b>“Feathered Trickster”</b> and <b>“The Liar Bird”</b>
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Breeding usually occurs in spring and summer, depending on the region.
          Drongos build:<br />

          Small cup-shaped nests made of twigs and cobwebs. Often placed high in
          trees, well-hidden in foliage The female lays 2–4 eggs, and both
          parents help in:<br />

          Incubating eggs and feeding chicks Aggressively defending the nest
          against any intruder, regardless of size
        </p>
        <h3>Behavior and Intelligence</h3>
        <p>
          Drongos are incredibly intelligent and display:<br />

          <b>Vocal mimicry</b>: They can imitate over 30 bird species and even
          some mammals.<br />

          <b>Problem-solving skills</b>: They attack much larger birds (like
          eagles or hawks) if they come too close to their nest.<br />

          <b>Problem-solving skills</b>: In lab studies, drongos have shown the
          ability to learn, adapt, and even manipulate behavior for gain.<br />

          They are known to form temporary alliances with other birds to mob
          predators, but they're just as quick to steal from their allies when
          the chance arises.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          The Fork-tailed Drongo can fake alarm calls from meerkats, babblers,
          and other birds to trick them. Drongos are smaller than pigeons but
          will chase away hawks, crows, and even owls. Their name comes from a
          Malagasy word, and early European explorers used it to describe the
          fork-tailed species. The Black Drongo is sometimes called the “King
          Crow” in parts of Asia for its boldness and upright posture.

          Drongos are often seen in pairs or small groups, but they can also be
          solitary. They are highly adaptable and can thrive in urban areas,
          often seen in gardens, parks, and agricultural fields. Their
          intelligence and adaptability make them successful in various
          environments, from rural farmlands to bustling cities.
          Drongos are known for their acrobatic flight, performing aerial
          displays that include sharp turns, dives, and glides. They are agile
          fliers, capable of catching insects mid-air and maneuvering through
          dense vegetation with ease. Their forked tails help them change
          direction quickly, making them efficient hunters.
          Drongos are also known for their social behavior, often seen
          interacting with other bird species. They can be quite vocal,
          communicating with a variety of calls and whistles. Their mimicry
          skills are not just for stealing food; they also use them to communicate
          with other drongos and to establish territory. In some cultures, drongos
          are considered symbols of intelligence and cunning. Their ability to
          mimic other birds and their bold behavior have led to various myths
          and legends about them. In some regions, they are seen as protectors
          of crops, as they help control insect populations in agricultural
          areas.
          Drongos are known to have a complex social structure, with
          hierarchies and interactions that vary by species. They can be quite  
          aggressive when defending their territory or nest, often chasing away
          larger birds and even humans who venture too close. Their boldness
          and fearless nature have made them a subject of fascination for bird
          watchers and researchers alike.
        </p>

        <button class="back-btn" onclick="hideInfo('Drongo')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Eagle')">Eagle</button>

      <div id="Eagle" class="info-section">
        <h2>Eagle</h2>
        <img src="list_image/bald eagle.jpg" alt="Eagle" />
        <p>
          Type:<abbr
            title="Birds of prey (raptors) are meat-eating birds with sharp talons, hooked beaks, and excellent vision. Examples: eagles, hawks, owls."
            ><b>Birds of Prey</b></abbr
          >
        </p>
        <p>
          The eagle is one of the most powerful, majestic, and admired birds in
          the world. With its commanding presence, keen eyesight, and unmatched
          hunting ability, the eagle has become a symbol of strength, freedom,
          and courage across many cultures. Found on every continent except
          Antarctica, eagles come in various species, each adapted to different
          environments—but all sharing traits of power, grace, and dominance in
          the sky.
        </p>
        <h3>Types of Eagles</h3>
        <p>
          There are around 60 species of eagles globally. The most well-known
          include:<br />

          <abbr title="Pictured above"
            ><b> Bald Eagle (Haliaeetus leucocephalus)</b></abbr
          >
          – found in North America; national bird of the USA<br />

          Golden Eagle (Aquila chrysaetos) – widespread in the Northern
          Hemisphere<br />

          African Fish Eagle (Haliaeetus vocifer) – known for its haunting call
          and found near African rivers and lakes<br />

          Philippine Eagle (Pithecophaga jefferyi) – one of the rarest and
          largest forest eagles<br />

          Harpy Eagle (Harpia harpyja) – powerful eagle of South American
          rainforests<br />

          Each species varies in size, habitat, and diet, but all are top-tier
          predators.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Eagles live in diverse habitats, including:<br />

          Mountains, Forests, Grasslands, Wetlands and coastal regions They are
          often found near lakes, rivers, or open areas where they can easily
          spot prey from the sky.<br />

          Eagles are territorial and require large hunting ranges. Some build
          nests on high cliffs, others in tall trees, and some even on man-made
          structures like power poles or cell towers.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Eagles are carnivorous raptors, meaning they are birds of prey. Their
          diet includes:<br />

          Fish (e.g., Bald Eagle, African Fish Eagle)<br />

          Small mammals like rabbits, hares, squirrels, and even monkeys (Harpy
          Eagle)<br />

          Reptiles and birds<br />

          Occasionally, carrion (dead animals), especially during winter<br />

          They hunt using:<br />

          Powerful talons to grab and kill prey<br />

          Sharp hooked beaks to tear flesh<br />

          Incredible eyesight, up to 4–8 times sharper than a human’s<br />

          Eagles are known for soaring silently at great heights while scanning
          the ground or water below for movement.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Eagles are monogamous and often mate for life. They return to the same
          nesting site each year.<br />

          Key facts about eagle breeding:<br />

          They build huge nests called eyries, which can be 2–3 meters wide and
          reused for decades. The female lays 1 to 3 eggs, and both parents help
          incubate and feed the chicks. Chicks hatch with soft down and are fed
          regurgitated food until they can eat solid meat. Young eagles, called
          eaglets, grow rapidly but may take several months before they fledge
          (leave the nest). Even after that, they often stay near their parents,
          learning to hunt and survive.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Eagles are:<br />

          Solitary or paired—they don't form large flocks<br />

          Strong fliers, capable of gliding for hours without flapping<br />

          Highly territorial, especially during nesting season<br />

          Adaptations include:<br />

          Large wingspans (up to 2.5 meters in some species)<br />

          Strong, curved talons and beaks<br />

          Exceptional vision, allowing them to spot prey from over a kilometer
          away<br />

          They can dive at speeds over 160 km/h (100 mph) when hunting.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Bald Eagles aren’t actually bald—their name comes from an old word
          meaning “white-headed.” Harpy Eagles have talons the size of a grizzly
          bear’s claws. Golden Eagles can carry prey up to 4 kg (9 lbs) while
          flying. Eagles have nictitating membranes—a third eyelid that protects
          their eyes during flight and while feeding. The oldest known wild
          eagle lived to be 38 years old.
        </p>
        <p>
          Eagles are often seen as symbols of power and freedom. They appear on
          national emblems, flags, and coats of arms in many countries, including
          the United States, Germany, and Mexico. The Bald Eagle was chosen as
          the national bird of the United States in 1782 due to its majestic
          appearance and association with strength and independence.
        </p>
        <p>
          Eagles are also important in various cultures and mythologies. In
          Native American traditions, they are often seen as messengers between
          humans and the spirit world, representing courage, wisdom, and
          protection. In ancient Rome, eagles were associated with Jupiter, the
          king of the gods, and were used as military standards.
        </p>
        <p>
          Eagles are apex predators, meaning they have no natural enemies in the
          wild. However, they face threats from habitat loss, hunting, and
          poisoning. Conservation efforts have helped some species recover from
          near extinction, such as the Bald Eagle in North America.
        </p>
        <p>
          Eagles are known for their impressive courtship displays, which often
          involve aerial acrobatics, soaring, and calling
          to each other. During courtship, eagles may lock talons and tumble
          through the air, showcasing their strength and agility. This behavior
          is not only a display of fitness but also helps strengthen the bond
          between mates.
        </p>
        <p>
          Eagles have a unique way of communicating with each other, using a
          variety of vocalizations, including high-pitched whistles, chirps,
          and screams. These calls can convey different messages, such as
          warning of danger, signaling territory boundaries, or attracting a mate.
          They also use body language, such as wing flapping and head movements,
          to communicate with each other.
        </p>
        <p>
          Eagles are highly adaptable birds, capable of living in a wide range of
          environments, from coastal areas to mountainous regions. They can
          thrive in both temperate and tropical climates, as long as there is
          sufficient food and suitable nesting sites. This adaptability has
          allowed them to colonize diverse habitats across the globe.
        </p>
        <p>
          The Bald Eagle, once endangered due to hunting and pesticide use, has
          made a remarkable recovery thanks to conservation efforts. It was
          removed from the U.S. Endangered Species List in 2007, and its
          population has rebounded significantly in recent years.
        </p>
        <p>
          Eagles are often seen as symbols of power and freedom. They appear on
          national emblems, flags, and coats of arms in many countries,
          including the United States, Germany, and Mexico. The Bald Eagle was
          chosen as the national bird of the United States in 1782 due to its
          majestic appearance and association with strength and independence.
        </p>
        <p>
          Eagles are also important in various cultures and mythologies. In
          Native American traditions, they are often seen as messengers between
          humans and the spirit world, representing courage, wisdom, and
          protection. In ancient Rome, eagles were associated with Jupiter, the
          king of the gods, and were used as military standards.
        </p>                                   
        <button class="back-btn" onclick="hideInfo('Eagle')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Falcon')">Falcon</button>

      <div id="Falcon" class="info-section">
        <h2>Falcon</h2>
       
      <img src="list_image/falcon.jpg" alt="Falcon" />
        <p>
          Type:<abbr
            title="Birds of prey (raptors) are meat-eating birds with sharp talons, hooked beaks, and excellent vision. Examples: eagles, hawks, owls."
            ><b>Birds of Prey</b></abbr
          >
        </p>
        <p>
          Falcons are among the most skilled and agile birds of prey, known for
          their incredible speed, sharp vision, and hunting prowess. With over
          60 species worldwide, falcons inhabit diverse environments—from urban
          areas to remote wilderness. Their unique adaptations and behaviors
          make them fascinating subjects of study and admiration.
        </p>
        <h3>Types of Falcons</h3>
        <p>
          There are many species of falcons, but some of the most notable
          include:<br />
          <abbr title="Pictured above"><b>Falcon (Falco peregrinus)</b></abbr> – the fastest bird in the world,
          capable of reaching speeds over 240 mph (386 km/h) during a dive.<br />
          Merlin (Falco columbarius) – a small, agile falcon known for its
          speed and hunting skills.<br />
          Gyrfalcon (Falco rusticolus) – the largest falcon, found in Arctic
          regions, known for its striking plumage.<br />
          American Kestrel (Falco sparverius) – the smallest falcon in North
          America, often seen hovering in open fields.<br />
          Each species has unique adaptations for hunting and survival.</p>
        <h3>Habitat and Distribution</h3>
        <p>
          Falcons are found on every continent except Antarctica. They inhabit a
          wide range of environments, including:<br />
          Urban areas, grasslands, forests, deserts, and coastal regions.<br />
            They prefer open spaces for hunting but also require nesting sites,
            which can include cliffs, tall trees, or even buildings and ledges.<br />
            <h3>Feeding Habits</h3>
            Falcons are carnivorous and primarily feed on:<br /><br />

            Small to medium-sized birds (their main prey)<br />
            Small mammals such as rodents and bats<br />
            Occasionally insects and reptiles<br /><br />

            They are renowned for their hunting technique called the "stoop," 
            where they dive at incredible speeds to strike prey mid-air. Falcons 
            have long, pointed wings and a notched beak, which helps them kill 
            prey quickly. Unlike hawks and eagles, falcons rely more on speed and 
            agility than sheer strength.
            </p>
            <h3>Breeding and Nesting</h3>
            <p>
            Falcons do not build traditional nests. Instead, they lay eggs on 
            cliff ledges, in tree hollows, or on tall buildings (urban falcons). 
            Key facts about falcon breeding include:<br />
            Females lay 2 to 5 eggs, which are incubated mainly by the female.<br />
            Both parents feed the chicks, which fledge after about 5–7 weeks.<br />
            Young falcons learn to hunt by practicing aerial maneuvers and chasing prey.
            </p>
            <h3>Behavior and Adaptations</h3>
            <p>
            Falcons are solitary hunters and are highly territorial during 
            breeding season. Adaptations include:<br />
            Exceptional eyesight for spotting prey from great distances<br />
            Streamlined bodies and long wings for high-speed flight<br />
            A tomial tooth (notch) on the beak for efficiently dispatching prey<br />
            They are also known for their intelligence and ability to adapt to 
            urban environments, where they may nest on skyscrapers and hunt city pigeons.
            </p>
            <h3>Fascinating Facts</h3>
            <p>
            The Peregrine Falcon is the fastest animal on Earth, reaching speeds 
            over 240 mph (386 km/h) in a dive.<br />
            Falcons have been used in falconry for thousands of years, prized for 
            their hunting skills.<br />
            Some falcon species migrate thousands of miles between breeding and 
            wintering grounds.<br />
            Urban falcons help control pest bird populations in cities.<br />
            The Gyrfalcon is the largest falcon species, with a wingspan of up to
            4.5 feet (1.4 meters).<br />
            Falcons have a unique hunting technique called "kiting," where they
            hover in the air, facing into the wind, while scanning for prey below.<br />
            They have a specialized respiratory system that allows them to breathe
            efficiently at high speeds, enabling them to sustain their incredible
            diving speeds.<br />
            Falcons are known for their strong pair bonds, often mating for life.
            They perform elaborate courtship displays, including aerial acrobatics
            and vocalizations to strengthen their bond and attract mates.<br />
            Falcons have a unique hunting technique called "kiting," where they
            hover in the air, facing into the wind, while scanning for prey below.<br />
            They have a specialized respiratory system that allows them to breathe
            efficiently at high speeds, enabling them to sustain their incredible
            diving speeds.<br />
            Falcons are known for their strong pair bonds, often mating for life.
            They perform elaborate courtship displays, including aerial acrobatics
            and vocalizations to strengthen their bond and attract mates.<br />
            Falcons have a unique hunting technique called "kiting," where they
            hover in the air, facing into the wind, while scanning for prey below.<br />
            They have a specialized respiratory system that allows them to breathe
            efficiently at high speeds, enabling them to sustain their incredible
            diving speeds.<br />
            Falcons are known for their strong pair bonds, often mating for life.
            They perform elaborate courtship displays, including aerial acrobatics
            and vocalizations to strengthen their bond and attract mates.<br />
            Falcons have a unique hunting technique called "kiting," where they
            hover in the air, facing into the wind, while scanning for prey below.<br />
            They have a specialized respiratory system that allows them to breathe
            efficiently at high speeds, enabling them to sustain their incredible
            diving speeds.<br />

          </p>

        <button class="back-btn" onclick="hideInfo('Falcon')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Grebe')">Grebe</button>

      <div id="Grebe" class="info-section">
        <h2>Grebe</h2>
        
        <button onclick="hideInfo('Grebe')">← Back</button>
        <img src="list_image/grebe.jpg" alt="Grebe" />
        <p>Scientific Name: <b>Podicipedidae</b></p> 
        <p>Type:<abbr title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"><b>Non-raptor</b></abbr></p>
        <p>
          Grebes are fascinating aquatic birds known for their unique
          adaptations to life on water. With their streamlined bodies, lobed
          toes, and exceptional diving abilities, grebes are perfectly suited
          for a life spent swimming and hunting in lakes, rivers, and coastal
          waters. They are found on every continent except Antarctica and are
          known for their elaborate courtship displays and striking plumage.
        </p>
        <h3>Types of Grebes</h3>
        <p>
          There are about 20 species of grebes, each adapted to different
          habitats and climates. Some of the most notable include:<br />
          Great Crested Grebe (Podiceps cristatus) – known for its elaborate
          courtship dance and striking plumage.<br />
          Horned Grebe (Podiceps auritus) – recognized by its distinctive
          horn-like feathers during breeding season.<br />
          Eared Grebe (Podiceps nigricollis) – has a unique black neck and
          striking red eyes.<br />
          Pied-billed Grebe (Podilymbus podiceps) – a small, stocky grebe with a
          distinctive bill.<br />
          Each species has unique adaptations for swimming, diving, and hunting.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Grebes inhabit a wide range of aquatic environments, including:<br />
          Freshwater lakes, ponds, rivers, and marshes<br />
          Coastal waters and estuaries<br />
          They prefer areas with abundant vegetation for nesting and cover from
          predators. Grebes are migratory birds, with some species traveling
          long distances between breeding and wintering grounds.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Grebes are carnivorous and primarily feed on:<br />
          Small fish, crustaceans, aquatic insects, and amphibians<br />
          They are expert divers, capable of reaching depths of up to 20 meters
          (65 feet) in search of food. Grebes use their lobed toes to propel
          themselves underwater, allowing them to chase down prey with agility.
          They often swallow their prey whole, as they lack the ability to tear
          apart larger animals.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Grebes are monogamous and often form long-term pair bonds. They build
          floating nests made of aquatic vegetation, anchored to reeds or
          submerged plants. Key facts about grebe breeding include:<br />
          Females lay 2 to 6 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 20 to 30 days.<br />
          Chicks are precocial, meaning they can swim and dive shortly after
          hatching.<br />
          Both parents care for the chicks, feeding them small fish and
          invertebrates.<br />
          Grebes are known for their elaborate courtship displays, which often
          include synchronized swimming, head bobbing, and presenting
          vegetation to each other. These displays strengthen pair bonds and
          help attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Grebes are highly adapted for life in the water. They have:<br />
          Streamlined bodies and long necks for efficient swimming<br />
          Lobed toes that act like paddles, allowing them to swim quickly and
          maneuver easily underwater<br />
          Waterproof feathers that trap air, providing buoyancy and insulation<br />
          They are excellent divers, capable of holding their breath for up to
          30 seconds while hunting. Grebes are also known for their unique
          behavior of swallowing their own feathers, which helps protect their
          digestive system from sharp fish bones.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Grebes play a crucial role in aquatic ecosystems as predators of
          small fish and invertebrates. They help maintain the balance of
          aquatic food webs by controlling prey populations. Their nesting
          activities also contribute to the health of wetland habitats, as they
          create floating vegetation that provides shelter for other species.
          Grebes are also important indicators of water quality, as their
          presence often signifies healthy aquatic environments.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Grebes are known for their unique courtship displays, which can
          include synchronized swimming and elaborate dances.<br />
          They have a special adaptation that allows them to compress their
          feathers, making them more streamlined for diving.<br />
          Grebes can produce a variety of vocalizations, including whistles,
          grunts, and trills, which they use for communication.<br />
          Some species of grebes are known to migrate long distances between
          breeding and wintering grounds.<br />
          Grebes are often seen carrying their chicks on their backs while
          swimming, providing them with protection and warmth.

        </p>
        <p>
          Grebes are fascinating birds with unique adaptations for life in the
          water. Their streamlined bodies, exceptional diving abilities, and
          elaborate courtship displays make them a captivating subject for bird
          watchers and nature enthusiasts alike. Whether gliding gracefully on a
          lake or diving swiftly in search of prey, grebes are a testament to
          the wonders of avian evolution.
        </p>
        <p>
          Grebes are often seen in pairs or small family groups, especially
          during the breeding season. They are known for their strong pair
          bonds and cooperative parenting, with both parents sharing the
          responsibilities of incubating eggs and feeding chicks. Grebes are also
          highly territorial, defending their nesting sites from other grebes
          and potential predators.
          Grebes have a unique way of communicating with each other, using a
          variety of vocalizations, including whistles, grunts, and trills.
          These calls are used for mating displays, territory defense, and
          signaling alarm. Grebes are also known for their ability to mimic
          other bird species, which can help them avoid detection by predators

          or attract mates.
          Grebes are highly adaptable birds, capable of living in a wide range of 
          aquatic environments. They can thrive in both freshwater and
          brackish waters, and some species are even found in coastal areas.
          Their adaptability allows them to exploit various food sources and
          nesting sites, making them successful in diverse habitats.
          Grebes are also known for their unique feeding behavior, which
          involves diving underwater to catch prey. They have specialized
          adaptations, such as lobed toes and a streamlined body, that allow
          them to swim efficiently and catch fish and invertebrates. Grebes can
          dive to depths of up to 20 meters (65 feet) and can hold their breath
          for up to 30 seconds while hunting.
          Grebes are often seen in pairs or small family groups, especially
          during the breeding season. They are known for their strong pair

          bonds and cooperative parenting, with both parents sharing the
          responsibilities of incubating eggs and feeding chicks. Grebes are also
          highly territorial, defending their nesting sites from other grebes 
          and potential predators.
      
        <button class="back-btn" onclick="hideInfo('Grebe')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Hornbill')">Hornbill</button>

      <div id="Hornbill" class="info-section">
        <h2>Hornbill</h2>
        <img src="list_image/hornbill.jpg" alt="Hornbill" />
        <p>Scientific Name: <b>Bucerotidae</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>  
        <p>
          Hornbills are unique and fascinating birds known for their striking
          appearance, social behavior, and ecological importance. With their
          large, curved bills and distinctive casque (a helmet-like structure on
          the bill), hornbills are easily recognizable. They inhabit tropical
          forests in Africa, Asia, and Melanesia, playing crucial roles in seed
          dispersal and forest ecology.
        </p>
        <h3>Types of Hornbills</h3>
        <p>
          There are about 60 species of hornbills, each with unique
          characteristics. Some of the most notable include:<br />
          Great Hornbill (Buceros bicornis) – the largest hornbill, known for
          its impressive bill and striking black and yellow plumage.<br />
          Rhinoceros Hornbill (Buceros rhinoceros) – recognized by its large,
          curved bill and distinctive casque.<br />
          African Grey Hornbill (Tockus nasutus) – smaller species with a
          slender bill and grey plumage.<br />
          Oriental Pied Hornbill (Anthracoceros albirostris) – found in Southeast
          Asia, known for its black and white coloration.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Hornbills inhabit a variety of tropical and subtropical environments,
          including:<br />
          Dense rainforests, open woodlands, and savannas<br />
          They are primarily found in Africa, Asia, and Melanesia, with some
          species adapted to specific habitats like mangroves or montane forests.
          Hornbills are often seen in pairs or small family groups, foraging for
          food and nesting in tree cavities.
        </p>
        <h3>Feeding Habits</h3> 
        <p>
          Hornbills are omnivorous, feeding on a diverse diet that includes:<br />
          Fruits, seeds, insects, small mammals, and reptiles<br />
          They play a crucial role in seed dispersal, as many hornbill species
          primarily feed on fruits. Their large bills allow them to access
          fruits that other birds cannot reach. Some species also hunt small
          animals, using their powerful bills to catch and kill prey.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Hornbills are monogamous and often form long-term pair bonds. They
            have unique nesting behaviors, including:<br />
            Females sealing themselves inside tree cavities with mud and feces,
            leaving only a small slit for the male to pass food to her and the chicks.<br />
            The female stays inside the cavity throughout incubation and chick-rearing,
             emerging only when the chicks are nearly ready to fledge.<br />
            This remarkable nesting strategy provides protection from predators and harsh weather,
             ensuring a higher survival rate for the young.<br />
            Both parents cooperate closely, with the male supplying all the food during this period.
          </p>
          <h3>Niche and Ecological Role</h3>
          <p>
            Hornbills are vital for forest health as major seed dispersers.<br />
             Many tropical trees rely on hornbills to spread their seeds over large distances, 
             helping maintain plant diversity and forest regeneration.<br />
              Their presence is often an indicator of a healthy ecosystem.<br />
          </p>
          <h3>Fascinating Facts</h3>
          <p>
            The casque on a hornbill's bill can amplify calls or be used in combat between males.<br />
            Some hornbill species have a mutualistic relationship with mongooses or other animals, 
            helping each other find food.<br />
            Hornbills are featured in many local myths and are considered symbols of good luck or fertility in some cultures.<br />
            The Great Hornbill can live for up to 50 years in captivity.

          </p>
        <p>
          Hornbills are fascinating birds with unique adaptations for life in the 
          tropics. Their striking appearance, complex social behavior, and
          ecological importance make them a captivating subject for bird watchers
          and nature enthusiasts alike. Whether soaring through the canopy or
          foraging for fruits, hornbills are a testament to the wonders of avian
          evolution.

        </p>
        <p>
          Hornbills are often seen in pairs or small family groups, especially
          during the breeding season. They are known for their strong pair bonds
          and cooperative parenting, with both parents sharing the responsibilities
          of feeding and caring for the chicks. Hornbills are also highly territorial,
          defending their nesting sites from other hornbills and potential predators.
          Hornbills have a unique way of communicating with each other, using a
          variety of vocalizations, including honks, whistles, and grunts. These
          calls are used for mating displays, territory defense, and signaling
          alarm. Hornbills are also known for their ability to mimic other bird
          species, which can help them avoid detection by predators or attract
          mates.

        <p></p>
        <button class="back-btn" onclick="hideInfo('Hornbill')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Ibis')">Ibis</button>

      <div id="Ibis" class="info-section">
        <h2>Ibis</h2>
        <img src="list_image/glossy ibis.jpg" alt="Ibis" />
        <p>Scientific Name: <b>Threskiornithidae</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          Ibises are long-legged wading birds known for their distinctive curved
          bills and social behavior. They inhabit wetlands, marshes, and
          coastal areas worldwide, playing crucial roles in maintaining
          ecosystem health. With their striking appearance and fascinating
          behaviors, ibises are a delight to observe in the wild.
        </p>
        <h3>Types of Ibises</h3>
        <p>
          There are about 30 species of ibises, each adapted to different
          habitats and climates. Some of the most notable include:<br />
          Sacred Ibis (Threskiornis aethiopicus) – known for its long, curved
          bill and white plumage.<br />
          Glossy Ibis (Plegadis falcinellus) – recognized by its iridescent
          plumage and long legs.<br />
          White-faced Ibis (Plegadis chihi) – has a distinctive white face and
          reddish-brown body.<br />
          Australian White Ibis (Threskiornis molucca) – commonly found in
          urban areas, known for its scavenging behavior.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Ibises inhabit a variety of wetland environments, including:<br />
          Marshes, swamps, estuaries, and coastal areas<br />
          They are found on every continent except Antarctica, with some species
          adapted to specific habitats like mangroves or grasslands. Ibises are
          often seen in large flocks, foraging for food and nesting in colonies.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Ibises are omnivorous, feeding on a diverse diet that includes:<br />
          Insects, crustaceans, small fish, amphibians, and plant matter<br />
          They use their long, curved bills to probe mud and shallow water for
          food. Ibises are known for their social feeding behavior, often
          foraging in groups and using cooperative techniques to find prey.
          They are also known to scavenge in urban areas, where they may feed on
          discarded food.
        </p>
        <h3>Breeding and Nesting</h3> 

        <p>
          Ibises are monogamous and often form long-term pair bonds. They build
          nests in trees, shrubs, or on the ground, depending on the species.
          Key facts about ibis breeding include:<br />
          Females lay 2 to 5 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 21 to 30 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />  
          Both parents care for the chicks, feeding them small invertebrates
          and plant matter.<br />
          Ibises are known for their elaborate courtship displays, which often
          include synchronized movements and vocalizations. These displays help
          strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3> 
        <p>
          Ibises are highly social birds, often seen in large flocks. They are
          known for their:<br />
          Vocalizations, which include a variety of grunts, croaks, and whistles<br />
          Cooperative feeding behavior, where they work together to find food<br />
          Nesting in colonies, which provides protection from predators<br />
          Adaptations include:<br />
          Long legs for wading through shallow water<br />
          Curved bills for probing mud and vegetation<br />
          Waterproof feathers that help them stay dry while foraging
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Ibises play a crucial role in wetland ecosystems as scavengers and
          predators of small invertebrates. They help maintain the balance of
          aquatic food webs by controlling prey populations. Their feeding
          activities also contribute to nutrient cycling in wetlands, promoting
          plant growth and habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          The Sacred Ibis was revered in ancient Egypt and often associated
          with the god Thoth.<br />
          Ibises are known for their long migrations, traveling thousands of
          kilometers between breeding and wintering grounds.<br />
          Some species of ibises can live up to 30 years in the wild.<br />
          The Australian White Ibis is often seen scavenging in urban areas,
          earning it the nickname "bin chicken."<br />
          Ibises have a unique feeding technique called "tidbitting," where they
          make a series of rapid clicks with their bills to attract prey.
        </p>
        <p>
          Ibises are fascinating birds with unique adaptations for life in
          wetlands. Their long legs, curved bills, and social behavior make them
          a captivating subject for bird watchers and nature enthusiasts alike.
          Whether wading through shallow waters or nesting in colonies, ibises
          are a testament to the wonders of avian evolution.
        </p>

        <p>
          Ibises are often seen in pairs or small family groups, especially
          during the breeding season. They are known for their strong pair
          bonds and cooperative parenting, with both parents sharing the
          responsibilities of feeding and caring for the chicks. Ibises are also
          highly territorial, defending their nesting sites from other ibises
          and potential predators.
          Ibises have a unique way of communicating with each other, using a
          variety of vocalizations, including grunts, croaks, and whistles.
          These calls are used for mating displays, territory defense, and
          signaling alarm. Ibises are also known for their ability to mimic
          other bird species, which can help them avoid detection by predators
          or attract mates.
          Ibises are highly adaptable birds, capable of living in a wide range of
          wetland environments. They can thrive in both freshwater and
          brackish waters, and some species are even found in coastal areas.
          Their adaptability allows them to exploit various food sources and
          nesting sites, making them successful in diverse habitats.
          Ibises are also known for their unique feeding behavior, which
          involves probing mud and shallow water with their long, curved bills.
          They have specialized adaptations, such as long legs and waterproof
          feathers, that allow them to wade through water and access food
          sources that other birds cannot reach. Ibises are often seen foraging

          in groups, using cooperative techniques to find prey and share food

          resources.

        <p></p>
        <button class="back-btn" onclick="hideInfo('Ibis')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Jacana')">Jacana</button>

      <div id="Jacana" class="info-section">
        <h2>Jacana</h2>
        <img src="list_image/African jacana.jpg" alt="Jacana" />
        <p>Scientific Name: <b>Jacanidae</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>

        <p>
          Jacanas are unique wading birds known for their long legs, large feet,
          and striking plumage. They inhabit wetlands, marshes, and shallow
          lakes in tropical and subtropical regions worldwide. With their
          remarkable adaptations for life on water, jacanas are fascinating
          subjects of study and observation.
        </p>
        <h3>Types of Jacanas</h3>
        <p>
          There are about 10 species of jacanas, each adapted to different
          habitats and climates. Some of the most notable include:<br />
          Northern Jacana (Jacana spinosa) – found in Central America, known for
          its striking yellow and black plumage.<br />
          Wattled Jacana (Jacana jacana) – recognized by its distinctive wattle
          on the forehead and bright plumage.<br />
          African Jacana (Actophilornis africanus) – has long toes and a unique
          floating nest.<br />
          Lesser Jacana (Microparra capensis) – a small species found in South
          America.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Jacanas inhabit a variety of wetland environments, including:<br />
          Shallow lakes, marshes, swamps, and flooded grasslands<br />
          They are found in tropical and subtropical regions of Africa, Asia,
          Central America, and South America. Jacanas prefer areas with dense
          vegetation for nesting and cover from predators. They are often seen
          walking on floating vegetation or wading through shallow water. 
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Jacanas are omnivorous, feeding on a diverse diet that includes:<br />
          Insects, crustaceans, small fish, seeds, and aquatic plants<br />
          They use their long toes to walk on floating vegetation, allowing them
          to access food sources that other birds cannot reach. Jacanas are
          known for their unique feeding behavior, where they use their large
          feet to stir up mud and water to uncover hidden prey.
          They are also known to forage in pairs or small groups, using
          cooperative techniques to find food.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Jacanas are monogamous and often form long-term pair bonds. They build
          floating nests made of reeds and other aquatic vegetation. Key facts
          about jacana breeding include:<br />
          Females lay 2 to 4 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 25 to 30 days.<br />  
          Chicks are precocial, meaning they can walk and swim shortly after
          hatching.<br /> 
          Both parents care for the chicks, feeding them small invertebrates
          and plant matter.<br />
          Jacanas are known for their elaborate courtship displays, which often
          include synchronized movements and vocalizations. These displays help
          strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Jacanas are highly social birds, often seen in large flocks. They are
          known for their:<br />
          Vocalizations, which include a variety of whistles and calls<br />
          Cooperative feeding behavior, where they work together to find food<br />
          Nesting in colonies, which provides protection from predators<br />
          Adaptations include:<br />
          Long legs and large feet for walking on floating vegetation<br />
          Waterproof feathers that help them stay dry while foraging<br />
          They are also known for their unique behavior of "walking on water,"
          using their long toes to distribute their weight and prevent sinking.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Jacanas play a crucial role in wetland ecosystems as predators of
          small invertebrates and scavengers of plant matter. They help maintain
          the balance of aquatic food webs by controlling prey populations. Their
          feeding activities also contribute to nutrient cycling in wetlands,
          promoting plant growth and habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Jacanas are often called "Jesus birds" because of their ability to
          walk on water.<br />
          They have long toes that allow them to distribute their weight and
          walk on floating vegetation.<br />
          Some species of jacanas can live up to 15 years in the wild.<br />
          Jacanas are known for their unique nesting behavior, where they build
          floating nests that can move with the water level.<br />
          They are also known for their striking plumage, which varies between
          species and
          can include bright colors and intricate patterns.
        </p>

      
        <p></p>
        <button class="back-btn" onclick="hideInfo('Jacana')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Kiwi')">Kiwi</button>

      <div id="Kiwi" class="info-section">
        <h2>Kiwi</h2>
        <img src="list_image/kiwi.jpeg" alt="Kiwi" />
        <h3>Scientific Name: <b>Apteryx</b></h3>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          > 
        </p>  
        <p>
          Kiwis are unique flightless birds native to New Zealand, known for
          their small size, long beaks, and distinctive brown plumage. They are
          nocturnal and have a keen sense of smell, which is unusual for birds.
          Kiwis are an iconic symbol of New Zealand and play a crucial role in
          the country's ecosystem.
        </p>
        <h3>Types of Kiwis</h3>
        <p>
          There are five recognized species of kiwi, each adapted to different
          habitats and climates. Some of the most notable include:<br />
          North Island Kiwi (Apteryx mantelli) – found in forests and scrubland
          on New Zealand's North Island.<br />
          South Island Kiwi (Apteryx australis) – larger species found in a
          variety of habitats across New Zealand.<br />
          Little Spotted Kiwi (Apteryx owenii) – the smallest species, found on
          offshore islands.<br />
          Great Spotted Kiwi (Apteryx haastii) – known for its larger size and
          distinctive spotted plumage.<br />
          Tokoeka Kiwi (Apteryx australis) – found in the South Island, known
          for its adaptability to various environments.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Kiwis inhabit a variety of environments, including:<br />
          Forests, scrublands, grasslands, and wetlands<br />
          They are endemic to New Zealand and are found on both the North and
          South Islands, as well as some offshore islands. Kiwis prefer areas
          with dense vegetation for nesting and cover from predators. They are
          primarily nocturnal, foraging for food at night.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Kiwis are omnivorous, feeding on a diverse diet that includes:<br />
          Insects, worms, crustaceans, seeds, fruits, and small invertebrates<br />
          They use their long, sensitive beaks to probe the ground for food,
          relying on their keen sense of smell to locate prey. Kiwis are known
          for their unique feeding behavior, where they use their beaks to dig
          into the soil and uncover hidden food sources.
          They are also known to forage in pairs or small groups, using
          cooperative techniques to find food.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Kiwis are monogamous and often form long-term pair bonds. They build
          nests in burrows or under dense vegetation. Key facts about kiwi
          breeding include:<br />
          Females lay 1 to 2 large eggs, which are incubated by both parents.<br />
          The incubation period lasts about 70 to 90 days, one of the longest
          among birds.<br />
          Chicks are precocial, meaning they can walk and feed themselves shortly
          after hatching.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Kiwis are known for their elaborate courtship displays, which often
          include vocalizations and synchronized movements. These displays help
          strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Kiwis are highly social birds, often seen in pairs or small family
          groups. They are known for their:<br />
          Vocalizations, which include a variety of calls and whistles<br />
          Nocturnal behavior, allowing them to avoid predators and forage at
          night<br />
          Adaptations include:<br />
          Long, sensitive beaks for probing the ground for food<br />
          Small size and brown plumage for camouflage in their forest habitats<br />
          They are also known for their unique behavior of "barking" when
          threatened, which serves as a warning to other kiwis.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Kiwis play a crucial role in New Zealand's ecosystem as seed
          dispersers and predators of small invertebrates. They help maintain
          the balance of forest ecosystems by controlling prey populations and
          promoting plant growth. Their feeding activities also contribute to
          nutrient cycling in the soil, enhancing habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Kiwis are the only birds with nostrils at the end of their long beaks,
          allowing them to smell food underground.<br />
          They are flightless and have small, vestigial wings that are not used
          for flying.<br />
          Kiwis are nocturnal and have excellent night vision, which helps them
          forage in the dark.<br />
          They are also known for their unique mating rituals, which include
          vocalizations and synchronized movements.<br />
          Kiwis are a national symbol of New Zealand and are considered a
          cultural icon.
        </p>

        <p></p>
        <button class="back-btn" onclick="hideInfo('Kiwi')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Lyre bird')">Lyre bird</button>

      <div id="Lyre bird" class="info-section">
        <h2>Lyre bird</h2>
        <img src="list_image/SuperbLyrebird.jpg" alt="SuperbLyrebird" />
        <p>Scientific Name: <b>Menura</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          Lyre birds are extraordinary songbirds native to Australia, known for
          their incredible vocal mimicry and elaborate courtship displays. With
          their striking plumage and unique tail feathers, lyre birds are a
          delight to observe in the wild. They inhabit a variety of forested
          environments and play crucial roles in maintaining ecosystem health.
        </p>
        <h3>Types of Lyre Birds</h3>
        <p>
          There are two recognized species of lyre birds, each adapted to
          different habitats and climates. Some of the most notable include:<br />
          Superb Lyre Bird (Menura superb) – known for its striking tail
          feathers and exceptional vocal mimicry.<br />
          Albert's Lyre Bird (Menura alberti) – found in the rainforests of
          southeastern Queensland, known for its unique plumage and vocalizations.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Lyre birds inhabit a variety of forested environments, including:<br />
          Rainforests, eucalyptus forests, and temperate woodlands<br />
          They are endemic to Australia and are found in the eastern and
          southeastern regions of the country. Lyre birds prefer areas with dense
          undergrowth for nesting and cover from predators. They are primarily
          terrestrial, often seen foraging on the forest floor.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Lyre birds are omnivorous, feeding on a diverse diet that includes:<br />
          Insects, worms, small invertebrates, seeds, and fruits<br />
          They use their long, curved bills to probe the ground for food,
          relying on their keen sense of hearing to locate prey. Lyre birds are
          known for their unique feeding behavior, where they use their bills to
          dig into the soil and uncover hidden food sources.
          They are also known to forage in pairs or small groups, using
          cooperative techniques to find food.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Lyre birds are monogamous and often form long-term pair bonds. They
          build nests in dense vegetation or tree hollows. Key facts about lyre
          bird breeding include:<br
  />>          Females lay 1 to 2 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 30 to 35 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Lyre birds are known for their elaborate courtship displays, which
          often include vocal mimicry and synchronized movements  
          These displays help strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Lyre birds are highly social birds, often seen in pairs or small
          family groups. They are known for their:<br />
          Vocalizations, which include a wide range of calls and mimicry of
          other bird species and environmental sounds<br />
          Elaborate courtship displays
          that showcase their unique tail feathers and vocal abilities<br />
          Adaptations include:<br />
          Long, curved bills for probing the ground for food<br />
          Striking plumage with long tail feathers that can be fanned out during
          courtship displays<br />
          They are also known for their unique behavior of mimicking the calls
          of other birds and even mechanical sounds, such as chainsaws or camera
          shutters.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Lyre birds play a crucial role in Australian forest ecosystems as
          seed dispersers and predators of small invertebrates. They help
          maintain the balance of forest ecosystems by controlling prey
          populations and promoting plant growth. Their feeding activities also
          contribute to nutrient cycling in the soil, enhancing habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Lyre birds are considered one of the best mimics in the animal kingdom,
          capable of imitating a wide range of sounds.<br />
          The Superb Lyre Bird's tail feathers can be fanned out into a stunning
          lyre shape during courtship displays.<br />
          Lyre birds are known for their elaborate courtship rituals, which can
          last for hours.<br />
          They have a unique vocal organ called the syrinx, which allows them to
          produce complex sounds and mimicry.<br />
          Lyre birds are often featured in Australian folklore and are considered
          a national symbol.
        </p>

        <p></p>
        <button class="back-btn" onclick="hideInfo('Lyre bird')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Macaw')">Macaw</button>

      <div id="Macaw" class="info-section">
        <h2>Macaw</h2>
        <img src="list_image/scarlet macaw.jpg" alt="Macaw" />
        <p>Scientific Name: <b>Psittacidae</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          Macaws are large, colorful parrots native to Central and South
          America. Known for their striking plumage, intelligence, and social
          behavior, macaws are popular pets and important members of their
          ecosystems. They inhabit tropical rainforests, savannas, and woodlands,
          playing crucial roles in seed dispersal and forest health.
        </p>
        <h3>Types of Macaws</h3>
        <p>
          There are about 17 species of macaws, each adapted to different
          habitats and climates. Some of the most notable include:<br />
          Scarlet Macaw (Ara macao) – known for its vibrant red, yellow, and
          blue plumage.<br />
          Blue-and-yellow Macaw (Ara ararauna) – recognized by its striking blue
          and yellow feathers.<br />
          Green-winged Macaw (Ara chloropterus) – has a green back and red
          forehead.<br />
          Hyacinth Macaw (Anodorhynchus hyacinthinus) – the largest macaw,
          known for its stunning blue plumage.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Macaws inhabit a variety of environments, including:<br />
          Tropical rainforests, savannas, and woodlands<br />
          They are primarily found in Central and South America, with some
          species also found in parts of the Caribbean. Macaws prefer areas with
          abundant fruiting trees for nesting and foraging. They are often seen
          in pairs or small family groups, socializing and foraging together.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Macaws are primarily herbivorous, feeding on a diverse diet that
          includes:<br />
          Fruits, nuts, seeds, flowers, and leaves<br />
          They have strong, curved beaks that allow them to crack open hard
          shells and access the nutritious seeds inside. Macaws are known for
          their unique feeding behavior, where they use their beaks to peel
          fruits and nuts before consuming them. They are also known to forage
          in pairs or small groups, using cooperative techniques to find food.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Macaws are monogamous and often form long-term pair bonds. They build
          nests in tree cavities or hollows. Key facts about macaw breeding
          include:<br />

          Females lay 2 to 4 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 24 to 28 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Macaws are known for their elaborate courtship displays, which often
          include vocalizations and synchronized movements. These displays help
          strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Macaws are highly social birds, often seen in large flocks. They are
          known for their:<br />
          Vocalizations, which include a wide range of squawks, whistles, and
          calls<br />
          Social behavior, where they engage in grooming and play with each
          other<br />
          Adaptations include:<br />
          Strong, curved beaks for cracking open hard shells and accessing food<br />
          Bright plumage that serves as camouflage in their forest habitats<br />
          They are also known for their unique behavior of "talking," where they
          can mimic human speech and other sounds.      
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Macaws play a crucial role in their ecosystems as seed dispersers and
          predators of small invertebrates. They help maintain the balance of
          forest ecosystems by controlling prey populations and promoting plant
          growth. Their feeding activities also contribute to nutrient cycling
          in the soil, enhancing habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Macaws are known for their intelligence and problem-solving abilities.<br />
          They can live up to 50 years in the wild and even longer in captivity.<br />
          Macaws have strong social bonds and often engage in mutual grooming.<br />
          The Hyacinth Macaw is the largest flying parrot species in the world.<br />
          Macaws are often featured in popular culture and are considered a
          symbol of tropical wildlife.
        </p>

        <p></p>
        <button class="back-btn" onclick="hideInfo('Macaw')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Nightingale')">
        Nightingale
      </button>

      <div id="Nightingale" class="info-section">
        <h2>Nightingale</h2>
        <img src="list_image/nightingales.jpeg" alt="Nightingale" />
        <p>Scientific Name: <b>Luscinia megarhynchos</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >   
        </p>
        <p>
          Nightingales are small, migratory songbirds known for their beautiful
          and complex songs. They are found in Europe, Asia, and parts of North
          Africa. Nightingales are nocturnal singers, often heard at night,
          making them a symbol of romance and inspiration in literature and
          music.
        </p>
        <h3>Types of Nightingales</h3>
        <p>
          There are two main species of nightingales, each adapted to different
          habitats and climates. Some of the most notable include:<br />
          Common Nightingale (Luscinia megarhynchos) – known for its rich,
          melodious song and brown plumage.<br />
          Rufous Nightingale (Luscinia megarhynchos) – recognized by its
          reddish-brown plumage and distinctive song.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Nightingales inhabit a variety of environments, including:<br />
          Woodlands, scrublands, and gardens<br />
          They are primarily found in Europe, Asia, and parts of North Africa,
          migrating to warmer regions during the winter months. Nightingales
          prefer areas with dense vegetation for nesting and cover from
          predators. They are often seen perched on low branches or singing from
          the ground.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Nightingales are omnivorous, feeding on a diverse diet that includes:<br />
          Insects, worms, fruits, and seeds<br />
          They use their sharp beaks to catch insects and probe the ground for
          food. Nightingales are known for their unique feeding behavior, where
          they use their beaks to extract insects from crevices in bark or soil.
          They are also known to forage in pairs or small groups, using
          cooperative techniques to find food.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Nightingales are monogamous and often form long-term pair bonds. They
          build nests in dense vegetation or shrubs. Key facts about nightingale
          breeding include:<br />
          Females lay 3 to 6 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 12 to 14 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Nightingales are known for their elaborate courtship displays, which
          often include vocalizations and synchronized movements. These displays
          help strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Nightingales are highly social birds, often seen in pairs or small
          family groups. They are known for their:<br />
          Vocalizations, which include a wide range of melodious songs and calls
          that vary between individuals<br />
          Nocturnal singing behavior, where they are most active and vocal at
          night<br />
          Adaptations include:<br />
          Sharp beaks for catching insects and probing the ground for food<br />
          Brown plumage that provides camouflage in their forest habitats<br />
          They are also known for their unique behavior of singing from hidden
          perches, making them difficult to spot while they sing.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Nightingales play a crucial role in their ecosystems as predators of
          insects and seed dispersers. They help maintain the balance of forest
          ecosystems by controlling prey populations and promoting plant growth.
          Their feeding activities also contribute to nutrient cycling in the
          soil, enhancing habitat health.
        </p>

        <h3>Fascinating Facts</h3>
        <p>
          Nightingales are famous for their beautiful and complex songs, which
          have inspired poets and musicians for centuries.<br />
          They are nocturnal singers, often heard at night, making them a symbol
          of romance and inspiration.<br />
          Nightingales can sing up to 300 different song variations, showcasing
          their vocal abilities.<br />
          They are migratory birds, traveling thousands of kilometers between
          breeding and wintering grounds.<br />
          Nightingales are known for their secretive behavior, often hiding in
          dense vegetation while singing.
        </p>

        <p></p>
        <button class="back-btn" onclick="hideInfo('Nightingale')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Owl')">Owl</button>

      <div id="Owl" class="info-section">
        <?php
        $sql = "SELECT * FROM birds WHERE id = 3";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

          if ($queryResults > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<h2>".$row['name']."</h2>
                      <img src='list_image/snow owl.jpg' alt='Owl' />
                      <p>Scientific Name:<b>Strigiformes</b></p>
                      <p>Type :<abbr title='Birds of prey (raptors) are meat-eating birds with sharp talons, hooked beaks, and excellent vision. Examples: eagles, hawks, owls.'><b>Birds of Prey</b></abbr></p>
                      <p>".$row['description']."</p>
                      <h3>Types of Owls</h3>
                      <p>There are about 200 species of owls, each adapted to different habitats and climates. Some of the most notable include:<br/>
                      Barn Owl (Tyto alba) – known for its heart-shaped face and silent flight.<br/> Great Horned Owl (Bubo virginianus) – recognized by its tufted \"horns\" and powerful build.<br/>Snowy Owl (Bubo scandiacus) – famous for its striking white plumage and association with the Arctic.<br/>
                      Eastern Screech Owl (Megascops asio) – a small owl known for its distinctive trilling call.<br/>Each species has unique adaptations for hunting, nesting, and social behavior.</p>
                      <h3>Habitat and Distribution</h3>
                      <p>".$row['habitat']."</p>";
              }
          }

        ?>

        <h3>Feeding Habits</h3>
        <p>
          Owls are carnivorous, feeding primarily on small mammals, birds,
          insects, and reptiles. Their diet varies depending on the species and
          available prey. Owls are known for their unique hunting behavior,
          where they use their exceptional hearing and night vision to locate
          prey in complete darkness. They have specialized feathers that allow
          for silent flight, enabling them to approach prey undetected.
          Owls are also known to swallow their prey whole and later regurgitate
          indigestible parts, such as bones and fur, in the form of pellets.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Owls are generally monogamous and often form long-term pair bonds.
          They build nests in tree cavities, abandoned buildings, or on the
          ground. Key facts about owl breeding include:<br />
          Females lay 1 to 7 eggs, depending on the species.<br />
          The incubation period lasts about 28 to 35 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Owls are known for their elaborate courtship displays, which often
          include vocalizations and synchronized movements. These displays help
          strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3> 
        <p>
          Owls are highly social birds, often seen in pairs or small family
          groups. They are known for their:<br />
          Vocalizations, which include a wide range of hoots, screeches, and
          trills that vary between species<br />
          Nocturnal behavior, allowing them to hunt and be active at night<br />
          Adaptations include:<br />
          Large eyes with excellent night vision for hunting in low light<br />
          Silent flight due to specialized feathers that reduce noise during
          flight<br />
          They are also known for their unique head rotation, which allows them
          to see behind them without moving their bodies.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Owls play a crucial role in their ecosystems as predators of small
          mammals and birds. They help maintain the balance of food webs by
          controlling prey populations. Their hunting activities also contribute
          to nutrient cycling in the soil, enhancing habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Owls can rotate their heads up to 270 degrees, allowing them to see
          behind them without moving their bodies.<br />
          They have specialized feathers that allow for silent flight, making
          them stealthy hunters.<br />
          Owls are known for their exceptional hearing, which helps them locate
          prey in complete darkness.<br />
          The Barn Owl is one of the most widespread owl species in the world.<br />
          Owls are often associated with wisdom and mystery in various cultures
          and mythologies.
        </p>

        <p></p>
        <button class="back-btn" onclick="hideInfo('Owl')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Puffin')">Puffin</button>

      <div id="Puffin" class="info-section">
        <h2>Puffin</h2>
        <img src="list_image/puffin.jpeg" alt="Puffin" />
        <p>Scientific Name: <b>Fratercula</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          Puffins are small, colorful seabirds known for their distinctive
          appearance and charming personalities. They are found in the North
          Atlantic Ocean and are famous for their brightly colored beaks and
          striking plumage. Puffins are excellent divers and spend most of their
          lives at sea, returning to land only to breed.
        </p>
        <h3>Types of Puffins</h3>
        <p>
          There are three recognized species of puffins, each adapted to
          different habitats and climates. Some of the most notable include:<br />
          Atlantic Puffin (Fratercula arctica) – known for its colorful beak and
          black and white plumage.<br />
          Horned Puffin (Fratercula corniculata) – recognized by its distinctive
          horn-like projections on its beak.<br />
          Tufted Puffin (Fratercula cirrhata) – known for its striking yellow
          tufts of feathers on its head.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Puffins inhabit a variety of marine environments, including:<br />
          Coastal cliffs, rocky islands, and open ocean<br />
          They are primarily found in the North Atlantic Ocean, with breeding
          colonies located on coastal cliffs and islands. Puffins prefer areas
          with abundant fish and marine invertebrates for feeding. They are
          excellent divers, capable of reaching depths of up to 200 feet (60
          meters) while hunting for food.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Puffins are carnivorous, feeding primarily on small fish, crustaceans,
          and marine invertebrates. Their diet varies depending on the species
          and available prey. Puffins are known for their unique hunting
          behavior, where they dive underwater to catch fish using their sharp
          beaks. They can hold multiple fish in their beaks at once, thanks to
          specialized grooves that allow them to grip slippery prey.
          Puffins are also known to forage in pairs or small groups, using
          cooperative techniques to find food. They often return to their nests
          with beaks full of fish to feed their chicks.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Puffins are monogamous and often form long-term pair bonds. They build
          nests in burrows or crevices on coastal cliffs. Key facts about puffin
          breeding include:<br />
          Females lay 1 to 3 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 36 to 45 days.<br />  
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Puffins are known for their elaborate courtship displays, which often
          include vocalizations and synchronized movements. These displays help
          strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Puffins are highly social birds, often seen in large colonies during
          the breeding season. They are known for their:<br />
          Vocalizations, which include a variety of squawks, whistles, and
          grunts that vary between species<br />
          Social behavior, where they engage in grooming and play with each
          other<br />
          Adaptations include:<br />
          Brightly colored beaks that change color during the breeding season<br />
          Strong, webbed feet for swimming and diving<br />
          They are also known for their unique behavior of "billing," where they
          touch their beaks together as a form of greeting or courtship.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Puffins play a crucial role in their ecosystems as predators of small
          fish and marine invertebrates. They help maintain the balance of
          marine food webs by controlling prey populations. Their feeding
          activities also contribute to nutrient cycling in the ocean, enhancing
          habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Puffins are often called "sea parrots" due to their colorful beaks and
          playful behavior.<br />
          They can hold up to 10 fish in their beaks at once, thanks to their
          specialized grooves.<br />
          Puffins are excellent divers, capable of reaching depths of up to 200
          feet (60 meters) while hunting for food.<br />
          The Atlantic Puffin is the most widespread species and is often seen
          in large colonies during the breeding season.<br />
          Puffins are known for their unique courtship displays, which include
          vocalizations and synchronized movements.
        </p>

        <p></p>
        <button class="back-btn" onclick="hideInfo('Puffin')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Quetzal')">Quetzal</button>

      <div id="Quetzal" class="info-section">
        <h2>Quetzal</h2>
        <img src="list_image/queztzal.jpg" alt="Quetzal" />
        <p>Scientific Name: <b>Pharomachrus</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          Quetzals are vibrant, colorful birds native to Central America,
          particularly found in cloud forests and mountainous regions. Known for
          their striking plumage and long tail feathers, quetzals are considered
          symbols of beauty and freedom in many cultures. They play crucial roles
          in their ecosystems as seed dispersers and indicators of forest health.
        </p>
        <h3>Types of Quetzals</h3>
        <p>
          There are several species of quetzals, each adapted to different
          habitats and climates. Some of the most notable include:<br />
          Resplendent Quetzal (Pharomachrus mocinno) – known for its vibrant
          green and red plumage and long tail feathers.<br />
          Crested Quetzal (Pharomachrus antisianus) – recognized by its striking
          crest and colorful plumage.<br />
          Golden-headed Quetzal (Pharomachrus auriceps) – known for its golden
          head and bright green body.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Quetzals inhabit a variety of environments, including:<br />
          Cloud forests, montane rainforests, and tropical forests<br />
          They are primarily found in Central America, from southern Mexico to
          western Panama. Quetzals prefer areas with dense vegetation and
          abundant fruiting trees for nesting and foraging. They are often seen
          perched on high branches or flying gracefully through the forest canopy.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Quetzals are omnivorous, feeding on a diverse diet that includes:<br />
          Fruits, insects, small vertebrates, and nectar<br />
          They have strong, curved beaks that allow them to access fruits and
          insects in the forest canopy. Quetzals are known for their unique
          feeding behavior, where they use their beaks to extract fruit pulp and
          nectar from flowers. They are also known to forage in pairs or small
          groups, using cooperative techniques to find food.
          Quetzals are particularly fond of the fruit of the avocado tree,
          which is a key part of their diet. They play an important role in
          seed dispersal, helping to maintain the health of their forest
          ecosystems.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Quetzals are monogamous and often form long-term pair bonds. They build
          nests in tree cavities or hollows. Key facts about quetzal breeding
          include:<br />
          Females lay 2 to 4 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 16 to 18 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Quetzals are known for their elaborate courtship displays, which often
          include vocalizations and synchronized movements. These displays help
          strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>

        <p>
          Quetzals are highly social birds, often seen in pairs or small family
          groups. They are known for their:<br />
          Vocalizations, which include a wide range of whistles and calls that
          vary between species<br />
          Colorful plumage, which serves as camouflage in their forest habitats<br />
          Adaptations include:<br />
          Strong, curved beaks for accessing fruits and insects in the forest
          canopy<br />
          Long tail feathers that can reach up to 3 feet (1 meter) in length,
          used for display during courtship<br />
          They are also known for their unique behavior of "dancing," where they
          perform elaborate displays to attract mates. This includes
          fanning out their tail feathers and making vocalizations. 
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Quetzals play a crucial role in their ecosystems as seed dispersers
          and indicators of forest health. They help maintain the balance of
          forest ecosystems by controlling prey populations and promoting plant
          growth. Their feeding activities also contribute to nutrient cycling
          in the soil, enhancing habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Quetzals are considered national symbols in several Central American
          countries, including Guatemala, where they are featured on the
          national flag.<br />
          They are known for their striking plumage, which can change color
          depending on the angle of light.<br />
          Quetzals are often associated with freedom and beauty in various
          cultures and mythologies.<br />
          The Resplendent Quetzal is the most famous species and is often seen
          in cloud forests.<br />
          Quetzals are known for their unique courtship displays, which include
          vocalizations and synchronized movements.
        </p>

        <p></p>
        <button class="back-btn" onclick="hideInfo('Quetzal')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Roadrunner')">
        Roadrunner
      </button>

      <div id="Roadrunner" class="info-section">
        <h2>Roadrunner</h2>
        <img src="list_image/roadrunner.jpg" alt="Roadrunner" /> 
        <p>Scientific Name: <b>Geococcyx californianus</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>

        <p>
          The roadrunner is a fast-running bird native to the deserts of the
          southwestern United States and Mexico. Known for its distinctive
          appearance and unique behavior, the roadrunner is a symbol of the
          American Southwest. It is famous for its speed, agility, and ability to
          thrive in harsh desert environments.

        </p>
        <h3>Types of Roadrunners</h3>
        <p>
          There are two recognized species of roadrunners, each adapted to
          different habitats and climates. Some of the most notable include:<br />
          Greater Roadrunner (Geococcyx californianus) – known for its long tail,
          distinctive crest, and ability to run at high speeds.<br />
          Lesser Roadrunner (Geococcyx velox) – recognized by its smaller size and
          similar appearance.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Roadrunners inhabit a variety of environments, including:<br />
          Deserts, scrublands, and open grasslands<br />
          They are primarily found in the southwestern United States, Mexico,
          and parts of Central America. Roadrunners prefer areas with sparse
          vegetation and abundant insects and small vertebrates for feeding. They
          are often seen running along roadsides or perched on low branches.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Roadrunners are carnivorous, feeding primarily on insects, small
          mammals, reptiles, and birds. Their diet varies depending on the
          species and available prey. Roadrunners are known for their unique
          hunting behavior, where they use their speed and agility to chase down
          prey. They are capable of running at speeds of up to 20 miles per hour
          (32 kilometers per hour) and can leap several feet into the air to
          catch flying insects or small birds.
          Roadrunners are also known to forage in pairs or small groups, using
          cooperative techniques to find food. They often hunt by running along
          the ground, scanning for movement and pouncing on unsuspecting prey.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Roadrunners are monogamous and often form long-term pair bonds. They
          build nests in shrubs or low trees. Key facts about roadrunner breeding
          include:<br />
          Females lay 2 to 6 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 18 to 20 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Roadrunners are known for their elaborate courtship displays, which
          often include vocalizations and synchronized movements. These displays
          help strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Roadrunners are highly social birds, often seen in pairs or small
          family groups. They are known for their:<br />
          Vocalizations, which include a variety of coos, whistles, and
          trills that vary between species<br />
          Unique running behavior, where they use their long legs to run at high
          speeds and navigate through desert terrain<br />
          Adaptations include:<br />
          Long legs and a streamlined body for efficient running<br />
          Sharp beaks for catching insects and small vertebrates<br />
          They are also known for their unique behavior of "tail-fanning," where
          they spread their tail feathers to display during courtship or to
          intimidate rivals.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Roadrunners play a crucial role in their ecosystems as predators of
          insects and small vertebrates. They help maintain the balance of
          desert ecosystems by controlling prey populations. Their hunting
          activities also contribute to nutrient cycling in the soil, enhancing
          habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Roadrunners are known for their speed and agility, capable of running
          at speeds of up to 20 miles per hour (32 kilometers per hour).<br />
          They are often seen perched on low branches or running along roadsides,
          making them a common sight in the American Southwest.<br />
          Roadrunners are known for their unique courtship displays, which
          include vocalizations and synchronized movements.<br />
          They are also known for their ability to eat venomous snakes, such as
          rattlesnakes, by using their speed and agility to avoid bites.<br />
          Roadrunners are often featured in popular culture, including cartoons
          and folklore, as symbols of speed and resilience.
        </p>

        <p></p>
        <button class="back-btn" onclick="hideInfo('Roadrunner')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Secretary_bird')">
        Secretary bird
      </button>

      <div id="Secretary_bird" class="info-section">
        <h2>Secretary bird</h2>
        <img src="list_image/sec bird.jpg" alt="Secretary bird" />
        <p>Scientific Name:<b>Sagittarius serpentarius</b></p>
        <p>
          Type:<abbr
            title="Birds of prey (raptors) are meat-eating birds with sharp talons, hooked beaks, and excellent vision. Examples: eagles, hawks, owls."
            ><b>Birds of Prey</b></abbr
          >
        </p>
        <p>
          The secretary bird is a large, terrestrial bird of prey native to
          sub-Saharan Africa. Unlike most birds of prey, it spends most of its
          time on the ground, using its long legs and powerful strides to hunt
          across savannas and grasslands.
        </p>
        <h3>Appearance</h3>
        <p>
          Standing up to 4 feet (1.2 meters) tall, the secretary bird is
          instantly recognizable. It has an eagle-like body with a hawk’s hooked
          beak, but it walks on long crane-like legs. Its plumage is mostly gray
          with black flight feathers and tail tips. What truly stands out is its
          crest of long black feathers on the back of its head, said to resemble
          18th-century clerks who used to tuck quills behind their ears — hence
          the name "secretary" bird
        </p>

        <h3>Habitat and Range</h3>
        <p>
          The secretary bird is found in open grasslands and savannahs, avoiding
          dense forests and deserts. Its range spans much of sub-Saharan Africa,
          from Senegal and Ethiopia down to South Africa.
        </p>
        <h3>Diet and Hunting</h3>
        <p>
          Secretary birds are carnivorous and feed mainly on insects, rodents,
          reptiles, and small mammals. However, they are best known for their
          ability to kill snakes — even venomous ones like cobras and puff
          adders. They use their long legs and sharp talons to stomp or kick
          prey with incredible force and precision. Their legs are covered with
          scales for protection against bites.
        </p>
        <h3>Behavior</h3>
        <p>
          They are diurnal and hunt mostly during the day, often seen walking
          through the grass, scanning for movement. Secretary birds live in
          pairs or small family groups and are known for their large home
          ranges.
        </p>
        <h3>Breeding</h3>
        <p>
          Unique Facts Despite being a bird of prey, it rarely flies unless
          threatened or roosting. Its kicks can exert a force of five times its
          own body weight — enough to break a snake’s spine. It has featured on
          several African emblems and coats of arms, including South Africa's
          national emblem. The secretary bird is a remarkable example of
          evolution, combining the traits of raptors and ground-dwelling birds
          into one powerful and elegant predator.
        </p>
        <button class="back-btn" onclick="hideInfo('Secretary_bird')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Toucan')">Toucan</button>

      <div id="Toucan" class="info-section">
        <h2>Toucan</h2>
        <img src="list_image/toucan.jpg" alt="Toucan"/>
        <p>Scientific Name: <b>Ramphastos</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          Toucans are large, colorful birds native to the tropical rainforests
          of Central and South America. Known for their strikingly large and
          vibrant bills, toucans are a symbol of the rainforest and play crucial
          roles in their ecosystems as seed dispersers and indicators of forest
          health.
        </p>
        <h3>Types of Toucans</h3>
        <p>
          There are about 40 species of toucans, each adapted to different
          habitats and climates. Some of the most notable include:<br />
          Keel-billed Toucan (Ramphastos sulfuratus) – known for its bright
          multicolored bill and striking plumage.<br />
          Toco Toucan (Ramphastos toco) – recognized by its large, orange bill
          and black body.<br />
          Channel-billed Toucan (Ramphastos vitellinus) – known for its unique
          yellow bill and green plumage.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Toucans inhabit a variety of environments, including:<br />
          Tropical rainforests, cloud forests, and montane rainforests<br />
          They are primarily found in Central and South America, from southern
          Mexico to northern Argentina. Toucans prefer areas with dense
          vegetation and abundant fruiting trees for nesting and foraging. They
          are often seen perched on high branches or flying gracefully through
          the forest canopy.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          Toucans are omnivorous, feeding on a diverse diet that includes:<br />
          Fruits, insects, small vertebrates, and nectar<br />
          They have large, curved bills that allow them to access fruits and
          insects in the forest canopy. Toucans are known for their unique
          feeding behavior, where they use their bills to extract fruit pulp and
          nectar from flowers. They are also known to forage in pairs or small
          groups, using cooperative techniques to find food.
          Toucans are particularly fond of the fruit of the fig tree, which is a
          key part of their diet. They play an important role in seed dispersal,
          helping to maintain the health of their forest ecosystems.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Toucans are monogamous and often form long-term pair bonds. They build
          nests in tree cavities or hollows. Key facts about toucan breeding
          include:<br />
          Females lay 2 to 4 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 16 to 18 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Toucans are known for their elaborate courtship displays, which often
          include vocalizations and synchronized movements. These displays help
          strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Toucans are highly social birds, often seen in pairs or small family
          groups. They are known for their:<br />
          Vocalizations, which include a wide range of squawks, whistles, and
          trills that vary between species<br />
          Colorful plumage, which serves as camouflage in their forest habitats<br />
          Adaptations include:<br />
          Large, curved bills for accessing fruits and insects in the forest
          canopy<br />
          Strong, webbed feet for climbing and perching on branches<br />
          They are also known for their unique behavior of "bill-fanning," where
          they spread their bills to display during courtship or to intimidate
          rivals.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Toucans play a crucial role in their ecosystems as seed dispersers
          and indicators of forest health. They help maintain the balance of
          forest ecosystems by controlling prey populations and promoting plant
          growth. Their feeding activities also contribute to nutrient cycling
          in the soil, enhancing habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Toucans are often called "the clowns of the rainforest" due to their
          colorful appearance and playful behavior.<br />
          They can rotate their bills 180 degrees, allowing them to access food
          from different angles.<br />
          Toucans are known for their unique courtship displays, which include
          vocalizations and synchronized movements.<br />
          The Keel-billed Toucan is the most famous species and is often seen in
          tropical rainforests.<br />
          Toucans are known for their unique feeding behavior, where they use
          their bills to extract fruit pulp and nectar from flowers.
        </p>
        <p>
          Toucans are also known for their unique social behavior, where they
          engage in grooming and play with each other. This helps strengthen
          pair bonds and maintain social cohesion within their groups.
        </p>
        
        <p></p>
        <button class="back-btn" onclick="hideInfo('Toucan')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Uluguru_Bushshrike')">
        Uluguru Bushshrike
      </button>

      <div id="Uluguru_Bushshrike" class="info-section">
        <h2>Uluguru Bushshrike</h2>
        <img src="list_image/Bushshrike.jpeg" alt="Uluguru Bushshrike" />
        <p>Scientific Name: <b>Malaconotus alius</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          The Uluguru Bushshrike is a small, colorful bird native to the
          montane forests of the Uluguru Mountains in Tanzania. Known for its
          striking plumage and melodious song, this bushshrike is a symbol of
          the rich biodiversity of the region. It plays crucial roles in its
          ecosystem as an insectivore and indicator of forest health.
        </p>
        <h3>Appearance</h3>
        <p>
          The Uluguru Bushshrike is a small bird, measuring about 7 to 8 inches
          (18 to 20 cm) in length. It has a distinctive plumage with a bright
          yellow belly, olive-green back, and black wings. Its head is adorned
          with a striking black crown and a white throat patch. The bill is
          short and hooked, adapted for catching insects.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          The Uluguru Bushshrike inhabits montane forests, particularly in the
          Uluguru Mountains of Tanzania. It prefers areas with dense vegetation
          and abundant insect populations for feeding. This bird is primarily
          found at elevations between 1,500 to 2,500 meters (4,900 to 8,200
          feet) above sea level.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          The Uluguru Bushshrike is an insectivore, feeding primarily on a
          diet of insects, spiders, and other small invertebrates. It uses its
          sharp bill to catch prey in the dense foliage of the forest. This bird
          is known for its unique hunting behavior, where it perches quietly and
          waits for insects to come into view before striking with precision.
          The Uluguru Bushshrike is also known to forage in pairs or small
          groups, using cooperative techniques to find food. It often hunts by
          moving through the underbrush, scanning for movement and pouncing on
          unsuspecting prey.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          The Uluguru Bushshrike is monogamous and often forms long-term pair
          bonds. It builds nests in dense vegetation, typically in shrubs or
          small trees. Key facts about Uluguru Bushshrike breeding include:<br />
          Females lay 2 to 3 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 14 to 16 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          The Uluguru Bushshrike is known for its elaborate courtship displays,
          which often include vocalizations and synchronized movements. These
          displays help strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>

        <p>
          The Uluguru Bushshrike is a solitary bird, often seen perched quietly
          in the forest canopy. It is known for its:<br />
          Melodious song, which varies between individuals and serves as a form
          of communication<br />
          Colorful plumage, which serves as camouflage in its forest habitat<br />
          Adaptations include:<br />
          Short, hooked bill for catching insects in dense vegetation<br />
          Strong legs for perching and moving through the underbrush<br />
          It is also known for its unique behavior of "tail-fanning," where it
          spreads its tail feathers to display during courtship or to intimidate
          rivals.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          The Uluguru Bushshrike plays a crucial role in its ecosystem as an
          insectivore and indicator of forest health. It helps maintain the
          balance of forest ecosystems by controlling insect populations and
          promoting plant growth. Its feeding activities also contribute to
          nutrient cycling in the soil, enhancing habitat health.
        </p>
        <h3>Fascinating Facts</h3>

        <p>
          The Uluguru Bushshrike is endemic to the Uluguru Mountains, making it
          a unique species with limited distribution.<br />
          It is known for its striking plumage and melodious song, which can be
          heard throughout the forest.<br />
          The Uluguru Bushshrike is often considered a symbol of the rich
          biodiversity of the Uluguru Mountains.<br />
          It plays a crucial role in its ecosystem as an insectivore and
          indicator of forest health.<br />
          The Uluguru Bushshrike is known for its unique hunting behavior,
          where it perches quietly and waits for insects to come into view
          before striking with precision.
        </p>
        <p>
          The Uluguru Bushshrike is also known for its unique social behavior,
          where it engages in grooming and play with other individuals. This
          helps strengthen pair bonds and maintain social cohesion within their
          groups.
        </p>

        <p></p>
        <button class="back-btn" onclick="hideInfo('Uluguru_Bushshrike')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Vulture')">Vulture</button>
      <div id="Vulture" class="info-section">
        <?php
        $sql = "SELECT * FROM birds WHERE id = 4";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<h2>".$row['name']."</h2>
                    <img src='list_image/black vulture.jpg' alt='Black Vulture'/>
                    <p>Scientific Name: <b>Gyps</b></p>
                    <p>Type :<abbr title='Birds of prey (raptors) are meat-eating birds with sharp talons, hooked beaks, and excellent vision. Examples: eagles, hawks, owls.'><b>Birds of Prey</b></abbr></p>
                    <p>".$row['description']."</p>
                    <h3>Types of Vultures</h3>
                    <p>There are about 23 species of vultures, each adapted to different habitats and climates. Some of the most notable include:<br/>
                    Griffon Vulture (Gyps fulvus) – known for its large wingspan and distinctive white head.<br/>
                    Andean Condor (Vultur gryphus) – recognized by its massive size and striking black plumage.<br/>
                    Turkey Vulture (Cathartes aura) – known for its red head and keen sense of smell.<br/>Each species has unique adaptations for feeding, nesting, and social behavior.</p>
                    <h3>Habitat and Distribution</h3>
                    <p>".$row['habitat']."</p>";
            }
        }

        ?>
        
        <h3>Feeding Habits</h3>
        <p>
          Vultures are scavengers, feeding primarily on carrion (dead animals).
          They have strong, hooked beaks that allow them to tear through tough
          hides and access the flesh of their prey. Vultures are known for their
          unique feeding behavior, where they use their keen eyesight to locate
          carrion from great distances. They often feed in groups, using
          cooperative techniques to find food.
          Vultures are also known for their ability to consume large quantities
          of carrion, which helps prevent the spread of disease in ecosystems.
          Their digestive systems are highly acidic, allowing them to safely
          consume decaying flesh without becoming ill.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Vultures are monogamous and often form long-term pair bonds. They build
          nests in cliffs, trees, or rocky outcrops. Key facts about vulture
          breeding include:<br />
          Females lay 1 to 3 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 45 to 60 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Vultures are known for their elaborate courtship displays, which often
          include vocalizations and synchronized movements. These displays help
          strengthen pair bonds and attract mates.

        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Vultures are highly social birds, often seen in large flocks. They are
          known for their:<br />
          Soaring behavior, which allows them to cover large distances in search
          of food<br />
          Unique vocalizations, which include hisses, grunts, and clicks that
          vary between species<br />
          Adaptations include:<br />
          Strong, hooked beaks for tearing through tough hides and accessing
          carrion<br />
          Excellent eyesight for locating carrion from great distances<br />
          They are also known for their unique behavior of "sunbathing," where
          they spread their wings to dry and warm themselves in the sun.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Vultures play a crucial role in their ecosystems as scavengers and
          indicators of environmental health. They help maintain the balance of
          ecosystems by consuming carrion and preventing the spread of disease.
          Their feeding activities also contribute to nutrient cycling in the
          soil, enhancing habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          Vultures are often called "nature's cleanup crew" due to their role in
          consuming carrion and preventing the spread of disease.<br />
          They have excellent eyesight, allowing them to spot carrion from
          several miles away.<br />
          Vultures are known for their unique feeding behavior, where they use
          their keen eyesight to locate carrion from great distances.<br />
          The Andean Condor is one of the largest flying birds in the world,
          with a wingspan of up to 10 feet (3 meters).<br />
          Vultures are often featured in mythology and folklore as symbols of
          death and rebirth.
        </p>
        <p>
          Vultures are also known for their unique social behavior, where they
          engage in grooming and play with each other. This helps strengthen
          pair bonds and maintain social cohesion within their groups.
        </p>

        <p></p>
        <button class="back-btn" onclick="hideInfo('Vulture')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Wood_pecker')">
        Wood pecker
      </button>
      <div id="Wood_pecker" class="info-section">
        <h2>Wood pecker</h2>
        <img src="list_image/Woodpecker.jpeg" alt="Woodpecker" />
        <p>Scientific Name: <b>Picidae</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          Woodpeckers are a family of birds known for their distinctive
          drumming behavior and unique adaptations for life in trees. They are
          found on every continent except Australia and Antarctica, playing
          crucial roles in their ecosystems as insectivores and indicators of
          forest health.
        </p>
        <h3>Types of Woodpeckers</h3>

        <p>
          There are about 240 species of woodpeckers, each adapted to different
          habitats and climates. Some of the most notable include:<br />
          Downy Woodpecker (Picoides pubescens) – known for its small size and
          distinctive black and white plumage.<br />
          Pileated Woodpecker (Dryocopus pileatus) – recognized by its large
          size and striking red crest.<br />
          Great Spotted Woodpecker (Dendrocopos major) – known for its black and
          white plumage and red underparts.<br />
          Each species has unique adaptations for feeding, nesting, and social
          behavior.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          Woodpeckers inhabit a variety of environments, including:<br />
          Forests, woodlands, and urban areas<br />
          They are found on every continent except Australia and Antarctica, with
          the highest diversity in North America and Europe. Woodpeckers prefer
          areas with abundant trees and dead wood for nesting and foraging. They
          are often seen perched on tree trunks or flying between branches.
        </p>

        <h3>Feeding Habits</h3>
        <p>
          Woodpeckers are primarily insectivorous, feeding on a diet that
          includes:<br />
          Insects, larvae, and spiders found in tree bark and wood<br />
          They have strong, chisel-like bills that allow them to drill into
          trees and access hidden prey. Woodpeckers are known for their unique
          drumming behavior, where they tap their bills against tree trunks to
          communicate and locate food. They often forage in pairs or small groups,
          using cooperative techniques to find food.
          Woodpeckers are also known for their ability to excavate cavities in
          trees for nesting and roosting. They use their strong bills to create
          holes in dead or decaying wood, which provides shelter and protection
          from predators.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          Woodpeckers are monogamous and often form long-term pair bonds. They
          excavate nests in tree cavities, typically in dead or decaying wood.
          Key facts about woodpecker breeding include:<br />
          Females lay 2 to 6 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 12 to 14 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Woodpeckers are known for their elaborate courtship displays, which
          often include drumming, vocalizations, and synchronized movements.          
          These displays help strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          Woodpeckers are highly social birds, often seen in pairs or small
          family groups. They are known for their:<br />
          Drumming behavior, which serves as a form of communication and
          territory establishment<br />
          Unique vocalizations, which include a variety of calls and songs that
          vary between species<br />
          Adaptations include:<br />
          Strong, chisel-like bills for drilling into trees and accessing hidden
          prey<br />
          Zygodactyl feet (two toes facing forward and two backward) for gripping
          tree trunks<br />
          They are also known for their unique behavior of "tail-fanning," where
          they spread their tail feathers to display during courtship or to
          intimidate rivals.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          Woodpeckers play a crucial role in their ecosystems as insectivores
          and indicators of forest health. They help maintain the balance of
          forest ecosystems by controlling insect populations and promoting plant
          growth. Their feeding activities also contribute to nutrient cycling
          in the soil, enhancing habitat health.
        </p>
        <h3>Fascinating Facts</h3>

        <p>
          Woodpeckers are known for their unique drumming behavior, which can be
          heard from great distances.<br />
          They have specialized adaptations that allow them to withstand the
          impact of their drumming without injuring themselves.<br />
          The Pileated Woodpecker is one of the largest woodpecker species and
          is known for its distinctive red crest.<br />
          Woodpeckers are often featured in folklore and mythology as symbols of
          perseverance and resilience.<br />
          They play a crucial role in their ecosystems as insectivores and
          indicators of forest health.
        </p>
        <p>
          Woodpeckers are also known for their unique social behavior, where they
          engage in grooming and play with each other. This helps strengthen
          pair bonds and maintain social cohesion within their groups.
        </p>
        <p></p>
        <button class="back-btn" onclick="hideInfo('Wood_pecker')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Yellowhammer')">
        Yellowhammer
      </button>

      <div id="Yellowhammer" class="info-section">
        <h2>Yellowhammer</h2>
        <img src="list_image/yellowhammer.jpeg" alt="yellowhammer" />
        <p>Scientific Name: <b>Emberiza citrinella</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          The Yellowhammer is a small, brightly colored bird native to Europe
          and parts of Asia. Known for its distinctive yellow plumage and
          melodious song, the Yellowhammer is a symbol of rural landscapes and
          plays crucial roles in its ecosystem as an insectivore and seed
          disperser.
        </p>
        <h3>Appearance</h3>
        <p>
          The Yellowhammer is a small bird, measuring about 6 to 7 inches (15
          to 18 cm) in length. It has a distinctive yellow body with a brown
          streaked back and wings. Its head is adorned with a bright yellow crown
          and a black eye stripe. The bill is short and conical, adapted for
          cracking seeds.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          The Yellowhammer inhabits a variety of environments, including:<br />
          Farmlands, grasslands, and hedgerows<br />
          It is primarily found in Europe and parts of Asia, from the British
          Isles to western Siberia. Yellowhammers prefer areas with open
          vegetation and abundant food sources for nesting and foraging. They are
          often seen perched on fences or low branches, singing their distinctive
          song.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          The Yellowhammer is primarily granivorous, feeding on a diet that
          includes:<br />
          Seeds, grains, and insects<br />
          It has a short, conical bill that allows it to crack open seeds and
          access hidden prey. Yellowhammers are known for their unique feeding
          behavior, where they forage in pairs or small groups, using cooperative
          techniques to find food. They often feed on the ground or in low
          vegetation, searching for seeds and insects.
          Yellowhammers are particularly fond of seeds from grasses and weeds,
          which are a key part of their diet. They also play an important role in
          seed dispersal, helping to maintain the health of their habitats.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          The Yellowhammer is monogamous and often forms long-term pair bonds.
          It builds nests in dense vegetation, typically in hedgerows or shrubs.
          Key facts about Yellowhammer breeding include:<br />
          Females lay 3 to 6 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 12 to 14 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          Yellowhammers are known for their elaborate courtship displays, which
          often include vocalizations and synchronized movements. These displays
          help strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          The Yellowhammer is a highly social bird, often seen in pairs or small
          family groups. It is known for its:<br />
          Melodious song, which varies between individuals and serves as a form
          of communication<br />
          Colorful plumage, which serves as camouflage in its rural habitat<br />
          Adaptations include:<br />
          Short, conical bill for cracking seeds and accessing hidden prey<br />
          Strong legs for perching and moving through low vegetation<br />
          It is also known for its unique behavior of "tail-fanning," where it
          spreads its tail feathers to display during courtship or to intimidate
          rivals.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          The Yellowhammer plays a crucial role in its ecosystem as an
          insectivore and seed disperser. It helps maintain the balance of rural
          ecosystems by controlling insect populations and promoting plant growth.
          Its feeding activities also contribute to nutrient cycling in the soil,
          enhancing habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          The Yellowhammer is often called "the countryside's songbird" due to
          its melodious song and association with rural landscapes.<br />
          It is known for its distinctive yellow plumage, which is most vibrant
          during the breeding season.<br />
          The Yellowhammer is a symbol of rural landscapes and is often featured
          in folklore and mythology.<br />
          It plays a crucial role in its ecosystem as an insectivore and seed
          disperser.<br />
          The Yellowhammer is known for its unique feeding behavior, where it
          forages in pairs or small groups, using cooperative techniques to find
          food.
        </p>
        <p>
          The Yellowhammer is also known for its unique social behavior, where it
          engages in grooming and play with other individuals. This helps
          strengthen pair bonds and maintain social cohesion within their groups.
        </p>
        <p>
          The Yellowhammer is also known for its unique vocalizations, which
          include a variety of calls and songs that vary between individuals.
          These vocalizations are used for communication and territory
          establishment.  
        </p>
        <p>
          The Yellowhammer is often seen in agricultural fields, where it feeds
          on seeds and insects. It is also known for its unique nesting behavior,
          where it builds nests in dense vegetation to protect its eggs and
          chicks from predators.  
        </p>
        <p>
          The Yellowhammer is a migratory bird, with some populations migrating
          to southern Europe and North Africa during the winter months. They are
          known for their unique migration patterns, which vary between
          individuals and populations.  
        </p>


        <p></p>
        <button class="back-btn" onclick="hideInfo('Yellowhammer')">← Back</button>
      </div>

      <button class="button" onclick="showInfo('Zapata_Rail')">
        Zapata Rail
      </button>

      <div id="Zapata_Rail" class="info-section">
        <h2>Zapata Rail</h2>
        <img src="list_image/zapata.jpeg" alt="Zapata Rail" />
        <p>Scientific Name: <b>Cygnus columbianus</b></p>
        <p>
          Type :
          <abbr
            title="Non-raptor birds are a diverse group that feed on seeds, fruits,fish, insects, or nectar"
            ><b>Non-raptor</b></abbr
          >
        </p>
        <p>
          The Zapata Rail is a small, flightless bird native to the wetlands of
          Cuba. Known for its striking plumage and unique adaptations for life
          in marshy habitats, the Zapata Rail is a symbol of the rich
          biodiversity of the region. It plays crucial roles in its ecosystem as
          an insectivore and indicator of wetland health.
        </p>
        <h3>Appearance</h3>
        <p>
          The Zapata Rail is a small bird, measuring about 7 to 8 inches (18 to
          20 cm) in length. It has a distinctive plumage with a brown body,
          white underparts, and a black crown. Its bill is short and straight,
          adapted for catching insects in the marshy vegetation.
        </p>
        <h3>Habitat and Distribution</h3>
        <p>
          The Zapata Rail inhabits wetlands, particularly in the Zapata Swamp
          region of Cuba. It prefers areas with dense vegetation and abundant
          insect populations for feeding. This bird is primarily found in marshes,
          swamps, and mangrove forests.
        </p>
        <h3>Feeding Habits</h3>
        <p>
          The Zapata Rail is an insectivore, feeding primarily on a diet of
          insects, spiders, and other small invertebrates. It uses its short,
          straight bill to catch prey in the dense vegetation of the wetlands.
          This bird is known for its unique hunting behavior, where it moves
          quietly through the underbrush, scanning for movement and pouncing on
          unsuspecting prey. The Zapata Rail is also known to forage in pairs or
          small groups, using cooperative techniques to find food.
          It often hunts by moving through the marshy vegetation, searching for
          insects and other small invertebrates. The Zapata Rail is also known
          for its unique feeding behavior, where it uses its bill to probe into
          the mud and water to find hidden prey. This behavior helps it access
          food sources that are not available to other birds.
        </p>
        <h3>Breeding and Nesting</h3>
        <p>
          The Zapata Rail is monogamous and often forms long-term pair bonds. It
          builds nests in dense vegetation, typically in marshes or swamps.
          Key facts about Zapata Rail breeding include:<br />
          Females lay 2 to 4 eggs, which are incubated by both parents.<br />
          The incubation period lasts about 14 to 16 days.<br />
          Chicks are altricial, meaning they are born helpless and require
          parental care.<br />
          Both parents care for the chicks, providing protection and food.<br />
          The Zapata Rail is known for its elaborate courtship displays, which
          often include vocalizations and synchronized movements. These displays
          help strengthen pair bonds and attract mates.
        </p>
        <h3>Behavior and Adaptations</h3>
        <p>
          The Zapata Rail is a solitary bird, often seen moving quietly through
          the wetlands. It is known for its:<br />
          Unique vocalizations, which include a variety of calls and songs that
          vary between individuals<br />
          Colorful plumage, which serves as camouflage in its marshy habitat<br />
          Adaptations include:<br />
          Short, straight bill for catching insects in dense vegetation<br />
          Strong legs for moving through marshy terrain<br />
          It is also known for its unique behavior of "tail-fanning," where it
          spreads its tail feathers to display during courtship or to intimidate
          rivals.
        </p>
        <h3>Niche and Ecological Role</h3>
        <p>
          The Zapata Rail plays a crucial role in its ecosystem as an insectivore
          and indicator of wetland health. It helps maintain the balance of
          wetland ecosystems by controlling insect populations and promoting plant
          growth. Its feeding activities also contribute to nutrient cycling in
          the soil, enhancing habitat health.
        </p>
        <h3>Fascinating Facts</h3>
        <p>
          The Zapata Rail is endemic to Cuba, making it a unique species with
          limited distribution.<br />
          It is known for its striking plumage and unique adaptations for life
          in wetlands.<br />
          The Zapata Rail is often considered a symbol of the rich biodiversity
          of the Zapata Swamp region.<br />
          It plays a crucial role in its ecosystem as an insectivore and
          indicator of wetland health.<br />
          The Zapata Rail is known for its unique hunting behavior, where it
          moves quietly through the underbrush, scanning for movement and
          pouncing on unsuspecting prey.
        </p>
        <p>
          The Zapata Rail is also known for its unique social behavior, where it
          engages in grooming and play with other individuals. This helps
          strengthen pair bonds and maintain social cohesion within their groups.
        </p>
        <p>
          The Zapata Rail is also known for its unique vocalizations, which
          include a variety of calls and songs that vary between individuals.
          These vocalizations are used for communication and territory
          establishment.
        </p>  
        <p>
          The Zapata Rail is often seen in marshes and swamps, where it feeds on
          insects and other small invertebrates. It is also known for its unique
          nesting behavior, where it builds nests in dense vegetation to protect
          its eggs and chicks from predators.
        </p>
        <p>
          The Zapata Rail is a migratory bird, with some populations migrating
          to other wetlands during the dry season. They are known for their unique
          migration patterns, which vary between individuals and populations.
        </p>
        <p>
          The Zapata Rail is also known for its unique adaptations for life in
          wetlands, including its short, straight bill and strong legs. These
          adaptations allow it to move easily through marshy terrain and access
          hidden prey.
        </p>
        <p>
          The Zapata Rail is also known for its unique feeding behavior, where it
          uses its bill to probe into the mud and water to find hidden prey. This
          behavior helps it access food sources that are not available to other
          birds.
        </p>
        <p>
          The Zapata Rail is also known for its unique nesting behavior, where it
          builds nests in dense vegetation to protect its eggs and chicks from
          predators. This behavior helps ensure the survival of its young in a
          challenging environment.  
        </p>

        <p></p>
        <button class="back-btn" onclick="hideInfo('Zapata_Rail')">← Back</button>
      </div>
    </main>

    <footer>
      <p>© 2025 Animal Atlas | Group 6A Project</p>
    </footer>

    <script src="bird.js"></script>
  </body>
</html>