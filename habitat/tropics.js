let slideindex=0;
            const slide=document.querySelectorAll('.slideshow img');

            function showNextSlide(){
                slides[slideindex].classlist.remove('active');
                slideindex=(slideindex + 1)% slides.length;
                slide[slideindex].classlist.add('active');
            }

            setInterval(showNextSlide, 4000);
