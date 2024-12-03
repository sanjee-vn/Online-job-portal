// Add an event listener for the button click
button.addEventListener('click', function () {
    // Check if the hidden content is currently displayed or not
    if (moreInfo.style.display === 'none') {
        moreInfo.style.display = 'block'; // Show hidden content
        button.textContent = 'Show Less'; 
    } else {
        moreInfo.style.display = 'none'; 
        button.textContent = 'Show More'; 
    }
});

// Array of images for the slideshow
const images = ['images/aboutus.jpg', 'images/1.jpeg', 'images/2.jpg'];
let currentIndex = 0;  // Start from the first image
const carouselImage = document.getElementById('carouselImage');

// Function to change the image
function changeImage() {
    currentIndex = (currentIndex + 1) % images.length;  // Go to the next image, loop back to first image
    carouselImage.src = images[currentIndex];  
}

// automatically change the image every 3 seconds 
setInterval(changeImage, 3000);
