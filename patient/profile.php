<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Hospital System</title>
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
            <h1 class="header-title h2 mb-0">My <span class="text-primary">Profile</span></h1>
        </header>

        <div class="row">
            <div class="col-12">
                <div class="card p-4 shadow-sm border-0 mb-4">
                    <div class="d-flex align-items-center gap-4 mb-5 pb-3 border-bottom">
                        <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                            <i data-lucide="user" size="48"></i>
                        </div>
                        <div>
                            <h2 class="fw-bold mb-1 h4">John Doe</h2>
                            <p class="text-muted mb-0">Patient ID: <span class="fw-semibold">#PAT-12345</span></p>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        <div class="row g-4">
                            <div class="col-12 col-md-6">
                                <label for="name" class="form-label fw-semibold text-muted small text-uppercase">Full Name</label>
                                <input type="text" id="name" class="form-control bg-light border-0 px-3" value="John Doe" readonly>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="email" class="form-label fw-semibold text-muted small text-uppercase">Email Address</label>
                                <input type="email" id="email" class="form-control bg-light border-0 px-3" value="john.doe@example.com" readonly>
                            </div>
                            <div class="col-12">
                                <label for="phone" class="form-label fw-semibold text-muted small text-uppercase">Phone Number</label>
                                <input type="tel" id="phone" class="form-control px-3" value="+1 234 567 890">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5 py-3 mt-2">
                                    <i data-lucide="save" class="me-2"></i>
                                    Update Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
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

