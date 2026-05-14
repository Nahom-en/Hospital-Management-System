<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Appointments - Hospital System</title>
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
                    <a href="./myappointments.php" class="active">
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
            <h1 class="header-title h2 mb-0">My <span class="text-primary">Appointments</span></h1>
        </header>

        <div class="card border-0 shadow-sm overflow-hidden">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3">Doctor</th>
                            <th class="py-3">Date</th>
                            <th class="py-3">Time</th>
                            <th class="py-3">Reason</th>
                            <th class="py-3">Status</th>
                            <th class="py-3 text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dummy Data for demonstration -->
                        <tr>
                            <td class="ps-4 fw-bold">Dr. Sarah Johnson</td>
                            <td>May 20, 2024</td>
                            <td>10:30 AM</td>
                            <td><span class="text-muted small">Routine Checkup</span></td>
                            <td><span class="badge bg-warning text-dark px-3 py-2 rounded-pill">Pending</span></td>
                            <td class="text-end pe-4">
                                <div class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-sm btn-light border" title="View"><i data-lucide="eye" size="16"></i></button>
                                    <button class="btn btn-sm btn-outline-primary" title="Reschedule"><i data-lucide="calendar-clock" size="16"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" title="Cancel"><i data-lucide="x" size="16"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">Dr. Michael Smith</td>
                            <td>May 15, 2024</td>
                            <td>02:15 PM</td>
                            <td><span class="text-muted small">Heart Consultation</span></td>
                            <td><span class="badge bg-success px-3 py-2 rounded-pill text-white">Approved</span></td>
                            <td class="text-end pe-4">
                                <div class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-sm btn-light border" title="View"><i data-lucide="eye" size="16"></i></button>
                                    <button class="btn btn-sm btn-outline-primary" title="Reschedule"><i data-lucide="calendar-clock" size="16"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" title="Cancel"><i data-lucide="x" size="16"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">Dr. Emily Williams</td>
                            <td>May 10, 2024</td>
                            <td>09:00 AM</td>
                            <td><span class="text-muted small">Fever and Cold</span></td>
                            <td><span class="badge bg-primary px-3 py-2 rounded-pill text-white">Completed</span></td>
                            <td class="text-end pe-4">
                                <div class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-sm btn-light border" title="View"><i data-lucide="eye" size="16"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">Dr. David Brown</td>
                            <td>May 05, 2024</td>
                            <td>11:45 AM</td>
                            <td><span class="text-muted small">Skin Allergy</span></td>
                            <td><span class="badge bg-danger px-3 py-2 rounded-pill text-white">Rejected</span></td>
                            <td class="text-end pe-4">
                                <div class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-sm btn-light border" title="View"><i data-lucide="eye" size="16"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">Dr. Jessica Lee</td>
                            <td>May 01, 2024</td>
                            <td>04:30 PM</td>
                            <td><span class="text-muted small">Dental Pain</span></td>
                            <td><span class="badge bg-secondary px-3 py-2 rounded-pill text-white">Cancelled</span></td>
                            <td class="text-end pe-4">
                                <div class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-sm btn-light border" title="View"><i data-lucide="eye" size="16"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
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

