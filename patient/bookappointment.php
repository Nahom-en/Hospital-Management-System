<?php
require_once '../includes/auth_helper.php';
require_role(1);
?>
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

        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <!-- Booking Stepper -->
                <div class="booking-stepper d-flex justify-content-between mb-5 position-relative">
                    <div class="step-item active text-center" data-step="1">
                        <div class="step-icon mb-2 mx-auto">1</div>
                        <span class="small fw-bold">Doctor</span>
                    </div>
                    <div class="step-item text-center" data-step="2">
                        <div class="step-icon mb-2 mx-auto">2</div>
                        <span class="small fw-bold">Date</span>
                    </div>
                    <div class="step-item text-center" data-step="3">
                        <div class="step-icon mb-2 mx-auto">3</div>
                        <span class="small fw-bold">Time</span>
                    </div>
                    <div class="step-item text-center" data-step="4">
                        <div class="step-icon mb-2 mx-auto">4</div>
                        <span class="small fw-bold">Reason</span>
                    </div>
                    <div class="step-item text-center" data-step="5">
                        <div class="step-icon mb-2 mx-auto">5</div>
                        <span class="small fw-bold">Confirm</span>
                    </div>
                </div>

                <div class="card border-0 shadow-sm p-4 p-md-5 overflow-hidden">
                    <form action="#" method="POST" id="bookingForm">
                        <!-- Step 1: Choose Doctor -->
                        <div class="step-content active" id="step1">
                            <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                                Choose Doctor
                            </h5>
                            <div class="mb-4">
                                <label for="doctor" class="form-label small fw-bold text-muted text-uppercase">Select Physician</label>
                                <select name="doctor" id="doctor" class="form-select form-select-lg px-3 border-2">
                                    <option value="">Select a doctor</option>
                                    <option value="dr_smith">Dr. Sarah Johnson</option>
                                    <option value="dr_johnson">Dr. Michael Smith</option>
                                    <option value="dr_williams">Dr. Emily Williams</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-bold text-muted text-uppercase d-block mb-3">Available Specializations</label>
                                <div class="specializations d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-primary border px-3 py-2 rounded-pill">Cardiology</span>
                                    <span class="badge bg-light text-primary border px-3 py-2 rounded-pill">Dermatology</span>
                                    <span class="badge bg-light text-primary border px-3 py-2 rounded-pill">Pediatrics</span>
                                    <span class="badge bg-light text-primary border px-3 py-2 rounded-pill">Neurology</span>
                                </div>
                            </div>
                            <div class="mt-5 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary px-5 py-3 fw-bold btn-next" data-next="2">
                                    Next: Choose Date <i data-lucide="arrow-right" class="ms-2"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Step 2: Choose Date -->
                        <div class="step-content d-none" id="step2">
                            <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                                Choose Date
                            </h5>
                            <div class="mb-4">
                                <label for="date" class="form-label small fw-bold text-muted text-uppercase">Select Preferred Date</label>
                                <input type="date" name="date" id="date" class="form-control form-control-lg border-2" required>
                            </div>
                            <div class="mt-5 d-flex justify-content-between">
                                <button type="button" class="btn btn-light px-4 py-3 fw-bold text-muted btn-prev" data-prev="1">
                                    <i data-lucide="arrow-left" class="me-2"></i> Back
                                </button>
                                <button type="button" class="btn btn-primary px-5 py-3 fw-bold btn-next" data-next="3">
                                    Next: Choose Time <i data-lucide="arrow-right" class="ms-2"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Step 3: Choose Time Slot -->
                        <div class="step-content d-none" id="step3">
                            <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                                Choose Available Time Slot
                            </h5>
                            <label class="form-label small fw-bold text-muted text-uppercase mb-3">Available Morning Slots</label>
                            <div class="d-flex flex-wrap gap-3 mb-4">
                                <input type="radio" class="btn-check" name="time_slot" id="slot1" value="09:00">
                                <label class="btn btn-outline-primary px-4 py-2 rounded-4 fw-bold" for="slot1">09:00 AM</label>

                                <input type="radio" class="btn-check" name="time_slot" id="slot2" value="09:30">
                                <label class="btn btn-outline-primary px-4 py-2 rounded-4 fw-bold" for="slot2">09:30 AM</label>

                                <input type="radio" class="btn-check" name="time_slot" id="slot3" value="10:00">
                                <label class="btn btn-outline-primary px-4 py-2 rounded-4 fw-bold" for="slot3">10:00 AM</label>
                            </div>
                            
                            <label class="form-label small fw-bold text-muted text-uppercase mb-3">Available Afternoon Slots</label>
                            <div class="d-flex flex-wrap gap-3">
                                <input type="radio" class="btn-check" name="time_slot" id="slot5" value="14:00">
                                <label class="btn btn-outline-primary px-4 py-2 rounded-4 fw-bold" for="slot5">02:00 PM</label>

                                <input type="radio" class="btn-check" name="time_slot" id="slot6" value="14:30">
                                <label class="btn btn-outline-primary px-4 py-2 rounded-4 fw-bold" for="slot6">02:30 PM</label>
                            </div>
                            <div class="mt-5 d-flex justify-content-between">
                                <button type="button" class="btn btn-light px-4 py-3 fw-bold text-muted btn-prev" data-prev="2">
                                    <i data-lucide="arrow-left" class="me-2"></i> Back
                                </button>
                                <button type="button" class="btn btn-primary px-5 py-3 fw-bold btn-next" data-next="4">
                                    Next: Write Reason <i data-lucide="arrow-right" class="ms-2"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Step 4: Write Reason -->
                        <div class="step-content d-none" id="step4">
                            <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                                Write Reason
                            </h5>
                            <div class="mb-4">
                                <label for="Reason" class="form-label small fw-bold text-muted text-uppercase">Reason for Appointment</label>
                                <textarea name="Reason" id="Reason" class="form-control border-2 p-3" rows="5" placeholder="Briefly describe your symptoms or reason for visit..." required></textarea>
                            </div>
                            <div class="mt-5 d-flex justify-content-between">
                                <button type="button" class="btn btn-light px-4 py-3 fw-bold text-muted btn-prev" data-prev="3">
                                    <i data-lucide="arrow-left" class="me-2"></i> Back
                                </button>
                                <button type="button" class="btn btn-primary px-5 py-3 fw-bold btn-next" data-next="5">
                                    Next: Confirm <i data-lucide="arrow-right" class="ms-2"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Step 5: Confirm Booking -->
                        <div class="step-content d-none" id="step5">
                            <div class="text-center mb-5">
                                <div class="bg-primary-subtle text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                                    <i data-lucide="check-circle" size="40"></i>
                                </div>
                                <h4 class="fw-bold">Confirm Booking</h4>
                                <p class="text-muted">Please review your appointment details below.</p>
                            </div>

                            <div class="bg-light p-4 rounded-4 mb-5">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <label class="small text-muted text-uppercase fw-bold d-block mb-1">Doctor</label>
                                        <p class="fw-bold mb-0" id="summary-doctor">Not Selected</p>
                                    </div>
                                    <div class="col-6">
                                        <label class="small text-muted text-uppercase fw-bold d-block mb-1">Date</label>
                                        <p class="fw-bold mb-0" id="summary-date">Not Selected</p>
                                    </div>
                                    <div class="col-6">
                                        <label class="small text-muted text-uppercase fw-bold d-block mb-1">Time</label>
                                        <p class="fw-bold mb-0" id="summary-time">Not Selected</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-column gap-3">
                                <button type="submit" class="btn btn-primary btn-lg py-3 fw-bold">
                                    Confirm Appointment
                                </button>
                                <button type="button" class="btn btn-light py-3 fw-bold text-muted btn-prev" data-prev="4">
                                    Go Back and Edit
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

        // Multi-Step Form Logic
        const form = document.getElementById('bookingForm');
        const steps = document.querySelectorAll('.step-content');
        const stepperItems = document.querySelectorAll('.step-item');
        const nextBtns = document.querySelectorAll('.btn-next');
        const prevBtns = document.querySelectorAll('.btn-prev');

        function updateSummary() {
            document.getElementById('summary-doctor').innerText = document.getElementById('doctor').options[document.getElementById('doctor').selectedIndex].text;
            document.getElementById('summary-date').innerText = document.getElementById('date').value || 'Not Selected';
            
            const selectedTime = document.querySelector('input[name="time_slot"]:checked');
            document.getElementById('summary-time').innerText = selectedTime ? selectedTime.value : 'Not Selected';
        }

        nextBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const nextStep = btn.getAttribute('data-next');
                
                // Simple validation for required fields in current step
                const currentStepDiv = btn.closest('.step-content');
                const inputs = currentStepDiv.querySelectorAll('input, select, textarea');
                let valid = true;
                inputs.forEach(input => {
                    if (input.hasAttribute('required') && !input.value) {
                        input.classList.add('is-invalid');
                        valid = false;
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });

                // Special validation for radio buttons (time slots)
                if (nextStep == 4) {
                    if (!document.querySelector('input[name="time_slot"]:checked')) {
                        alert('Please select a time slot.');
                        valid = false;
                    }
                }

                if (!valid) return;

                if (nextStep == 5) updateSummary();

                // Transition to next step
                steps.forEach(s => s.classList.add('d-none'));
                document.getElementById('step' + nextStep).classList.remove('d-none');

                // Update Stepper UI
                stepperItems.forEach(item => {
                    const stepNum = item.getAttribute('data-step');
                    if (stepNum <= nextStep) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });

                lucide.createIcons();
            });
        });

        prevBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const prevStep = btn.getAttribute('data-prev');
                
                steps.forEach(s => s.classList.add('d-none'));
                document.getElementById('step' + prevStep).classList.remove('d-none');

                // Update Stepper UI
                stepperItems.forEach(item => {
                    const stepNum = item.getAttribute('data-step');
                    if (stepNum <= prevStep) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });

                lucide.createIcons();
            });
        });

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

