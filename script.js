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


// Animal gallery fade-in/fade-out 3-grid slideshow
window.addEventListener('DOMContentLoaded', function() {
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
    const galleryContainer = document.querySelector('.gallery-images');
    if (!galleryContainer) return;
    let startIndex = 0;
    const visibleCount = 1;

    function showGalleryImages(direction = 1) {
        // Carousel: show only one image at a time, wrapping around
        const oldWrapper = galleryContainer.querySelector('.swipe-wrapper');
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

        let imgIndex = (startIndex) % galleryImages.length;
        if (imgIndex < 0) imgIndex += galleryImages.length;
        const img = document.createElement('img');
        img.src = galleryImages[imgIndex];
        img.alt = galleryImages[imgIndex].split('/').pop().replace('.jpg', '');
        img.style.width = '500px';
        img.style.height = '320px';
        img.style.objectFit = 'cover';
        img.style.borderRadius = '8px';
        img.style.margin = '0 8px';
        newWrapper.appendChild(img);
        galleryContainer.style.position = 'relative';
        galleryContainer.appendChild(newWrapper);
        // Animate swipe
        setTimeout(() => {
            newWrapper.style.left = '0';
            if (oldWrapper) {
                oldWrapper.style.left = direction > 0 ? '-100%' : '100%';
                oldWrapper.style.transition = 'left 0.7s cubic-bezier(0.4, 0, 0.2, 1)';
            }
        }, 10);
        // Remove old after animation
        setTimeout(() => {
            if (oldWrapper) galleryContainer.removeChild(oldWrapper);
        }, 700);
    }
    // Initial show
    galleryContainer.innerHTML = '';
    showGalleryImages(1);

    // Navigation buttons
    const prevBtn = document.querySelector('.gallery-prev');
    const nextBtn = document.querySelector('.gallery-next');
    let autoSlide = setInterval(() => {
        startIndex = (startIndex + 1) % galleryImages.length;
        showGalleryImages(1);
    }, 5000);

    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
            clearInterval(autoSlide);
            startIndex = (startIndex - 1 + galleryImages.length) % galleryImages.length;
            showGalleryImages(-1);
            autoSlide = setInterval(() => {
                startIndex = (startIndex + 1) % galleryImages.length;
                showGalleryImages(1);
            }, 5000);
        });
        nextBtn.addEventListener('click', () => {
            clearInterval(autoSlide);
            startIndex = (startIndex + 1) % galleryImages.length;
            showGalleryImages(1);
            autoSlide = setInterval(() => {
                startIndex = (startIndex + 1) % galleryImages.length;
                showGalleryImages(1);
            }, 5000);
        });
    }
});
    