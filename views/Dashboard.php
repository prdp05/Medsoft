<?php session_start();?>
<?php require "../controller/isLogin.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Medicine Inventory System</title>
    <link rel="stylesheet" href="../public/css/Dashboard.css">
</head>
<body>

<div class="content">
    <div class="section-title">Dashboard</div>
    <div class="card-container">
        <div class="card">
            <h2>Total Medicines</h2>
            <p>Currently managing 500 medicines in the inventory.</p>
            <button class="more-details-btn" onclick="showModal('Total Medicines', 'Details about total medicines.')">More Details</button>
        </div>
        <div class="card">
            <h2>Low Stock Alert</h2>
            <p>10 medicines are running low in stock. Please replenish.</p>
            <button class="more-details-btn" onclick="showModal('Low Stock Alert', 'Details about low stock medicines.')">More Details</button>
        </div>
        <div class="card">
            <h2>Expired Medicines</h2>
            <p>5 medicines have expired. Take necessary actions.</p>
            <button class="more-details-btn" onclick="showModal('Expired Medicines', 'Details about expired medicines.')">More Details</button>
        </div>
        <div class="card">
            <h2>Expired Medicines</h2>
            <p>5 medicines have expired. Take necessary actions.</p>
            <button class="more-details-btn" onclick="showModal('Expired Medicines', 'Details about expired medicines.')">More Details</button>
        </div>
        <div class="card">
            <h2>Expired Medicines</h2>
            <p>5 medicines have expired. Take necessary actions.</p>
            <button class="more-details-btn" onclick="showModal('Expired Medicines', 'Details about expired medicines.')">More Details</button>
        </div><div class="card">
            <h2>Expired Medicines</h2>
            <p>5 medicines have expired. Take necessary actions.</p>
            <button class="more-details-btn" onclick="showModal('Expired Medicines', 'Details about expired medicines.')">More Details</button>
        </div><div class="card">
            <h2>Expired Medicines</h2>
            <p>5 medicines have expired. Take necessary actions.</p>
            <button class="more-details-btn" onclick="showModal('Expired Medicines', 'Details about expired medicines.')">More Details</button>
        </div>
        <div class="card">
            <h2>Expired Medicines</h2>
            <p>5 medicines have expired. Take necessary actions.</p>
            <button class="more-details-btn" onclick="showModal('Expired Medicines', 'Details about expired medicines.')">More Details</button>
        </div><div class="card">
            <h2>Expired Medicines</h2>
            <p>5 medicines have expired. Take necessary actions.</p>
            <button class="more-details-btn" onclick="showModal('Expired Medicines', 'Details about expired medicines.')">More Details</button>
        </div><div class="card">
            <h2>Expired Medicines</h2>
            <p>5 medicines have expired. Take necessary actions.</p>
            <button class="more-details-btn" onclick="showModal('Expired Medicines', 'Details about expired medicines.')">More Details</button>
        </div><div class="card">
            <h2>Expired Medicines</h2>
            <p>5 medicines have expired. Take necessary actions.</p>
            <button class="more-details-btn" onclick="showModal('Expired Medicines', 'Details about expired medicines.')">More Details</button>
        </div>


    </div>
</div>

<div class="modal" id="myModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2 id="modalTitle"></h2>
        <p id="modalContent"></p>
    </div>
</div>

<footer class="Footer">
    &copy;copyright <b>MEDSOFT</b>. All Rights Reserved <br> Design by 💙 <b>medsoft</b>
</footer>

<script>
    function showModal(title, content) {
        document.getElementById('modalTitle').innerText = title;
        document.getElementById('modalContent').innerText = content;
        document.getElementById('myModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    // Allow closing modal by clicking the close button
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('close')) {
            closeModal();
        }
    });
</script>
</body>
</html>
