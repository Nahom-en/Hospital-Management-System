<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Hospital System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
                    <a href="../auth/logout.php" class="text-danger">
                        <i data-lucide="log-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <header class="d-flex align-items-center mb-5">
            <button class="mobile-toggle" id="mobile-toggle">
                <i data-lucide="menu"></i>
            </button>
            <h1 class="header-title h2 mb-0">Book an <span class="text-primary">Appointment</span></h1>
        </header>

        <div class="row">
            <div class="col-12">
                <div class="card p-4 shadow-sm border-0">
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <label for="doctor" class="form-label fw-semibold">Select Doctor</label>
                            <select name="doctor" id="doctor" class="form-select" required>
                                <option value="">Select a doctor</option>
                                <option value="dr_smith">Dr. Smith (General Physician)</option>
                                <option value="dr_johnson">Dr. Johnson (Cardiologist)</option>
                                <option value="dr_williams">Dr. Williams (Pediatrician)</option>
                            </select>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-12 col-md-6">
                                <label for="date" class="form-label fw-semibold">Preferred Date</label>
                                <input type="date" name="date" id="date" class="form-control" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="time" class="form-label fw-semibold">Preferred Time</label>
                                <input type="time" name="time" id="time" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="Reason" class="form-label fw-semibold">Reason for Appointment / Message</label>
                            <textarea name="Reason" id="Reason" class="form-control" rows="4" placeholder="Briefly describe your symptoms or reason for visit..." required></textarea>
                        </div>

                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-primary flex-grow-1 py-3">
                                <i data-lucide="check-circle" class="me-2"></i>
                                Confirm Booking
                            </button>
                            <a href="./dashboard.php" class="btn btn-outline-secondary flex-grow-1 py-3 d-flex align-items-center justify-content-center">
                                Cancel
                            </a>
                        </div>
                    </form>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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

