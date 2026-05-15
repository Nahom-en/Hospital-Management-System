<?php
require_once '../includes/auth_helper.php';
require_role(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointments - Hospital System</title>
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
                    <a href="./appointments.php" class="active">
                        <i data-lucide="calendar"></i>
                        <span>Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="./schedule.php">
                        <i data-lucide="clock"></i>
                        <span>Schedule</span>
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
        <header class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-5 gap-4">
            <div class="d-flex align-items-center">
                <button class="mobile-toggle me-3" id="mobile-toggle">
                    <i data-lucide="menu"></i>
                </button>
                <h1 class="header-title h2 mb-0">Manage <span class="text-primary">Appointments</span></h1>
            </div>
            
            <div class="search-box position-relative" style="min-width: 300px;">
                <i data-lucide="search" class="position-absolute top-50 start-0 translate-middle-y ms-3 text-muted" size="18"></i>
                <input type="text" class="form-control ps-5 py-2 rounded-pill border-2" placeholder="Search by patient name or date...">
            </div>
        </header>

        <div class="row g-4">
            <!-- Appointments Table -->
            <div class="col-12 col-xl-9">
                <div class="card border-0 shadow-sm overflow-hidden h-100">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-4 py-3">Patient</th>
                                    <th class="py-3">Date</th>
                                    <th class="py-3">Time</th>
                                    <th class="py-3">Reason</th>
                                    <th class="py-3">Status</th>
                                    <th class="py-3 text-end pe-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Pending Request -->
                                <tr>
                                    <td class="ps-4 fw-bold">John Doe</td>
                                    <td>May 20, 2024</td>
                                    <td>09:00 AM</td>
                                    <td><span class="text-muted small">Routine Checkup</span></td>
                                    <td><span class="badge bg-warning text-dark px-3 py-2 rounded-pill">Pending</span></td>
                                    <td class="text-end pe-4">
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-success" title="Approve"><i data-lucide="check" size="16"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" title="Reject"><i data-lucide="x" size="16"></i></button>
                                            <a href="patient_details.php?id=1" class="btn btn-sm btn-light border" title="View Details"><i data-lucide="eye" size="16"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Approved Request -->
                                <tr>
                                    <td class="ps-4 fw-bold">Jane Smith</td>
                                    <td>May 15, 2024</td>
                                    <td>10:30 AM</td>
                                    <td><span class="text-muted small">Blood Pressure</span></td>
                                    <td><span class="badge bg-success px-3 py-2 rounded-pill">Approved</span></td>
                                    <td class="text-end pe-4">
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary" title="Complete"><i data-lucide="check-circle" size="16"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" title="Reject"><i data-lucide="x" size="16"></i></button>
                                            <a href="patient_details.php?id=2" class="btn btn-sm btn-light border" title="View Details"><i data-lucide="eye" size="16"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Completed Request -->
                                <tr>
                                    <td class="ps-4 fw-bold">Robert Johnson</td>
                                    <td>May 10, 2024</td>
                                    <td>01:00 PM</td>
                                    <td><span class="text-muted small">Flu Symptoms</span></td>
                                    <td><span class="badge bg-primary px-3 py-2 rounded-pill">Completed</span></td>
                                    <td class="text-end pe-4">
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="patient_details.php?id=3" class="btn btn-sm btn-light border" title="View Details"><i data-lucide="eye" size="16"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Extra Section: Patient Medical Notes -->
            <div class="col-12 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-bottom-0 pt-4 pb-2 px-4 d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">Quick Notes</h5>
                        <button class="btn btn-sm btn-light border rounded-circle"><i data-lucide="plus" size="16"></i></button>
                    </div>
                    <div class="card-body p-4 pt-0">
                        <div class="alert alert-secondary border-0 mb-3 p-3 rounded-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold small text-dark">Jane Smith</span>
                                <span class="text-muted small">May 15</span>
                            </div>
                            <p class="small text-muted mb-0">Patient complains of mild headaches. Recommended blood test.</p>
                        </div>
                        <div class="alert alert-secondary border-0 mb-3 p-3 rounded-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold small text-dark">John Doe</span>
                                <span class="text-muted small">May 12</span>
                            </div>
                            <p class="small text-muted mb-0">Routine checkup clear. Prescribed vitamins.</p>
                        </div>
                    </div>
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

        if (mobileToggle) {
            mobileToggle.addEventListener('click', () => {
                sidebar.classList.toggle('active');
            });
        }
    </script>
</body>
</html>
