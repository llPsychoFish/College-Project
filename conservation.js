document.querySelectorAll('.readmore-block').forEach(function(block) {
    var toggle = block.querySelector('.read-more-toggle');
    var more = block.querySelector('.read-more');
    if (toggle && more) {
        toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            if (more.style.display === 'block') {
                more.style.display = 'none';
                toggle.textContent = 'Read More';
            } else {
                more.style.display = 'block';
                toggle.textContent = 'Read Less';
            }
        });
    }
});

// Modal pop-up for species cards
document.querySelectorAll('.species-item').forEach(function(card) {
    card.addEventListener('click', function(e) {
        // Prevent modal if clicking read-more toggle
        if (e.target.classList.contains('read-more-toggle')) return;

        var modal = document.getElementById('card-modal');
        var modalBody = document.getElementById('card-modal-body');
        // Clone the card content (excluding the read-more-toggle for a cleaner modal)
        var clone = card.cloneNode(true);
        // Remove toggle and read-more in modal if you want, or keep for full info
        // Optionally, show all info in modal
        var readMore = clone.querySelector('.read-more');
        if (readMore) readMore.style.display = 'block';
        var toggle = clone.querySelector('.read-more-toggle');
        if (toggle) toggle.style.display = 'none';

        modalBody.innerHTML = '';
        modalBody.appendChild(clone);
        modal.style.display = 'flex';
    });
});

// Close modal
document.querySelector('.card-modal-close').onclick = function() {
    document.getElementById('card-modal').style.display = 'none';
};
// Close modal when clicking outside content
document.getElementById('card-modal').onclick = function(e) {
    if (e.target === this) this.style.display = 'none';
};