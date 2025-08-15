// Show/Hide information sections for animal details
function showInfo(infoId) {
    // Hide all info sections first
    const allInfoSections = document.querySelectorAll('.info-section');
    allInfoSections.forEach(section => {
        section.style.display = 'none';
    });
    
    // Show the selected info section
    const selectedSection = document.getElementById(infoId);
    if (selectedSection) {
        selectedSection.style.display = 'block';
    }
}

function hideInfo(infoId) {
    const section = document.getElementById(infoId);
    if (section) {
        section.style.display = 'none';
    }
}

// Enhanced Read More/Read Less functionality for multiple sections
document.addEventListener('DOMContentLoaded', function() {
    // Handle all readmore blocks
    const readMoreBlocks = document.querySelectorAll('.readmore-block');
    
    readMoreBlocks.forEach(block => {
        const readMoreToggle = block.querySelector('.read-more-toggle');
        const readMoreContent = block.querySelector('.read-more');
        const readLessToggle = readMoreContent ? readMoreContent.querySelector('.read-more-toggle') : null;
        
        if (readMoreToggle && readMoreContent) {
            // Initially hide the read more content
            readMoreContent.style.display = 'none';
            
            // Handle "Read More" button click
            readMoreToggle.addEventListener('click', function(e) {
                e.preventDefault();
                if (readMoreContent.style.display === 'none') {
                    // Show the content with smooth animation
                    readMoreContent.style.display = 'block';
                    readMoreContent.style.opacity = '0';
                    readMoreContent.style.transition = 'opacity 0.3s ease-in-out';
                    
                    // Smooth fade in
                    setTimeout(() => {
                        readMoreContent.style.opacity = '1';
                    }, 10);
                    
                    // Hide the "Read More" button
                    readMoreToggle.style.display = 'none';
                }
            });
            
            // Handle "Read Less" button click (inside the expanded content)
            if (readLessToggle) {
                readLessToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Smooth fade out
                    readMoreContent.style.opacity = '0';
                    readMoreContent.style.transition = 'opacity 0.3s ease-in-out';
                    
                    setTimeout(() => {
                        readMoreContent.style.display = 'none';
                        readMoreToggle.style.display = 'inline-block';
                    }, 300);
                });
            }
        }
    });
    
    // Add smooth scroll behavior for better user experience
    document.querySelectorAll('.read-more-toggle').forEach(button => {
        button.addEventListener('click', function() {
            // Smooth scroll to the section after a short delay
            setTimeout(() => {
                this.closest('.readmore-block').scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest'
                });
            }, 100);
        });
    });
});
