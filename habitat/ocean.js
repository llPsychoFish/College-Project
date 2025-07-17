
           document.addEventListener("DOMContentLoaded",function(){
           const slides=document.getElementById("slides");
            const totalSlides= slides.children.length;
            let index=0;
            

            function showSlide(i){
                index = (i + totalSlides) % totalSlides;
                slides.style.transform= `translatex(-${index * 100}%)`;
            }
            function nextslide(){
                showSlide(index + 1);
            }
            function prevslide(){
                showSlide(index - 1);
            }

            // Auto slide every 4 seconds
            setInterval(() =>{
                nextslide();
            },4000);
            console.log("Carousel script running");

        }) 
