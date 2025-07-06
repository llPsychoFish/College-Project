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
    "A hummingbird weighs less than a penny!",
    "OOPs!, Try again.",
    "Spitting cobras can spit venom up to 6 feet away.",
    "A group of owls is called a 'parliament'.",
];

function generateFact() {
    const randomFact = facts[Math.floor(Math.random() * facts.length)];
    document.getElementById("fact-text").textContent = randomFact;
}

// Dynamic descriptions for animal cards
const animalDescriptions = [
    [
        "Dingoes are highly adaptable and can thrive in various environments, including deserts, grasslands, and forests.",
        "Dingoes are Australia's largest land predator.",
        "Dingoes communicate using a variety of vocalizations, including howls, growls, and barks."
    ],
    [
        "Tropical rainforests are dense, warm, and wet forests that are home to a diverse array of plant and animal species.",
        "Rainforests produce more than 20% of the world's oxygen supply.",
        "Over half of the world's plant and animal species live in tropical rainforests."
    ],
    [
        "Okapis are elusive forest animals native to the Democratic Republic of the Congo and are threatened by habitat loss.",
        "Okapis are the only living relative of the giraffe.",
        "Okapis have long, blue tongues that help them strip leaves from branches."
    ]
];

function setRandomDescriptions() {
    const descs = document.querySelectorAll('.card-desc');
    descs.forEach((desc, i) => {
        const options = animalDescriptions[i];
        if (options) {
            desc.textContent = options[Math.floor(Math.random() * options.length)];
        }
    });
}

// Set random descriptions on page load
window.addEventListener('DOMContentLoaded', setRandomDescriptions);

// Gallery image rotation with fade effect
window.addEventListener('DOMContentLoaded', function() {
    const galleryImages = [
        'images/lion.jpg',
        'images/giraffe.jpg',
        'images/koala.jpg',
        'images/penguin.jpg',
        'images/tiger.jpg',
        'images/elephant.jpg'
    ];
    const galleryContainer = document.querySelector('.gallery-images');
    if (!galleryContainer) return;
    let startIndex = 0;
    const visibleCount = 3; // Number of images to show at once

    function showGalleryImages() {
        galleryContainer.classList.remove('show');
        galleryContainer.classList.add('fade');
        setTimeout(() => {
            galleryContainer.innerHTML = '';
            for (let i = 0; i < visibleCount; i++) {
                const imgIndex = (startIndex + i) % galleryImages.length;
                const img = document.createElement('img');
                img.src = galleryImages[imgIndex];
                img.alt = galleryImages[imgIndex].split('/').pop().replace('.jpg', '');
                galleryContainer.appendChild(img);
            }
            galleryContainer.classList.remove('fade');
            galleryContainer.classList.add('show');
        }, 1200); // Match the CSS transition duration (1.2s)
    }

    // Initial show
    galleryContainer.classList.add('show');
    showGalleryImages();
    setInterval(() => {
        startIndex = (startIndex + 1) % galleryImages.length;
        showGalleryImages();
    }, 3500); // Change images every 3.5 seconds
});