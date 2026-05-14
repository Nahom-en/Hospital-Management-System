<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard - Hospital System</title>
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
                    <a href="./dashboard.php" class="active">
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
                    <a href="./profile.php">
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
            <h1>Welcome, <span style="color: var(--primary);">Patient</span></h1>
            <div class="user-profile">
                <!-- Profile icon or name could go here -->
            </div>
        </header>

        <section>
            <a href="./bookappointment.php" class="btn-primary">
                <i data-lucide="plus-circle"></i>
                Book New Appointment
            </a>
        </section>

        <div class="cards-grid">
            <div class="stat-card">
                <div class="icon"><i data-lucide="clock"></i></div>
                <h3>Upcoming</h3>
                <p class="value">2</p>
            </div>

            <div class="stat-card">
                <div class="icon" style="background: rgba(34, 197, 94, 0.1); color: #22c55e;"><i data-lucide="check-circle"></i></div>
                <h3>Completed</h3>
                <p class="value">12</p>
            </div>

            <div class="stat-card warning">
                <div class="icon"><i data-lucide="alert-circle"></i></div>
                <h3>Pending</h3>
                <p class="value">1</p>
            </div>

            <div class="stat-card danger">
                <div class="icon"><i data-lucide="x-circle"></i></div>
                <h3>Cancelled</h3>
                <p class="value">0</p>
            </div>
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
