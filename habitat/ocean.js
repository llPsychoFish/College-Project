
           document.addEventListener("DOMContentLoaded",function(){
    const slides = document.getElementById("slides");
    const totalSlides = slides.children.length;
    let index = 0;

    function showSlide(i) {
        index = (i + totalSlides) % totalSlides;
        slides.style.transform = `translateX(-${index * 100}%)`;
    }
    
    // Make these functions global so they can be called from HTML onclick
    window.nextslide = function() {
        showSlide(index + 1);
    }
    
    window.preslide = function() {
        showSlide(index - 1);
    }

    // Auto slide every 4 seconds
    setInterval(() => {
        window.nextslide();
    }, 4000);

    // Initialize first slide
    showSlide(index);

    console.log("Carousel script running");
});

function openModal(data) {
          var modal = document.getElementById('lightboxModal');
          var modalContent = modal.querySelector('.modal-content');
          var modalImage = document.getElementById('modalImage');
          var modalTitle = document.getElementById('modalTitle');
          var modalBody = document.getElementById('modalBody');
          
          // Reset modal content
          modalContent.classList.remove('image-only');
          modalImage.style.display = 'none';
          modalTitle.style.display = 'none';
          modalBody.style.display = 'none';
          
          // Show image if provided
          if (data.image) {
            modalImage.src = data.image;
            modalImage.style.display = 'block';
          }
          
          // Show title if provided
          if (data.title) {
            modalTitle.textContent = data.title;
            modalTitle.style.display = 'block';
          }
          
          // Show info/body text if provided
          if (data.info) {
            modalBody.textContent = data.info;
            modalBody.style.display = 'block';
          }
          
          // Only apply image-only class if there's an image but no title AND no info
          if (data.image && !data.title && !data.info) {
            modalContent.classList.add('image-only');
          }
          
          modal.style.display = 'flex';
        }
        
        function closeModal() {
          document.getElementById('lightboxModal').style.display = 'none';
        }
        
        document.addEventListener('click', function(e) {
          var modal = document.getElementById('lightboxModal');
          if (modal.style.display === 'flex' && e.target === modal) {
            closeModal();
          }
        });