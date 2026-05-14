<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Hospital System</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        
        <nav class="sidebar-nav">
            <ul>
                <li>
                    <a href="./dashboard.php">
                        <i data-lucide="layout-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="./bookappointment.php">
                        <i data-lucide="calendar-plus"></i>
                        <span>Book Appointment</span>
                    </a>
                </li>
                <li>
                    <a href="./myappointments.php">
                        <i data-lucide="calendar"></i>
                        <span>My Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="./profile.php" class="active">
                        <i data-lucide="user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li style="margin-top: auto; padding-top: 2rem;">
                    <a href="../auth/logout.php" style="color: #ef4444;">
                        <i data-lucide="log-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <header class="header">
            <button class="mobile-toggle" id="mobile-toggle">
                <i data-lucide="menu"></i>
            </button>
            <h1>My <span style="color: var(--primary);">Profile</span></h1>
        </header>

        <div class="form-card">
            <div style="display: flex; align-items: center; gap: 1.5rem; margin-bottom: 2rem;">
                <div style="width: 80px; height: 80px; border-radius: 50%; background: var(--bg-main); border: 2px solid var(--primary); display: flex; align-items: center; justify-content: center; color: var(--primary);">
                    <i data-lucide="user" size="40"></i>
                </div>
                <div>
                    <h2 style="font-size: 1.25rem; font-weight: 700;">John Doe</h2>
                    <p style="color: var(--text-muted);">Patient ID: #PAT-12345</p>
                </div>
            </div>

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" value="John Doe" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" value="john.doe@example.com" readonly>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" value="+1 234 567 890">
                </div>
                <button type="submit" class="btn-primary">
                    <i data-lucide="save"></i>
                    Update Profile
                </button>
            </form>
        </div>
    </main>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Mobile Toggle Logic
        const mobileToggle = document.getElementById('mobile-toggle');
        const sidebar = document.getElementById('sidebar');

        mobileToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 1024 && 
                !sidebar.contains(e.target) && 
                !mobileToggle.contains(e.target) && 
                sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });
    </script>
</body>
</html>
