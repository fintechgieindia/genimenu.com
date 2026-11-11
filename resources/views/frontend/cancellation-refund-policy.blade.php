@php
    $meta = [
        'title' => 'Cancellation & Refund Policy | Geni Menu Restaurant Billing Software',
        'description' => 'Read Geni Menu\'s cancellation and refund policy for restaurant billing software subscriptions, covering plan cancellations, refunds, and eligibility.',
        'keywords' => 'Geni Menu refund policy, restaurant software cancellation policy, Geni Menu subscription refund, restaurant billing software refund terms, WeGeni cancellation policy, restaurant software money back policy, Geni Menu cancellation terms, restaurant POS refund policy',
    ];
@endphp

@extends('layouts.frontend-master')


@section('content')
<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800&display=swap');
@import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');

body {
    background-color: #FFF4E5 !important;
}

.policy-page-wrapper {
    background-color: #FFF4E5 !important;
    padding-top: 110px;
    padding-bottom: 70px;
    font-family: 'Glacial Indifference', sans-serif !important;
    color: #381A0D;
}

.policy-card {
    background: #FFFFFF !important;
    border: 1px solid #E8DFD5 !important;
    border-radius: 16px !important;
    box-shadow: 0 6px 24px rgba(50, 24, 15, 0.05) !important;
    padding: 34px 28px;
}

@media (min-width: 640px) {
    .policy-card {
        padding: 48px 46px;
    }
}

.policy-card h1,
.policy-card h2,
.policy-card h3,
.policy-card h4,
.policy-card h5,
.policy-card h6 {
    font-family: 'Cinzel', serif !important;
    text-transform: uppercase !important;
    font-weight: 700 !important;
    color: #21160F !important;
    letter-spacing: 0.04em;
}

.policy-card h1 {
    font-size: 26px !important;
    color: #32180F !important;
    text-align: center;
}

@media (min-width: 640px) {
    .policy-card h1 {
        font-size: 32px !important;
    }
}

.policy-card h2 {
    font-size: 19px !important;
    color: #572A13 !important;
    margin-top: 28px !important;
    margin-bottom: 12px !important;
    border-bottom: 1px solid #F1E9DF;
    padding-bottom: 8px;
}

.policy-card h3 {
    font-size: 15.5px !important;
    color: #6E4028 !important;
    margin-top: 16px !important;
    margin-bottom: 8px !important;
}

.policy-card p,
.policy-card li,
.policy-card span,
.policy-card strong {
    font-family: 'Glacial Indifference', sans-serif !important;
}

.policy-card p,
.policy-card li {
    font-size: 15px;
    line-height: 1.7;
    color: #4A3A31;
}

.policy-card a {
    color: #876039 !important;
    text-decoration: underline;
    transition: color 0.2s;
}

.policy-card a:hover {
    color: #572A13 !important;
}

