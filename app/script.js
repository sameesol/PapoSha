// Add event listener to images
const images = document.querySelectorAll('.gallery img');

images.forEach((image) => {
    image.addEventListener('click', () => {
        // Create a modal window to display the image
        const modal = document.createElement('div');
        modal.classList.add('modal');
        modal.innerHTML = `
            <img src="${image.src}" alt="${image.alt}">
            <span class="close">&times;</span>
        `;
        document.body.appendChild(modal);

        // Add event listener to close the modal
        const close = document.querySelector('.close');
        close.addEventListener('click', () => {
            modal.remove();
        });
    });
});

//ggf
document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent form submission

    let isValid = true;
    let username = document.getElementById('username');
    let email = document.getElementById('email');
    let password = document.getElementById('password');
    let message = document.getElementById('message');

    // Reset validation states
    username.classList.remove('invalid');
    email.classList.remove('invalid');
    password.classList.remove('invalid');

    // Check if all fields are valid
    if (username.value.trim() === '') {
        username.classList.add('invalid');
        isValid = false;
    }

    if (email.value.trim() === '' || !validateEmail(email.value.trim())) {
        email.classList.add('invalid');
        isValid = false;
    }

    if (password.value.trim() === '') {
        password.classList.add('invalid');
        isValid = false;
    }

    // Display success message if valid
    if (isValid) {
        message.style.color = "green";
        message.style.visibility = "visible";
        message.textContent = "Form submitted successfully!";
    } else {
        message.style.color = "red";
        message.style.visibility = "visible";
        message.textContent = "Please fill out all fields correctly!";
    }
});

// Simple email validation
function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}
//services

function refreshPage() {
    // Here, you can add logic to refresh the page's affected services if needed (e.g., fetch from a server or API).
    alert('Information refreshed. Please check for the latest updates!');
}
//gallery
// Function to open the modal
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = "flex";
}

// Function to close the modal
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = "none";
}

// Close modal when clicking on the close button
document.querySelectorAll('.close-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const modal = btn.closest('.modal');
        modal.style.display = 'none';
    });
});

