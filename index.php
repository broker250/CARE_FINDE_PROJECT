<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <!-- Hero Section -->
    <div class="text-center mb-5">
        <h1 class="display-4">Welcome to CareFinder</h1>
        <p class="lead">Your trusted platform for finding and reporting lost items.</p>
        <p>Whether you've lost something or found an item, we're here to help!</p>
    </div>
    
    <!-- Action Cards -->
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4 shadow-sm"> <!-- Added shadow for better visual appeal -->
                <div class="card-body text-center">
                    <h5 class="card-title">Lost Something?</h5>
                    <p class="card-text">Report your lost item and let others help you find it.</p>
                    <a href="lost.php" class="btn btn-primary btn-lg">Report Lost Item</a> <!-- Larger button for better visibility -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 shadow-sm"> <!-- Added shadow for better visual appeal -->
                <div class="card-body text-center">
                    <h5 class="card-title">Found Something?</h5>
                    <p class="card-text">Let us know what you found, and we'll help return it to its owner.</p>
                    <a href="found.php" class="btn btn-success btn-lg">Report Found Item</a> <!-- Larger button for better visibility -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="testimonials-section py-5 bg-light"> <!-- Added a light background for contrast -->
    <div class="container">
        <h2 class="text-center mb-5">What Our Users Say</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-item p-4 text-center bg-white rounded shadow-sm"> <!-- Added shadow and rounded corners -->
                    <img src="images/user1.jpg" alt="User 1" class="rounded-circle mb-3" width="100"> <!-- Smaller image for better proportion -->
                    <p class="font-italic">"CareFinder helped me find my lost wallet within days. Highly recommended!"</p>
                    <h5 class="mt-3">Bella and Timothy</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-item p-4 text-center bg-white rounded shadow-sm"> <!-- Added shadow and rounded corners -->
                    <img src="images/user2.jpg" alt="User 2" class="rounded-circle mb-3" width="100"> <!-- Smaller image for better proportion -->
                    <p class="font-italic">"I found a lost phone and was able to return it to its owner thanks to CareFinder."</p>
                    <h5 class="mt-3">Rena</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-item p-4 text-center bg-white rounded shadow-sm"> <!-- Added shadow and rounded corners -->
                    <img src="images/user3.jpg" alt="User 3" class="rounded-circle mb-3" width="100"> <!-- Smaller image for better proportion -->
                    <p class="font-italic">"The platform is easy to use, and the support team is very helpful."</p>
                    <h5 class="mt-3">Jeremiah</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call-to-Action Section -->
<div class="cta-section py-5 bg-primary text-white"> <!-- Added a CTA section for better engagement -->
    <div class="container text-center">
        <h2 class="mb-4">Ready to Get Started?</h2>
        <p class="lead mb-4">Join thousands of users who have found or returned lost items with CareFinder.</p>
        <a href="lost.php" class="btn btn-light btn-lg mr-3">Report Lost Item</a> <!-- Light button for contrast -->
        <a href="found.php" class="btn btn-outline-light btn-lg">Report Found Item</a> <!-- Outlined button for variety -->
    </div>
</div>

<?php include 'includes/footer.php'; ?>