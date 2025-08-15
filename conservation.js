// Conservation Page JavaScript - Enhanced Read More Functionality

// Enhanced Read More/Read Less functionality for conservation species cards
document.addEventListener('DOMContentLoaded', function() {
    // Handle all readmore blocks
    const readMoreBlocks = document.querySelectorAll('.readmore-block');
    
    readMoreBlocks.forEach(block => {
        const readMoreToggle = block.querySelector('.read-more-toggle');
        const readMoreContent = block.querySelector('.read-more');
        
        if (readMoreToggle && readMoreContent) {
            // Initially hide the read more content
            readMoreContent.style.display = 'none';
            
            // Handle "Read More/Read Less" button click
            readMoreToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation(); // Prevent modal from opening when clicking read more
                
                if (readMoreContent.style.display === 'none') {
                    // Show the content with smooth animation
                    readMoreContent.style.display = 'block';
                    readMoreContent.style.opacity = '0';
                    readMoreContent.style.maxHeight = '0';
                    readMoreContent.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                    
                    // Smooth expand animation
                    setTimeout(() => {
                        readMoreContent.style.opacity = '1';
                        readMoreContent.style.maxHeight = '500px';
                    }, 10);
                    
                    // Update button text
                    readMoreToggle.textContent = 'Read Less';
                    readMoreToggle.classList.add('expanded');
                    
                    // Add visual feedback to the card
                    block.classList.add('expanded');
                    
                } else {
                    // Hide the content with smooth animation
                    readMoreContent.style.opacity = '0';
                    readMoreContent.style.maxHeight = '0';
                    readMoreContent.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                    
                    setTimeout(() => {
                        readMoreContent.style.display = 'none';
                        readMoreToggle.textContent = 'Read More';
                        readMoreToggle.classList.remove('expanded');
                        block.classList.remove('expanded');
                    }, 400);
                }
            });
        }
    });
    
    // Enhanced Modal functionality for species cards
    const speciesItems = document.querySelectorAll('.species-item');
    const modal = document.getElementById('card-modal');
    const modalBody = document.getElementById('card-modal-body');
    const modalClose = document.querySelector('.card-modal-close');
    
    if (modal && modalBody && modalClose) {
        // Add click events to species cards
        speciesItems.forEach(card => {
            card.addEventListener('click', function(e) {
                // Prevent modal if clicking read-more toggle
                if (e.target.classList.contains('read-more-toggle')) return;
                
                // Clone the card content for modal
                const clone = card.cloneNode(true);
                
                // Show all read-more content in modal and hide toggle
                const readMoreInModal = clone.querySelector('.read-more');
                const toggleInModal = clone.querySelector('.read-more-toggle');
                
                if (readMoreInModal) {
                    readMoreInModal.style.display = 'block';
                    readMoreInModal.style.opacity = '1';
                    readMoreInModal.style.maxHeight = 'none';
                }
                if (toggleInModal) {
                    toggleInModal.style.display = 'none';
                }
                
                // Clear modal and add content
                modalBody.innerHTML = '';
                modalBody.appendChild(clone);
                
                // Show modal with animation
                modal.style.display = 'flex';
                modal.style.opacity = '0';
                setTimeout(() => {
                    modal.style.opacity = '1';
                }, 10);
            });
        });
        
        // Close modal functionality
        modalClose.addEventListener('click', closeModal);
        
        // Close modal when clicking outside content
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.style.display === 'flex') {
                closeModal();
            }
        });
    }
    
    function closeModal() {
        if (modal) {
            modal.style.opacity = '0';
            setTimeout(() => {
                modal.style.display = 'none';
            }, 200);
        }
    }
    
    // Smooth scroll behavior for better user experience
    document.querySelectorAll('.read-more-toggle').forEach(button => {
        button.addEventListener('click', function() {
            // Smooth scroll to the section after animation
            setTimeout(() => {
                this.closest('.species-item').scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }, 200);
        });
    });
    
    // Add hover effects for species cards
    speciesItems.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px) scale(1.02)';
            this.style.boxShadow = '0 8px 25px rgba(0, 112, 74, 0.15)';
            this.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        });
        
        card.addEventListener('mouseleave', function() {
            if (!this.classList.contains('expanded')) {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '0 2px 5px rgba(0,0,0,0.05)';
            }
        });
    });
    
    // Add loading animation for images
    const speciesImages = document.querySelectorAll('.species-item img');
    speciesImages.forEach(img => {
        img.addEventListener('load', function() {
            this.style.opacity = '0';
            this.style.transition = 'opacity 0.5s ease-in-out';
            setTimeout(() => {
                this.style.opacity = '1';
            }, 100);
        });
    });
    
    console.log('Conservation page JavaScript loaded successfully!');
});

// Additional utility functions for conservation features
function highlightEndangeredSpecies() {
    const endangeredKeywords = ['endangered', 'critically endangered', 'extinct'];
    const speciesCards = document.querySelectorAll('.species-item');
    
    speciesCards.forEach(card => {
        const text = card.textContent.toLowerCase();
        const hasEndangeredStatus = endangeredKeywords.some(keyword => text.includes(keyword));
        
        if (hasEndangeredStatus) {
            card.classList.add('endangered-highlight');
        }
    });
}

// Call highlight function after DOM is loaded
document.addEventListener('DOMContentLoaded', highlightEndangeredSpecies);