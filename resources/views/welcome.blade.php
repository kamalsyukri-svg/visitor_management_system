<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0b1220">
    <title>Visitor Registration System</title>

    <!-- Bootstrap-only landing styling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark text-light">
<div class="position-relative overflow-hidden min-vh-100">
    <!-- Futuristic background shapes (Bootstrap classes only) -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" aria-hidden="true">
        <div class="position-absolute top-0 start-50 translate-middle-x bg-primary opacity-25 rounded-circle w-75 h-75"></div>
        <div class="position-absolute top-50 start-0 translate-middle-y bg-info opacity-25 rounded-circle w-50 h-50"></div>
        <div class="position-absolute bottom-0 start-50 translate-middle-x bg-secondary opacity-25 rounded-circle w-75 h-75"></div>
    </div>

    <!-- Navigation -->
    <header class="position-sticky top-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-75 border-bottom border-secondary">
            <div class="container">
                <a class="navbar-brand fw-semibold d-flex align-items-center gap-2" href="#top">
                    <span class="d-inline-flex align-items-center justify-content-center rounded-3 border border-secondary bg-secondary bg-opacity-25 p-2">
                        <span class="small fw-semibold">VR</span>
                    </span>
                    <span>
                        Visitor <span class="text-info">Registration</span>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#how-it-works">How it works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#faq">FAQ</a>
                        </li>
                        <li class="nav-item ms-lg-2">
                            <a class="btn btn-outline-info rounded-pill px-4" href="#register">Quick register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main id="top">
        <!-- Hero -->
        <section>
            <div class="container py-5 py-lg-6">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <div class="d-inline-flex align-items-center gap-2 rounded-pill border border-secondary bg-secondary bg-opacity-25 px-4 py-2 small">
                            <span class="d-inline-block rounded-circle bg-info me-1" style="width:10px;height:10px;"></span>
                            Futuristic visitor check-in experience
                        </div>

                        <h1 class="mt-4 display-5 fw-bold lh-sm">
                            Secure. Fast.
                            <span class="d-block text-info">Built for real gates & real schedules.</span>
                        </h1>

                        <p class="mt-4 text-secondary-emphasis fs-5">
                            A modern futuristic interface with classic landing sections—designed to keep visitor records clean, approvals smooth, and access consistent.
                        </p>

                        <div class="mt-4 d-flex flex-column flex-sm-row gap-3">
                            <a href="#register" class="btn btn-primary btn-lg rounded-3 px-4">
                                Get started
                            </a>
                            <a href="#features" class="btn btn-outline-light btn-lg rounded-3 px-4">
                                Explore features
                            </a>
                        </div>

                        <div class="mt-4 row g-3">
                            <div class="col-sm-4">
                                <div class="card bg-transparent border-secondary h-100">
                                    <div class="card-body">
                                        <div class="text-secondary-emphasis small">Check-in</div>
                                        <div class="display-6 fw-semibold">Seconds</div>
                                        <div class="text-secondary small">Optimized flow for gates</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card bg-transparent border-secondary h-100">
                                    <div class="card-body">
                                        <div class="text-secondary-emphasis small">Records</div>
                                        <div class="display-6 fw-semibold">Accurate</div>
                                        <div class="text-secondary small">Clean visitor history</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card bg-transparent border-secondary h-100">
                                    <div class="card-body">
                                        <div class="text-secondary-emphasis small">Approvals</div>
                                        <div class="display-6 fw-semibold">Simple</div>
                                        <div class="text-secondary small">From request to entry</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hero preview card -->
                    <div class="col-lg-5">
                        <div class="card bg-dark bg-opacity-25 border border-secondary rounded-4 shadow-lg">
                            <div class="card-header bg-transparent border-secondary">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="fw-semibold">Gate Console</div>
                                    <div class="d-flex align-items-center gap-2 small text-secondary-emphasis">
                                        <span class="d-inline-block rounded-circle bg-success me-1" style="width:9px;height:9px;"></span>
                                        Online
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="border border-secondary rounded-4 p-3 bg-dark bg-opacity-25">
                                            <div class="d-flex align-items-center justify-content-between gap-3">
                                                <div>
                                                    <div class="text-secondary-emphasis small">Next visit</div>
                                                    <div class="fw-semibold fs-5">Today · 15:30</div>
                                                </div>
                                                <span class="badge text-bg-info rounded-pill px-3 py-2">Ready</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="border border-secondary rounded-4 p-3 bg-dark bg-opacity-25 h-100">
                                            <div class="text-secondary-emphasis small">Location</div>
                                            <div class="fw-semibold fs-5 mt-1">Main Gate</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="border border-secondary rounded-4 p-3 bg-dark bg-opacity-25 h-100">
                                            <div class="text-secondary-emphasis small">Mode</div>
                                            <div class="fw-semibold fs-5 mt-1">Visitor ID</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="border border-secondary rounded-4 p-3 bg-dark bg-opacity-25">
                                            <div class="d-flex align-items-center justify-content-between gap-3">
                                                <div>
                                                    <div class="text-secondary-emphasis small">Status</div>
                                                    <div class="fw-semibold fs-5 mt-1">Approved · Access Granted</div>
                                                </div>
                                                <div class="rounded-4 border border-secondary bg-info bg-opacity-10 p-3">
                                                    <!-- Check icon -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="text-info" viewBox="0 0 16 16" aria-hidden="true">
                                                        <path d="M10.97 4.97a.75.75 0 0 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-2.5-2.5a.75.75 0 1 1 1.06-1.06l1.97 1.97 3.97-3.97z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="progress" role="progressbar" aria-label="Entry progress" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-info" style="width: 78%"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2 small text-secondary-emphasis">
                                                    <span>Verification</span>
                                                    <span>Entry</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 text-secondary-emphasis small">
                                    Visual preview only. Your UI can plug real data into this layout.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features" class="border-top border-secondary">
            <div class="container py-5">
                <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4">
                    <div>
                        <h2 class="fw-bold display-6">Features</h2>
                        <p class="text-secondary-emphasis fs-5 mb-0">
                            A clean experience for staff and visitors—built for speed, clarity, and control.
                        </p>
                    </div>
                    <div class="d-none d-md-inline-flex align-items-center gap-2 px-4 py-3 rounded-4 border border-secondary bg-secondary bg-opacity-25">
                        <span class="fw-semibold text-info">Futuristic</span>
                        <span class="text-secondary-emphasis">UI · Classic sections</span>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-transparent border-secondary h-100 rounded-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="h5 mb-0">Visitor check-in</h3>
                                    <div class="border border-secondary rounded-4 p-2 bg-secondary bg-opacity-25" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-info" viewBox="0 0 16 16">
                                            <path d="M5.5 0.5l1 3h3l-2.5 1.8.9 3.2-2.4-1.7-2.4 1.7.9-3.2L1 3.5h3l1-3z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-secondary-emphasis mt-3 mb-0">
                                    Fast entry flow that reduces confusion at the gate with a clear, guided interface.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-transparent border-secondary h-100 rounded-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="h5 mb-0">Approvals workflow</h3>
                                    <div class="border border-secondary rounded-4 p-2 bg-secondary bg-opacity-25" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-info" viewBox="0 0 16 16">
                                            <path d="M6 12 2 8l1.4-1.4L6 9.2l6.6-6.6L14 4l-8 8z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-secondary-emphasis mt-3 mb-0">
                                    Approve requests with status visibility—so staff always know what’s happening.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-transparent border-secondary h-100 rounded-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="h5 mb-0">Search & history</h3>
                                    <div class="border border-secondary rounded-4 p-2 bg-secondary bg-opacity-25" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-info" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.398 1.398l3.85 3.85 1.414-1.414-3.866-3.834zM6.5 10a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-secondary-emphasis mt-3 mb-0">
                                    Keep records easy to access—so you can find the right visitor fast.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-transparent border-secondary h-100 rounded-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="h5 mb-0">Vehicle & ID support</h3>
                                    <div class="border border-secondary rounded-4 p-2 bg-secondary bg-opacity-25" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-info" viewBox="0 0 16 16">
                                            <path d="M1 5l2-2h10l2 2-1 6H2L1 5zm3 7a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-secondary-emphasis mt-3 mb-0">
                                    Register vehicle details and IDs for smoother gate operations.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-transparent border-secondary h-100 rounded-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="h5 mb-0">Modern, readable UI</h3>
                                    <div class="border border-secondary rounded-4 p-2 bg-secondary bg-opacity-25" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-info" viewBox="0 0 16 16">
                                            <path d="M0 2h16v2H0V2zm0 5h10v2H0V7zm0 5h16v2H0v-2z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-secondary-emphasis mt-3 mb-0">
                                    Futuristic styling with a classic structure—simple to scan, easy to learn.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-transparent border-secondary h-100 rounded-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="h5 mb-0">Audit-friendly</h3>
                                    <div class="border border-secondary rounded-4 p-2 bg-secondary bg-opacity-25" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-info" viewBox="0 0 16 16">
                                            <path d="M8 0l6 3v5c0 4.418-2.686 7.4-6 8-3.314-.6-6-3.582-6-8V3l6-3zM5.5 8.5l1.8 1.8 3.6-4.2-1.1-1-2.5 2.9-1-1-0.8 1.5z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-secondary-emphasis mt-3 mb-0">
                                    Clear statuses and consistent records help keep operations reliable.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How it works -->
        <section id="how-it-works">
            <div class="container py-5">
                <div class="card bg-transparent border-secondary rounded-4">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="fw-bold display-6 mb-2">How it works</h2>
                        <p class="text-secondary-emphasis fs-5 mb-4">
                            A simple flow that fits real-world gate procedures.
                        </p>

                        <div class="row g-3">
                            <div class="col-md-6 col-lg-3">
                                <div class="h-100 border border-secondary rounded-4 p-4 bg-dark bg-opacity-25">
                                    <div class="text-info fw-semibold small">Step 1</div>
                                    <div class="fw-semibold fs-5 mt-2">Receive request</div>
                                    <p class="text-secondary-emphasis mt-2 mb-0">Capture the visitor info with clarity.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="h-100 border border-secondary rounded-4 p-4 bg-dark bg-opacity-25">
                                    <div class="text-info fw-semibold small">Step 2</div>
                                    <div class="fw-semibold fs-5 mt-2">Approve</div>
                                    <p class="text-secondary-emphasis mt-2 mb-0">Update status so staff stay aligned.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="h-100 border border-secondary rounded-4 p-4 bg-dark bg-opacity-25">
                                    <div class="text-info fw-semibold small">Step 3</div>
                                    <div class="fw-semibold fs-5 mt-2">Check-in</div>
                                    <p class="text-secondary-emphasis mt-2 mb-0">Fast gate flow with visual confirmation.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="h-100 border border-secondary rounded-4 p-4 bg-dark bg-opacity-25">
                                    <div class="text-info fw-semibold small">Step 4</div>
                                    <div class="fw-semibold fs-5 mt-2">Keep history</div>
                                    <p class="text-secondary-emphasis mt-2 mb-0">Search past visits and records quickly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick register -->
        <section id="register">
            <div class="container py-5">
                <div class="row g-4 align-items-lg-center">
                    <div class="col-lg-5">
                        <h2 class="fw-bold display-6">Quick register</h2>
                        <p class="text-secondary-emphasis fs-5">
                            This is a UI preview section. Wire it to your real routes/controllers when ready.
                        </p>

                        <div class="mt-4 d-grid gap-3">
                            <div class="border border-secondary rounded-4 p-4 bg-dark bg-opacity-25">
                                <div class="fw-semibold">Built for clarity</div>
                                <p class="text-secondary-emphasis mb-0">Clean inputs, compact layout, and friendly guidance.</p>
                            </div>
                            <div class="border border-secondary rounded-4 p-4 bg-dark bg-opacity-25">
                                <div class="fw-semibold">Gate-ready visuals</div>
                                <p class="text-secondary-emphasis mb-0">High contrast cards optimized for quick scanning.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="card bg-dark bg-opacity-25 border border-secondary rounded-4 shadow-lg">
                            <div class="card-body p-4 p-md-5">
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div>
                                        <div class="text-secondary-emphasis small">Visitor details</div>
                                        <div class="fw-semibold fs-5 mt-1">Create a new entry</div>
                                    </div>
                                    <span class="badge text-bg-primary rounded-pill px-3 py-2">Preview only</span>
                                </div>

                                <form class="mt-4" onsubmit="return false">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label text-secondary-emphasis">Full name</label>
                                            <input type="text" class="form-control bg-dark bg-opacity-25 border-secondary text-light" placeholder="e.g. Amina Khan">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label text-secondary-emphasis">Phone</label>
                                            <input type="tel" class="form-control bg-dark bg-opacity-25 border-secondary text-light" placeholder="+92 ...">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label text-secondary-emphasis">Purpose of visit</label>
                                            <input type="text" class="form-control bg-dark bg-opacity-25 border-secondary text-light" placeholder="Meeting, delivery, support...">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label text-secondary-emphasis">Vehicle type</label>
                                            <input type="text" class="form-control bg-dark bg-opacity-25 border-secondary text-light" placeholder="Car / Bike / Van">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label text-secondary-emphasis">Vehicle plate</label>
                                            <input type="text" class="form-control bg-dark bg-opacity-25 border-secondary text-light" placeholder="ABC-1234">
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-4">
                                        <div class="text-secondary-emphasis small">
                                            By continuing, you confirm the visitor data is accurate.
                                        </div>
                                        <div class="d-flex gap-2">
                                            <button type="button" class="btn btn-outline-light rounded-pill px-4">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary rounded-pill px-4">
                                                Create entry
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq" class="border-top border-secondary">
            <div class="container py-5 pb-6">
                <div class="mb-4">
                    <h2 class="fw-bold display-6">FAQ</h2>
                    <p class="text-secondary-emphasis fs-5 mb-0">
                        Quick answers for teams setting up visitor registration.
                    </p>
                </div>

                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item bg-transparent border-secondary rounded-4 mb-3">
                        <h2 class="accordion-header" id="q1">
                            <button class="accordion-button collapsed bg-dark bg-opacity-25 text-light rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="false" aria-controls="a1">
                                Is this landing page connected to the backend?
                            </button>
                        </h2>
                        <div id="a1" class="accordion-collapse collapse" aria-labelledby="q1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary-emphasis">
                                The UI preview is static until you wire routes and controllers.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item bg-transparent border-secondary rounded-4 mb-3">
                        <h2 class="accordion-header" id="q2">
                            <button class="accordion-button collapsed bg-dark bg-opacity-25 text-light rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false" aria-controls="a2">
                                Can staff use this at the gate?
                            </button>
                        </h2>
                        <div id="a2" class="accordion-collapse collapse" aria-labelledby="q2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary-emphasis">
                                Yes—this layout is designed for readability and quick scanning.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item bg-transparent border-secondary rounded-4 mb-3">
                        <h2 class="accordion-header" id="q3">
                            <button class="accordion-button collapsed bg-dark bg-opacity-25 text-light rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#a3" aria-expanded="false" aria-controls="a3">
                                Do you support vehicle details?
                            </button>
                        </h2>
                        <div id="a3" class="accordion-collapse collapse" aria-labelledby="q3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary-emphasis">
                                Your system can register vehicles—this page visually supports that concept.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item bg-transparent border-secondary rounded-4">
                        <h2 class="accordion-header" id="q4">
                            <button class="accordion-button collapsed bg-dark bg-opacity-25 text-light rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#a4" aria-expanded="false" aria-controls="a4">
                                Where can I add login/admin screens?
                            </button>
                        </h2>
                        <div id="a4" class="accordion-collapse collapse" aria-labelledby="q4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary-emphasis">
                                Once you create those routes, update the “Get started” buttons to link to them.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-top border-secondary bg-dark">
        <div class="container py-4 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div class="text-secondary-emphasis small">
                Developed by <span class="text-light fw-semibold">Kamal</span> · © {{ date('Y') }}
            </div>
            <div class="d-flex flex-wrap gap-2">
                <a href="#features" class="btn btn-outline-secondary rounded-pill px-4 py-2">Features</a>
                <a href="#how-it-works" class="btn btn-outline-secondary rounded-pill px-4 py-2">How it works</a>
                <a href="#faq" class="btn btn-outline-secondary rounded-pill px-4 py-2">FAQ</a>
            </div>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
{{-- 
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#060814">

    <title>Visitor Registration System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Subtle ambient glow (purely visual). */
        @keyframes floaty {
            0%, 100% { transform: translate3d(0, 0, 0); opacity: .9; }
            50% { transform: translate3d(0, -10px, 0); opacity: 1; }
        }

        .noise {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='160' height='160'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='160' height='160' filter='url(%23n)' opacity='.35'/%3E%3C/svg%3E");
            background-size: 160px 160px;
        }
    </style>
</head>

<body class="min-h-screen bg-[#060814] text-slate-100 antialiased">
<div class="relative overflow-hidden">
    <!-- Background gradients -->
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -top-24 left-1/2 h-[520px] w-[520px] -translate-x-1/2 rounded-full bg-fuchsia-500/20 blur-3xl animate-[floaty_6s_ease-in-out_infinite]"></div>
        <div class="absolute -bottom-28 -left-24 h-[420px] w-[420px] rounded-full bg-cyan-500/20 blur-3xl animate-[floaty_7s_ease-in-out_infinite]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(closest-side_at_20%_0%,rgba(99,102,241,0.25),transparent_60%),radial-gradient(closest-side_at_90%_20%,rgba(34,211,238,0.18),transparent_55%),radial-gradient(closest-side_at_50%_100%,rgba(217,70,239,0.12),transparent_60%)]"></div>
    </div>

    <!-- Navigation -->
    <header class="sticky top-0 z-50 border-b border-white/10 bg-[#060814]/60 backdrop-blur">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
            <a href="#top" class="group inline-flex items-center gap-3">
                <span class="relative grid h-10 w-10 place-items-center rounded-xl border border-white/15 bg-white/5">
                    <span class="absolute inset-0 rounded-xl bg-gradient-to-br from-cyan-400/40 via-fuchsia-400/20 to-transparent opacity-80 blur"></span>
                    <span class="relative text-sm font-semibold tracking-wide">VR</span>
                </span>
                <span class="text-sm font-semibold">
                    Visitor <span class="text-cyan-300">Registration</span>
                </span>
            </a>

            <nav class="hidden items-center gap-7 md:flex text-sm">
                <a href="#features" class="text-slate-200/80 hover:text-slate-100 transition">Features</a>
                <a href="#how-it-works" class="text-slate-200/80 hover:text-slate-100 transition">How it works</a>
                <a href="#faq" class="text-slate-200/80 hover:text-slate-100 transition">FAQ</a>
                <a href="#register" class="inline-flex items-center rounded-full bg-white/5 px-4 py-2 border border-white/10 hover:bg-white/10 transition">
                    Quick register
                </a>
            </nav>

            <div class="md:hidden">
                <details class="relative">
                    <summary class="list-none cursor-pointer rounded-xl border border-white/10 bg-white/5 px-3 py-2 text-sm text-slate-100/90">
                        Menu
                    </summary>
                    <div class="absolute right-0 mt-2 w-56 rounded-xl border border-white/10 bg-[#060814]/90 backdrop-blur p-2 shadow-lg">
                        <a class="block rounded-lg px-3 py-2 text-sm text-slate-200/90 hover:bg-white/5" href="#features">Features</a>
                        <a class="block rounded-lg px-3 py-2 text-sm text-slate-200/90 hover:bg-white/5" href="#how-it-works">How it works</a>
                        <a class="block rounded-lg px-3 py-2 text-sm text-slate-200/90 hover:bg-white/5" href="#faq">FAQ</a>
                        <a class="block rounded-lg px-3 py-2 text-sm text-slate-200/90 hover:bg-white/5" href="#register">Quick register</a>
                    </div>
                </details>
            </div>
        </div>
    </header>

    <!-- Content -->
    <main id="top">
        <!-- Hero -->
        <section class="relative mx-auto max-w-6xl px-6 pt-16 md:pt-20">
            <div class="grid items-center gap-10 lg:grid-cols-12">
                <div class="lg:col-span-7">
                    <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs text-slate-200/90">
                        <span class="h-2 w-2 rounded-full bg-cyan-300 shadow-[0_0_20px_rgba(34,211,238,0.6)]"></span>
                        Futuristic visitor check-in experience
                    </div>

                    <h1 class="mt-6 text-4xl font-semibold leading-tight tracking-tight md:text-5xl lg:text-6xl">
                        Secure. Fast.
                        <span class="block bg-gradient-to-r from-cyan-300 via-fuchsia-300 to-cyan-200 bg-clip-text text-transparent">
                            Built for real gates & real schedules.
                        </span>
                    </h1>

                    <p class="mt-5 max-w-xl text-base leading-relaxed text-slate-200/80 md:text-lg">
                        Welcome to your visitor registration system—designed to keep records clean, approvals smooth, and access consistent.
                        A classic landing layout, with a modern futuristic interface.
                    </p>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
                        <a href="#register" class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-cyan-400 via-fuchsia-400 to-cyan-300 px-6 py-3 font-medium text-slate-950 shadow-[0_20px_60px_rgba(34,211,238,0.25)] hover:brightness-110 transition">
                            Get started
                        </a>
                        <a href="#features" class="inline-flex items-center justify-center rounded-2xl border border-white/10 bg-white/5 px-6 py-3 font-medium text-slate-100 hover:bg-white/10 transition">
                            Explore features
                        </a>
                    </div>

                    <div class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-3">
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <div class="text-xs text-slate-200/70">Check-in</div>
                            <div class="mt-1 text-xl font-semibold">Seconds</div>
                            <div class="mt-1 text-xs text-slate-200/60">Optimized flow for gates</div>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <div class="text-xs text-slate-200/70">Records</div>
                            <div class="mt-1 text-xl font-semibold">Accurate</div>
                            <div class="mt-1 text-xs text-slate-200/60">Clean visitor history</div>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <div class="text-xs text-slate-200/70">Approvals</div>
                            <div class="mt-1 text-xl font-semibold">Simple</div>
                            <div class="mt-1 text-xs text-slate-200/60">From request to entry</div>
                        </div>
                    </div>
                </div>

                <!-- Hero preview card -->
                <div class="lg:col-span-5">
                    <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 p-1 shadow-2xl">
                        <div class="noise absolute inset-0 opacity-[0.08]"></div>
                        <div class="relative rounded-3xl bg-[#0b1024]/70 backdrop-blur">
                            <div class="flex items-center justify-between px-6 py-4 border-b border-white/10">
                                <div class="text-sm font-semibold">Gate Console</div>
                                <div class="flex items-center gap-2 text-xs text-slate-200/80">
                                    <span class="h-2 w-2 rounded-full bg-emerald-300 shadow-[0_0_24px_rgba(52,211,153,0.65)]"></span>
                                    Online
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                        <div class="flex items-center justify-between gap-4">
                                            <div>
                                                <div class="text-xs text-slate-200/70">Next visit</div>
                                                <div class="mt-1 text-lg font-semibold">Today · 15:30</div>
                                            </div>
                                            <div class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-cyan-200">
                                                Ready
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                            <div class="text-xs text-slate-200/70">Location</div>
                                            <div class="mt-1 text-base font-semibold">Main Gate</div>
                                        </div>
                                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                            <div class="text-xs text-slate-200/70">Mode</div>
                                            <div class="mt-1 text-base font-semibold">Visitor ID</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <div class="text-xs text-slate-200/70">Status</div>
                                            <div class="mt-1 text-base font-semibold">Approved · Access Granted</div>
                                        </div>
                                        <div class="h-10 w-10 rounded-2xl border border-white/10 bg-gradient-to-br from-cyan-400/30 via-fuchsia-400/20 to-transparent grid place-items-center">
                                            <svg class="h-5 w-5 text-cyan-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mt-4 h-2 rounded-full bg-white/5 overflow-hidden border border-white/10">
                                        <div class="h-full w-[78%] rounded-full bg-gradient-to-r from-cyan-300 via-fuchsia-300 to-cyan-200"></div>
                                    </div>
                                    <div class="mt-3 flex justify-between text-xs text-slate-200/60">
                                        <span>Verification</span>
                                        <span>Entry</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 text-xs text-slate-200/60">
                        Visual preview only. Your app UI can plug real data into this layout.
                    </p>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features" class="mx-auto max-w-6xl px-6 pt-14 pb-6 md:pt-20">
            <div class="flex items-end justify-between gap-6">
                <div>
                    <h2 class="text-2xl font-semibold tracking-tight md:text-3xl">Features</h2>
                    <p class="mt-2 max-w-2xl text-slate-200/75">
                        A clean experience for staff and visitors—designed for speed, clarity, and control.
                    </p>
                </div>
                <div class="hidden md:block rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-slate-200/80">
                    <span class="text-cyan-200 font-semibold">Futuristic</span> UI · Classic sections
                </div>
            </div>

            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Visitor check-in</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-cyan-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M12 2l3 7h7l-5.6 4.1L18 21l-6-3.8L6 21l1.6-7.9L2 9h7l3-7z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        Fast entry flow that reduces confusion at the gate with a clear, guided interface.
                    </p>
                </article>

                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Approvals workflow</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-fuchsia-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M20 7L10 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 20h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        Approve requests with status visibility—so staff always know what’s happening.
                    </p>
                </article>

                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Search & history</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-cyan-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M10 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" stroke="currentColor" stroke-width="2"/>
                                <path d="M21 21l-4.35-4.35" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        Keep records easy to access—so you can find the right visitor fast.
                    </p>
                </article>

                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Vehicle & ID support</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-fuchsia-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M3 13l2-6h14l2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 13v6h14v-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" stroke="currentColor" stroke-width="2"/>
                                <path d="M17 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        Register vehicle details and IDs for smoother gate operations.
                    </p>
                </article>

                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Modern, readable UI</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-cyan-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M4 6h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <path d="M4 12h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <path d="M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        A futuristic look with classic section structure for an easy first impression.
                    </p>
                </article>

                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Audit-friendly</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-fuchsia-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M12 2l8 4v6c0 5-3.5 9.5-8 10-4.5-.5-8-5-8-10V6l8-4z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 12l2 2 4-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        Clear statuses and consistent records help keep operations reliable.
                    </p>
                </article>
            </div>
        </section>

        <!-- How it works -->
        <section id="how-it-works" class="mx-auto max-w-6xl px-6 pt-10 pb-10 md:pt-14">
            <div class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-10">
                <h2 class="text-2xl font-semibold tracking-tight md:text-3xl">How it works</h2>
                <p class="mt-2 max-w-2xl text-slate-200/75">
                    A simple flow that fits real-world gate procedures.
                </p>

                <div class="mt-8 grid gap-4 lg:grid-cols-4">
                    <div class="rounded-2xl border border-white/10 bg-[#0b1024]/40 p-5">
                        <div class="text-xs text-cyan-200 font-semibold">Step 1</div>
                        <div class="mt-1 text-base font-semibold">Receive request</div>
                        <p class="mt-2 text-sm text-slate-200/70">Capture the visitor info with clarity.</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-[#0b1024]/40 p-5">
                        <div class="text-xs text-cyan-200 font-semibold">Step 2</div>
                        <div class="mt-1 text-base font-semibold">Approve</div>
                        <p class="mt-2 text-sm text-slate-200/70">Update status so staff stay aligned.</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-[#0b1024]/40 p-5">
                        <div class="text-xs text-cyan-200 font-semibold">Step 3</div>
                        <div class="mt-1 text-base font-semibold">Check-in</div>
                        <p class="mt-2 text-sm text-slate-200/70">Fast gate flow with visual confirmation.</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-[#0b1024]/40 p-5">
                        <div class="text-xs text-cyan-200 font-semibold">Step 4</div>
                        <div class="mt-1 text-base font-semibold">Keep history</div>
                        <p class="mt-2 text-sm text-slate-200/70">Search past visits and records quickly.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick register -->
        <section id="register" class="mx-auto max-w-6xl px-6 pb-10 md:pb-14">
            <div class="grid gap-6 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <h2 class="text-2xl font-semibold tracking-tight md:text-3xl">Quick register</h2>
                    <p class="mt-2 text-slate-200/75">
                        This is a UI preview section. Wire it to your real routes/controllers when ready.
                    </p>
                    <div class="mt-6 space-y-3">
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <div class="text-sm font-semibold">Built for clarity</div>
                            <p class="mt-1 text-sm text-slate-200/70">Clean inputs, compact layout, and friendly guidance.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <div class="text-sm font-semibold">Gate-ready visuals</div>
                            <p class="mt-1 text-sm text-slate-200/70">Glass cards and strong contrast for low-light readability.</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <form onsubmit="return false" class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <div class="text-xs text-slate-200/70">Visitor details</div>
                                <div class="mt-1 text-lg font-semibold">Create a new entry</div>
                            </div>
                            <div class="rounded-full border border-white/10 bg-[#0b1024]/40 px-4 py-2 text-xs text-cyan-200">
                                Preview only
                            </div>
                        </div>

                        <div class="mt-6 grid gap-4 sm:grid-cols-2">
                            <label class="block">
                                <span class="text-sm text-slate-200/80">Full name</span>
                                <input type="text" placeholder="e.g. Amina Khan" class="mt-2 w-full rounded-2xl border border-white/10 bg-[#0b1024]/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-200/40 focus:outline-none focus:ring-2 focus:ring-cyan-300/50"/>
                            </label>
                            <label class="block">
                                <span class="text-sm text-slate-200/80">Phone</span>
                                <input type="tel" placeholder="+92 ..." class="mt-2 w-full rounded-2xl border border-white/10 bg-[#0b1024]/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-200/40 focus:outline-none focus:ring-2 focus:ring-cyan-300/50"/>
                            </label>
                            <label class="block sm:col-span-2">
                                <span class="text-sm text-slate-200/80">Purpose of visit</span>
                                <input type="text" placeholder="Meeting, delivery, support..." class="mt-2 w-full rounded-2xl border border-white/10 bg-[#0b1024]/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-200/40 focus:outline-none focus:ring-2 focus:ring-cyan-300/50"/>
                            </label>
                            <label class="block">
                                <span class="text-sm text-slate-200/80">Vehicle type</span>
                                <input type="text" placeholder="Car / Bike / Van" class="mt-2 w-full rounded-2xl border border-white/10 bg-[#0b1024]/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-200/40 focus:outline-none focus:ring-2 focus:ring-cyan-300/50"/>
                            </label>
                            <label class="block">
                                <span class="text-sm text-slate-200/80">Vehicle plate</span>
                                <input type="text" placeholder="ABC-1234" class="mt-2 w-full rounded-2xl border border-white/10 bg-[#0b1024]/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-200/40 focus:outline-none focus:ring-2 focus:ring-cyan-300/50"/>
                            </label>
                        </div>

                        <div class="mt-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                            <div class="text-xs text-slate-200/60">
                                By continuing, you confirm the visitor data is accurate.
                            </div>
                            <div class="flex gap-3">
                                <button type="button" class="rounded-2xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-medium text-slate-100 hover:bg-white/10 transition">
                                    Cancel
                                </button>
                                <button type="submit" class="rounded-2xl bg-gradient-to-r from-cyan-400 via-fuchsia-400 to-cyan-300 px-5 py-3 text-sm font-medium text-slate-950 hover:brightness-110 transition">
                                    Create entry
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq" class="mx-auto max-w-6xl px-6 pb-14 md:pb-20">
            <div class="flex items-end justify-between gap-6">
                <div>
                    <h2 class="text-2xl font-semibold tracking-tight md:text-3xl">FAQ</h2>
                    <p class="mt-2 max-w-2xl text-slate-200/75">
                        Quick answers for teams setting up visitor registration.
                    </p>
                </div>
            </div>

            <div class="mt-8 grid gap-4 lg:grid-cols-2">
                <details class="group rounded-3xl border border-white/10 bg-white/5 p-6">
                    <summary class="cursor-pointer list-none">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base font-semibold">Is this landing page connected to the backend?</span>
                            <span class="text-cyan-200 text-sm group-open:rotate-45 transition">+</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-200/70">The UI preview is static until you wire routes and controllers.</p>
                    </summary>
                </details>

                <details class="group rounded-3xl border border-white/10 bg-white/5 p-6">
                    <summary class="cursor-pointer list-none">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base font-semibold">Can staff use this at the gate?</span>
                            <span class="text-cyan-200 text-sm group-open:rotate-45 transition">+</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-200/70">Yes—this layout is designed for readability and quick scanning.</p>
                    </summary>
                </details>

                <details class="group rounded-3xl border border-white/10 bg-white/5 p-6">
                    <summary class="cursor-pointer list-none">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base font-semibold">Do you support vehicle details?</span>
                            <span class="text-cyan-200 text-sm group-open:rotate-45 transition">+</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-200/70">Your system can register vehicles—this page visually supports that concept.</p>
                    </summary>
                </details>

                <details class="group rounded-3xl border border-white/10 bg-white/5 p-6">
                    <summary class="cursor-pointer list-none">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base font-semibold">Where can I add login/admin screens?</span>
                            <span class="text-cyan-200 text-sm group-open:rotate-45 transition">+</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-200/70">Once you create those routes, update the “Get started” buttons to link to them.</p>
                    </summary>
                </details>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-white/10 bg-[#060814]/70 backdrop-blur">
        <div class="mx-auto max-w-6xl px-6 py-8">
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <div class="text-sm text-slate-200/70">
                    Developed by <span class="text-slate-100 font-semibold">Kamal</span> · © {{ date('Y') }}
                </div>
                <div class="flex flex-wrap gap-3 text-sm">
                    <a href="#features" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-slate-200/80 hover:bg-white/10 transition">Features</a>
                    <a href="#how-it-works" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-slate-200/80 hover:bg-white/10 transition">How it works</a>
                    <a href="#faq" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-slate-200/80 hover:bg-white/10 transition">FAQ</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
--}} 