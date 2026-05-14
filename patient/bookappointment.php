<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Hospital System</title>
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
                    <a href="./bookappointment.php" class="active">
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
            <h1>Book an <span style="color: var(--primary);">Appointment</span></h1>
        </header>

        <div class="form-card">
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="doctor">Select Doctor</label>
                    <select name="doctor" id="doctor" required>
                        <option value="">Select a doctor</option>
                        <option value="dr_smith">Dr. Smith (General Physician)</option>
                        <option value="dr_johnson">Dr. Johnson (Cardiologist)</option>
                        <option value="dr_williams">Dr. Williams (Pediatrician)</option>
                    </select>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label for="date">Preferred Date</label>
                        <input type="date" name="date" id="date" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Preferred Time</label>
                        <input type="time" name="time" id="time" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Reason">Reason for Appointment / Message</label>
                    <textarea name="Reason" id="Reason" rows="4" placeholder="Briefly describe your symptoms or reason for visit..." required></textarea>
                </div>

                <div style="display: flex; gap: 1rem; margin-top: 1rem;">
                    <button type="submit" class="btn-primary" style="flex: 1;">
                        <i data-lucide="check-circle"></i>
                        Confirm Booking
                    </button>
                    <a href="./dashboard.php" class="btn-primary" style="background: var(--bg-main); color: var(--text-main); border: 1px solid var(--border-color); flex: 1; justify-content: center;">
                        Cancel
                    </a>
                </div>
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
