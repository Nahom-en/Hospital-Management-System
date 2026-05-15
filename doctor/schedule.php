<?php
require_once '../includes/auth_helper.php';
require_role(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Schedule - Hospital System</title>
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
                    <a href="./appointments.php">
                        <i data-lucide="calendar"></i>
                        <span>Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="./schedule.php" class="active">
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
                <h1 class="header-title h2 mb-0">Manage <span class="text-primary">Schedule</span></h1>
            </div>
            
            <button class="btn btn-primary px-4 py-2 fw-bold d-flex align-items-center gap-2 shadow-sm">
                <i data-lucide="save" size="18"></i>
                Save Changes
            </button>
        </header>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <div class="card border-0 shadow-sm overflow-hidden p-4">
                    <div class="mb-4">
                        <h5 class="fw-bold mb-1">Weekly Availability</h5>
                        <p class="text-muted small">Set your regular working hours to allow patients to book appointments.</p>
                    </div>

                    <form action="#" method="POST">
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle">
                                <thead>
                                    <tr class="border-bottom">
                                        <th class="py-3 text-uppercase small text-muted">Day of Week</th>
                                        <th class="py-3 text-uppercase small text-muted">Start Time</th>
                                        <th class="py-3 text-uppercase small text-muted">End Time</th>
                                        <th class="py-3 text-uppercase small text-muted text-center">Available</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Monday -->
                                    <tr class="border-bottom">
                                        <td class="fw-bold py-4">Monday</td>
                                        <td><input type="time" class="form-control" value="09:00"></td>
                                        <td><input type="time" class="form-control" value="16:00"></td>
                                        <td class="text-center">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" checked style="width: 2.5rem; height: 1.25rem;">
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tuesday -->
                                    <tr class="border-bottom">
                                        <td class="fw-bold py-4">Tuesday</td>
                                        <td><input type="time" class="form-control" value="09:00"></td>
                                        <td><input type="time" class="form-control" value="16:00"></td>
                                        <td class="text-center">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" checked style="width: 2.5rem; height: 1.25rem;">
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Wednesday -->
                                    <tr class="border-bottom">
                                        <td class="fw-bold py-4">Wednesday</td>
                                        <td><input type="time" class="form-control" value="09:00"></td>
                                        <td><input type="time" class="form-control" value="13:00"></td>
                                        <td class="text-center">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" checked style="width: 2.5rem; height: 1.25rem;">
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Thursday -->
                                    <tr class="border-bottom">
                                        <td class="fw-bold py-4">Thursday</td>
                                        <td><input type="time" class="form-control" value="09:00"></td>
                                        <td><input type="time" class="form-control" value="16:00"></td>
                                        <td class="text-center">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" checked style="width: 2.5rem; height: 1.25rem;">
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Friday -->
                                    <tr class="border-bottom">
                                        <td class="fw-bold py-4">Friday</td>
                                        <td><input type="time" class="form-control" value="09:00"></td>
                                        <td><input type="time" class="form-control" value="16:00"></td>
                                        <td class="text-center">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" checked style="width: 2.5rem; height: 1.25rem;">
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Saturday -->
                                    <tr class="border-bottom">
                                        <td class="fw-bold py-4 text-muted">Saturday</td>
                                        <td><input type="time" class="form-control" disabled></td>
                                        <td><input type="time" class="form-control" disabled></td>
                                        <td class="text-center">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" style="width: 2.5rem; height: 1.25rem;">
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Sunday -->
                                    <tr>
                                        <td class="fw-bold py-4 text-muted">Sunday</td>
                                        <td><input type="time" class="form-control" disabled></td>
                                        <td><input type="time" class="form-control" disabled></td>
                                        <td class="text-center">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" style="width: 2.5rem; height: 1.25rem;">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

        if (mobileToggle) {
            mobileToggle.addEventListener('click', () => {
                sidebar.classList.toggle('active');
            });
        }

        // Toggle inputs when checkbox is unchecked
        document.querySelectorAll('.form-check-input').forEach(toggle => {
            toggle.addEventListener('change', function() {
                const row = this.closest('tr');
                const inputs = row.querySelectorAll('input[type="time"]');
                const label = row.querySelector('td.fw-bold');
                
                inputs.forEach(input => {
                    input.disabled = !this.checked;
                });

                if (this.checked) {
                    label.classList.remove('text-muted');
                } else {
                    label.classList.add('text-muted');
                }
            });
        });
    </script>
</body>
</html>
