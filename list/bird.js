function showInfo(id) {
    document.getElementById(id).style.display = 'block';
  }
  function hideInfo(id) {
    document.getElementById(id).style.display = 'none';
  }

  document.querySelectorAll('.readmore-block').forEach(function(block) {
    var toggle = block.querySelector('.read-more-toggle');
    var more = block.querySelector('.read-more');
    if (toggle && more) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            if (more.classList.contains('show')) {
                more.classList.remove('show');
                setTimeout(function() {
                    more.style.display = 'none';
                }, 300); // Wait for animation to complete
                toggle.textContent = 'Read More';
                toggle.setAttribute('aria-expanded', 'false');
            } else {
                more.style.display = 'block';
                setTimeout(function() {
                    more.classList.add('show');
                }, 10); // Small delay to trigger animation
                toggle.textContent = 'Read Less';
                toggle.setAttribute('aria-expanded', 'true');
            }
        });
        
        // Set initial aria attributes for accessibility
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('role', 'button');
        toggle.setAttribute('tabindex', '0');
        
        // Add keyboard support
        toggle.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                toggle.click();
            }
        });
    }
});