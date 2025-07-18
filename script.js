// Show animal details (could expand this later)
function showAnimal(animal) {
    // Retrieve animal data from the animals object using the key 'animal'
    const animalData = animals[animal];
    // Show an alert with the animal's name and a fun fact
    alert(`You clicked on ${animalData.name}! Fun fact: ${animalData.fact}`);
}

// Random fact generator
const facts = [
    "A group of flamingos is called a 'flamboyance'.", // Fun fact 1
    "Octopuses have three hearts and blue blood.",     // Fun fact 2
    "Cows have best friends and get stressed when separated.", // Fun fact 3
    "A hummingbird weighs less than a penny!",         // Fun fact 4
    "OOPs!, Try again.",                               // Fun fact 5 (joke/placeholder)
    "Spitting cobras can spit venom up to 6 feet away.", // Fun fact 6
    "A group of owls is called a 'parliament'.",       // Fun fact 7
];

// Function to generate and display a random fact
function generateFact() {
    // Select a random fact from the facts array
    const randomFact = facts[Math.floor(Math.random() * facts.length)];
    // Set the text content of the element with id 'fact-text' to the random fact
    document.getElementById("fact-text").textContent = randomFact;
}

// Dynamic descriptions for animal cards
const animalDescriptions = [
    [ // Descriptions for animal 1 (e.g., Dingo)
        "Dingoes are highly adaptable and can thrive in various environments, including deserts, grasslands, and forests.",
        "Dingoes are Australia's largest land predator.",
        "Dingoes communicate using a variety of vocalizations, including howls, growls, and barks."
    ],
    [ // Descriptions for animal 2 (e.g., Rainforest)
        "Tropical rainforests are dense, warm, and wet forests that are home to a diverse array of plant and animal species.",
        "Rainforests produce more than 20% of the world's oxygen supply.",
        "Over half of the world's plant and animal species live in tropical rainforests."
    ],
    [ // Descriptions for animal 3 (e.g., Okapi)
        "Okapis are elusive forest animals native to the Democratic Republic of the Congo and are threatened by habitat loss.",
        "Okapis are the only living relative of the giraffe.",
        "Okapis have long, blue tongues that help them strip leaves from branches."
    ]
];

// Function to set random descriptions for elements with class 'card-desc'
function setRandomDescriptions() {
    // Select all elements with class 'card-desc'
    const descs = document.querySelectorAll('.card-desc');
    // For each description element
    descs.forEach((desc, i) => {
        // Get the array of possible descriptions for this animal
        const options = animalDescriptions[i];
        if (options) {
            // Set the text to a random description from the array
            desc.textContent = options[Math.floor(Math.random() * options.length)];
        }
    });
}

// Set random descriptions on page load
window.addEventListener('DOMContentLoaded', setRandomDescriptions);


// Animal gallery fade-in/fade-out grid slideshow
window.addEventListener('DOMContentLoaded', function() {
    // Array of image paths for the gallery
    const galleryImages = [
        'gallery/lion.jpg',
        'gallery/giraffe.jpg',
        'gallery/koala.jpg',
        'gallery/poison_dart_frog.jpg',
        'gallery/emerald_tree_boa.jpg',
        'gallery/scarlet_macaw.jpg',
        'gallery/platypus.jpg',
        'gallery/hammerhead_shark.jpg',
    ];
    // Select the gallery container element
    const galleryContainer = document.querySelector('.gallery-images');
    // If gallery container is not found, exit
    if (!galleryContainer) return;
    // Index of the first image to display
    let startIndex = 0;
    // Number of images visible at once (set to 1)
    const visibleCount = 1;

    // Function to show gallery images with swipe animation
    function showGalleryImages(direction = 1) {
        // Find the current wrapper of images
        const oldWrapper = galleryContainer.querySelector('.swipe-wrapper');
        // Create a new wrapper for the new image
        const newWrapper = document.createElement('div');
        newWrapper.className = 'swipe-wrapper';
        newWrapper.style.display = 'flex';
        newWrapper.style.justifyContent = 'center';
        newWrapper.style.alignItems = 'center';
        newWrapper.style.position = 'absolute';
        newWrapper.style.left = direction > 0 ? '100%' : '-100%';
        newWrapper.style.top = '0';
        newWrapper.style.width = '100%';
        newWrapper.style.transition = 'left 0.7s cubic-bezier(0.4, 0, 0.2, 1)';

        // Calculate the index of the image to show
        let imgIndex = (startIndex) % galleryImages.length;
        if (imgIndex < 0) imgIndex += galleryImages.length;
        // Create the image element
        const img = document.createElement('img');
        img.src = galleryImages[imgIndex];
        img.alt = galleryImages[imgIndex].split('/').pop().replace('.jpg', '');
        img.style.width = '500px';
        img.style.height = '320px';
        img.style.objectFit = 'cover';
        img.style.borderRadius = '8px';
        img.style.margin = '0 8px';
        // Add the image to the new wrapper
        newWrapper.appendChild(img);
        // Set the gallery container's position to relative
        galleryContainer.style.position = 'relative';
        // Add the new wrapper to the gallery container
        galleryContainer.appendChild(newWrapper);
        // Animate the swipe by moving the new wrapper into view
        setTimeout(() => {
            newWrapper.style.left = '0';
            if (oldWrapper) {
                oldWrapper.style.left = direction > 0 ? '-100%' : '100%';
                oldWrapper.style.transition = 'left 0.7s cubic-bezier(0.4, 0, 0.2, 1)';
            }
        }, 10);
        // Remove the old wrapper after the animation completes
        setTimeout(() => {
            if (oldWrapper) galleryContainer.removeChild(oldWrapper);
        }, 700);
    }
    // Clear the gallery container and show the initial image
    galleryContainer.innerHTML = '';
    showGalleryImages(1);

    // Select navigation buttons for previous and next
    const prevBtn = document.querySelector('.gallery-prev');
    const nextBtn = document.querySelector('.gallery-next');
    // Set up automatic slideshow interval
    let autoSlide = setInterval(() => {
        startIndex = (startIndex + 1) % galleryImages.length;
        showGalleryImages(1);
    }, 5000);

    // Add click event listeners for navigation buttons
    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
            // Stop automatic slideshow
            clearInterval(autoSlide);
            // Move to previous image
            startIndex = (startIndex - 1 + galleryImages.length) % galleryImages.length;
            showGalleryImages(-1);
            // Restart automatic slideshow
            autoSlide = setInterval(() => {
                startIndex = (startIndex + 1) % galleryImages.length;
                showGalleryImages(1);
            }, 5000);
        });
        nextBtn.addEventListener('click', () => {
            // Stop automatic slideshow
            clearInterval(autoSlide);
            // Move to next image
            startIndex = (startIndex + 1) % galleryImages.length;
            showGalleryImages(1);
            // Restart automatic slideshow
            autoSlide = setInterval(() => {
                startIndex = (startIndex + 1) % galleryImages.length;
                showGalleryImages(1);
            }, 5000);
        });
    }
});
