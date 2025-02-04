<?php
include 'includes/header.php';
include 'includes/functions.php'; // Include the functions file

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    redirect('login.php'); // Redirect to login if not logged in
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'includes/db.php';
    $item_name = sanitizeInput($_POST['item_name']);
    $description = sanitizeInput($_POST['description']);
    $location = sanitizeInput($_POST['location']);
    $found_date = sanitizeInput($_POST['found_date']);
    $user_id = $_SESSION['user_id']; // Get the logged-in user's ID

    // Insert the found item into the database
    $stmt = $conn->prepare("INSERT INTO found_items (user_id, item_name, description, location, found_date) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$user_id, $item_name, $description, $location, $found_date]);

    echo "<div class='alert alert-success'>Your found item has been reported successfully!</div>";
}
?>
<div class="container my-5">
    <h2>Report a Found Item</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="item_name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="item_name" name="item_name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="mb-3">
            <label for="found_date" class="form-label">Found Date</label>
            <input type="date" class="form-control" id="found_date" name="found_date" required>
        </div>
        <div>
            <select name="category" class="form-control" required>
    <option value="Electronics">Electronics</option>
    <option value="Documents">Documents</option>
    <option value="Clothing">Clothing</option>
    <option value="Other">Other</option>
</select>
        </div>
        <div>
            <input type="file" name="image" class="form-control" accept="image/*">
            
        </div>
        <button type="submit" class="btn btn-primary">Report Found Item</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>