.policy-highlight-box {
    background-color: #FAF4ED !important;
    border: 1px solid #E8DFD5 !important;
    border-radius: 10px;
    padding: 16px 20px;
}
</style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <div class="policy-page-wrapper px-4 sm:px-6">
        <div class="mx-auto max-w-4xl policy-card">
            <header class="mb-8">
                <h1 class="font-bold mb-4">Cancellation and Refund Policy - Geni Menu</h1>
                <p class="text-xl text-gray-600"></p>
                <p class="text-sm text-gray-500 mt-2 text-center" style="font-family: 'Glacial Indifference', sans-serif;">Last updated: {{ date('F j, Y') }}</p>
            </header>

            <section class="mb-8">
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 mb-6">
                    <p class="text-blue-800">
                        At Geni Fast, a product of WeGeni IT Services and Consulting (OPC) Private Limited, we offer
                        subscription-based access to our restaurant ERP and billing platform. Once a subscription is
                        activated or a payment is processed, it is considered final.
                    </p>
                </div>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">No Cancellations</h2>
                <div class="bg-red-50 border-l-4 border-red-400 p-6 mb-4">
                    <p class="text-red-800 font-medium mb-2">
                        We do not accept requests for subscription cancellation after payment has been successfully
                        processed.
                    </p>
                    <p class="text-red-700 text-sm">
                        Subscriptions are billed on a prepaid basis (monthly or annually, as per your selected plan), and
                        once payment is made, it is non-cancellable.
                    </p>
                </div>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">No Refunds</h2>
                <p class="mb-4">
                    We do not provide refunds for any payments made, whether in full or part. This includes (but is not
                    limited to):
                </p>

                <div class="bg-gray-50 rounded-lg p-6 mb-4">
                    <ul class="list-disc list-inside space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i class="bi bi-x-circle-fill text-danger me-2" style="color: #9c1f1f;"></i>
                            <span>Partial usage of services</span>
                        </li>
                        <li class="flex items-start">
                            <i class="bi bi-x-circle-fill text-danger me-2" style="color: #9c1f1f;"></i>
                            <span>Unused period in a subscription cycle</span>
                        </li>
                        <li class="flex items-start">
                            <i class="bi bi-x-circle-fill text-danger me-2" style="color: #9c1f1f;"></i>
                            <span>Downtime due to third-party service issues (e.g., internet, hardware, or payment
                                gateways)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="bi bi-x-circle-fill text-danger me-2 " style="color: #9c1f1f;"></i>
                            <span>Customer-requested service discontinuation</span>
                        </li>
                    </ul>
                </div>
            </section>


            <section class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Support & Resolution</h2>
                <p class="mb-4">
                    If you experience any issues or dissatisfaction with the service, please contact our support team. While
                    we do not provide refunds, we are happy to investigate service-related concerns and assist in resolving
                    them promptly.
                </p>

                <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                    <h3 class="font-semibold text-green-900 mb-4">Contact Support</h3>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <i class="bi bi-envelope-fill text-success me-3"></i>
                            <span class="font-medium text-green-800">Email:</span>
                            <a href="mailto:we@wegeni.com" style="color: #b39271;"
                                class="ml-2 text-blue-600 underline">we@wegeni.com</a>
                        </div>
                        <div class="flex items-center">
                            <i class="bi bi-telephone-fill text-success me-3"></i>
                            <span class="font-medium text-green-800">Phone:</span>
                            <a href="tel:+919047755506" style="color: #b39271;" class="ml-2 text-blue-600 underline">+91
                                90477555066</a>
                        </div>
                    </div>
                </div>
            </section>


            {{-- <section class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Payment Processing Information</h2>
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6">
                    <h3 class="font-semibold text-yellow-900 mb-2">Razorpay Integration</h3>
                    <p class="text-yellow-800 text-sm mb-2">
                        All payments are processed securely through Razorpay, our trusted payment gateway partner. Once a
                        payment is successfully processed through Razorpay, it is considered final and non-refundable.
                    </p>
                    <p class="text-yellow-700 text-sm">
                        For payment-related technical issues, please contact our support team with your transaction details.
                    </p>
                </div>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Subscription Management</h2>
                <div class="space-y-4">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-900 mb-2">Monthly Subscriptions</h3>
                        <p class="text-gray-700 text-sm">
                            Monthly subscriptions are billed in advance and provide access to services for the entire
                            billing period. No partial refunds are available for unused days within the month.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-900 mb-2">Annual Subscriptions</h3>
                        <p class="text-gray-700 text-sm">
                            Annual subscriptions are billed in advance for the full year and provide access to services for
                            the entire 12-month period. No refunds are available for unused months.
                        </p>
                    </div>
                </div>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Service Continuity</h2>
                <p class="mb-4">
                    We strive to provide uninterrupted service access throughout your subscription period. However, we are
                    not liable for:
                </p>

                <ul class="list-disc list-inside mb-4 space-y-2 text-gray-700">
                    <li>Temporary service interruptions due to maintenance</li>
                    <li>Third-party service provider outages</li>
                    <li>Internet connectivity issues on the user's end</li>
                    <li>Hardware or infrastructure failures beyond our control</li>
                </ul>
            </section> --}}

            <section class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Legal Note</h2>
                <div class="bg-red-50 border border-red-200 rounded-lg p-6">
                    <p class="text-red-800 font-medium mb-2">
                        Important Legal Disclaimer
                    </p>
                    <p class="text-red-700 text-sm">
                        By purchasing or subscribing to Geni Fast, users explicitly acknowledge and accept that
                        cancellations and refunds are not permitted, and no disputes will be entertained for completed
                        transactions unless legally required under applicable Indian laws.
                    </p>
                </div>
            </section>

            {{-- <section class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Governing Law</h2>
                <p class="mb-4">
                    This Cancellation and Refund Policy is governed by the laws of India. Any disputes arising from this
                    policy shall be subject to the exclusive jurisdiction of the courts in Namakkal District, Tamil Nadu.
                </p>
            </section> --}}

            <section class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Contact Information</h2>
                <p class="mb-4">For any questions regarding this policy, please contact:</p>

                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Customer Support</h3>
                    <p class="mb-2"><strong>Email:</strong> <a href="mailto:we@wegeni.com" class="text-blue-600 underline"
                            style="color: #b39271;">we@wegeni.com</a></p>
                    <p class="mb-4"><strong>Phone:</strong> <a href="tel:+919047755506" class="text-blue-600 underline"
                            style="color: #b39271;">+91 90477555066</a></p>
                </div>

                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Business Address</h3>
                    <p class="text-gray-700 text-sm">
                        WeGeni IT Services and Consulting (OPC) Private Limited<br>
                        13/9, 2nd Floor, HDFC Bank Upstairs, West Car Street,<br>
                        Tiruchengode, Tamil Nadu – 637211
                    </p>
                </div>
            </section>

            <footer class="border-t pt-6 mt-8 mb-3">
                <div class="bg-orange-50 border border-orange-200 rounded-lg p-6">
                    <p class="text-orange-800 font-medium mb-2">
                        By using Geni Fast services, you acknowledge that you have read, understood, and agreed to this
                        Cancellation and Refund Policy.
                    </p>
                    <p class="text-orange-600 text-sm">
                        This policy is effective from April 1, 2025, and applies to all subscriptions and payments made
                        thereafter.
                    </p>
                </div>
            </footer>
        </div>
    </div>
@endsection