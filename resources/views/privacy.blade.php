@extends('layouts.app')

@section('content')
@include('landing.nav')

<div class="bg-body-tertiary min-vh-100 d-flex flex-row align-items-center">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-9 col-xl-10">
                <h1 class="display-4 text-primary mt-5 fw-medium">
                    Privacy Policy
                </h1>
                <p class="text-muted">
                    At Axleshift, your privacy is important to us. This Privacy Policy
                    outlines how we collect, use, and protect your information.
                    <br />
                    Last Updated: Sun, March 16 2025
                </p>
                <div class="mb-3">
                    <h3>Information We Collect</h3>
                    <div class="ms-3">
                        <h5>Personal Information:</h5>
                        <p>We may collect personal information that you provide directly to us, such as your name, email address, and shipment information.</p>
                        <div class="mb-3"></div>
                        <h5>Usage Data:</h5>
                        <p>We may collect information about how you use our services, including IP address, user agent, geolocation, console errors, and URL visits.</p>
                        <div class="mb-3"></div>
                        <h5>How We Use Your Information</h5>
                        <p>We use your information to:</p>
                        <ul>
                            <li>Provide and improve our services.</li>
                            <li>Communicate with you about your account and our services.</li>
                            <li>Authenticate your account.</li>
                            <li>Secure our services.</li>
                        </ul>
                    </div>
                </div>
                <div class="mb-3">
                    <h3>Data Security</h3>
                    <p>We implement reasonable security measures to protect your information. However, no method of transmission over the internet or method of electronic storage is 100% secure.</p>
                </div>
                <div class="mb-3">
                    <h3>Sharing Your Information</h3>
                    <p>We do not sell or rent your personal information to third parties. We may share your information with trusted partners who assist us in operating our services, as long as those parties agree to keep your information confidential.</p>
                </div>
                <div class="mb-3">
                    <h3>Your Rights</h3>
                    <p>Depending on your location, you may have certain rights regarding your personal information, including the right to access, correct, or delete your information.</p>
                </div>
                <div class="mb-3">
                    <h3>Changes to This Privacy Policy</h3>
                    <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page.</p>
                </div>
                <div class="mb-3">
                    <h3>Contact Information</h3>
                    <p>For any questions about these Terms, please contact us at axleshift@gmail.com.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('landing.footer')
@endsection