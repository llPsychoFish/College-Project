// Animal Data (for facts and details)
const animals = {
    tiger: {
        name: "Tiger",
        fact: "A tiger's stripes are like fingerprints—no two are alike!"
    },
    elephant: {
        name: "Elephant",
        fact: "Elephants can recognize themselves in a mirror—a sign of self-awareness!"
    },
    penguin: {
        name: "Penguin",
        fact: "Penguins propose to their mates with a pebble!"
    }
};

// Show animal details (could expand this later)
function showAnimal(animal) {
    const animalData = animals[animal];
    alert(`You clicked on ${animalData.name}! Fun fact: ${animalData.fact}`);
}

// Random fact generator
const facts = [
    "A group of flamingos is called a 'flamboyance'.",
    "Octopuses have three hearts and blue blood.",
    "Cows have best friends and get stressed when separated.",
    "A hummingbird weighs less than a penny!"
];

function generateFact() {
    const randomFact = facts[Math.floor(Math.random() * facts.length)];
    document.getElementById("fact-text").textContent = randomFact;
}