@extends('layouts.frontend.main')

@section('title', "FAQ's")

@section('meta')
@endsection

@section('content')

<!-- ================= Page Banner ================= -->
<div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-banner-content">
            <h2>FAQ's</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>FAQ's</li>
            </ul>
        </div>
    </div>
</div>

<!-- ================= FAQ Section ================= -->
<div class="faq-area pt-100 pb-100">
    <div class="container">

        <!-- ================= General ================= -->
        <h2 class="mb-4">General</h2>

        <div class="accordion mb-5" id="generalAccordion">

            <!-- Question 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#g1">
                        Why should I choose you over other printing companies in Dubai?
                    </button>
                </h2>
                <div id="g1" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                    <div class="accordion-body">
                        With 25+ years of experience, cutting-edge printing technology, and a commitment to quality, Deluxe Printing ensures top-notch results. Plus, our in-store experience lets you see products firsthand, making us a trusted choice for all your printing needs.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#g2">
                        Can I place an order over the phone?
                    </button>
                </h2>
                <div id="g2" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                    <div class="accordion-body">
                        The easiest way to place an order is through WhatsApp! Just message us, and our team will guide you through the process quickly. You can also reach out via email or phone if needed.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#g3">
                        What are your working hours?
                    </button>
                </h2>
                <div id="g3" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                    <div class="accordion-body">
                        <strong>Store Hours (Monday to Saturday):</strong><br><br>
                        Morning: 9:00 AM – 1:00 PM<br>
                        Lunch: 1:00 PM – 2:00 PM<br>
                        Afternoon: 2:00 PM – 7:00 PM<br><br>

                        <strong>Friday:</strong><br>
                        Morning: 9:00 AM – 1:00 PM<br>
                        Lunch: 1:00 PM – 2:30 PM<br>
                        Afternoon: 2:30 PM – 7:00 PM<br><br>

                        Feel free to reach out for assistance, orders, or inquiries during business hours!
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#g4">
                        Where is your store located, and can I visit in person?
                    </button>
                </h2>
                <div id="g4" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                    <div class="accordion-body">
                        Our store is located in Al Qusais Industrial Area 2, Dubai, UAE. Yes, you’re welcome to visit us to explore our products, check print samples, and discuss your requirements in person.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#g5">
                        Do you offer graphic design services?
                    </button>
                </h2>
                <div id="g5" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                    <div class="accordion-body">
                        We assist clients by providing pictorial representations or drafts for their review and approval.
                    </div>
                </div>
            </div>

        </div>

        <!-- ================= Company ================= -->
        <h2 class="text-blk faq-head2 mt-5">Company</h2>

        <div class="accordion" id="companyAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="companyHeadingOne">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#companyCollapseOne"
                        aria-expanded="false"
                        aria-controls="companyCollapseOne">
                        What printing services do you offer in Dubai?
                    </button>
                </h2>
                <div id="companyCollapseOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="companyHeadingOne"
                    data-bs-parent="#companyAccordion">
                    <div class="accordion-body">
                        We offer digital, offset, large-format, signage, T-shirt, and promotional gift printing in Dubai. From business cards to banners, we cover all your needs.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="companyHeadingTwo">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#companyCollapseTwo"
                        aria-expanded="false"
                        aria-controls="companyCollapseTwo">
                        Do you offer same-day or urgent printing services?
                    </button>
                </h2>
                <div id="companyCollapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="companyHeadingTwo"
                    data-bs-parent="#companyAccordion">
                    <div class="accordion-body">
                        Yes! We provide same-day and express printing for selected products. Contact us to check availability for urgent orders.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="companyHeadingThree">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#companyCollapseThree"
                        aria-expanded="false"
                        aria-controls="companyCollapseThree">
                        What payment methods do you offer?
                    </button>
                </h2>
                <div id="companyCollapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="companyHeadingThree"
                    data-bs-parent="#companyAccordion">
                    <div class="accordion-body">
                        We accept cash, credit/debit cards, and online payments. Let us know your preferred option at checkout.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="companyHeadingFour">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#companyCollapseFour"
                        aria-expanded="false"
                        aria-controls="companyCollapseFour">
                        What is the turnaround time for printing orders?
                    </button>
                </h2>
                <div id="companyCollapseFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="companyHeadingFour"
                    data-bs-parent="#companyAccordion">
                    <div class="accordion-body">
                        Standard orders take 2–5 days. Urgent requests can be completed within 24 hours after discussion with the Sales representative. Bulk orders may take longer.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="companyHeadingFive">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#companyCollapseFive"
                        aria-expanded="false"
                        aria-controls="companyCollapseFive">
                        Do you deliver across Dubai & UAE?
                    </button>
                </h2>
                <div id="companyCollapseFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="companyHeadingFive"
                    data-bs-parent="#companyAccordion">
                    <div class="accordion-body">
                        Yes! We offer delivery across Dubai, Abu Dhabi, the UAE, and GCC countries including Oman and Saudi Arabia.
                    </div>
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="companyHeadingSix">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#companyCollapseSix"
                        aria-expanded="false"
                        aria-controls="companyCollapseSix">
                        How can I place an order?
                    </button>
                </h2>
                <div id="companyCollapseSix"
                    class="accordion-collapse collapse"
                    aria-labelledby="companyHeadingSix"
                    data-bs-parent="#companyAccordion">
                    <div class="accordion-body">
                        You can order via our website, phone call, WhatsApp, or email. Our team will assist you with design, printing, and delivery.
                    </div>
                </div>
            </div>

        </div>

        <!-- ================= Orders ================= -->
        <h2 class="text-blk faq-head2 mt-5">Orders</h2>

        <div class="accordion" id="ordersAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="ordersHeadingOne">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#ordersCollapseOne"
                        aria-expanded="false"
                        aria-controls="ordersCollapseOne">
                        I can’t find the product I’d like to order on your page.
                    </button>
                </h2>
                <div id="ordersCollapseOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="ordersHeadingOne"
                    data-bs-parent="#ordersAccordion">
                    <div class="accordion-body">
                        If you can't find the product, try using our website's search option. If it's still unavailable, contact us for assistance, and we can help with custom printing options.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="ordersHeadingTwo">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#ordersCollapseTwo"
                        aria-expanded="false"
                        aria-controls="ordersCollapseTwo">
                        Do you accept custom orders with unique specifications?
                    </button>
                </h2>
                <div id="ordersCollapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="ordersHeadingTwo"
                    data-bs-parent="#ordersAccordion">
                    <div class="accordion-body">
                        Yes! We specialize in custom printing and can accommodate unique sizes, materials, and finishes. Share your specifications with us, and we’ll bring your vision to life.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="ordersHeadingThree">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#ordersCollapseThree"
                        aria-expanded="false"
                        aria-controls="ordersCollapseThree">
                        Do you provide urgent printing services?
                    </button>
                </h2>
                <div id="ordersCollapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="ordersHeadingThree"
                    data-bs-parent="#ordersAccordion">
                    <div class="accordion-body">
                        Absolutely! Deluxe Printing offers urgent printing services to meet your time-sensitive needs, subject to certain conditions.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="ordersHeadingFour">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#ordersCollapseFour"
                        aria-expanded="false"
                        aria-controls="ordersCollapseFour">
                        Will I receive digital proof before my order is printed?
                    </button>
                </h2>
                <div id="ordersCollapseFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="ordersHeadingFour"
                    data-bs-parent="#ordersAccordion">
                    <div class="accordion-body">
                        Yes, we provide digital proofs to ensure your design looks perfect before printing. Once you approve the proof, we proceed with production.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="ordersHeadingFive">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#ordersCollapseFive"
                        aria-expanded="false"
                        aria-controls="ordersCollapseFive">
                        How long does it take to print my order?
                    </button>
                </h2>
                <div id="ordersCollapseFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="ordersHeadingFive"
                    data-bs-parent="#ordersAccordion">
                    <div class="accordion-body">
                        The turnaround time depends on the complexity and size of the order. Smaller orders typically take 1–2 days, while larger or custom orders may take 3–5 business days. Expedited services are also available if needed.
                    </div>
                </div>
            </div>

        </div>

        <!-- ================= File Preparation ================= -->
        <h2 class="text-blk faq-head2 mt-5">File Preparation</h2>

        <div class="accordion" id="filePrepAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="filePrepHeadingOne">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#filePrepCollapseOne"
                        aria-expanded="false"
                        aria-controls="filePrepCollapseOne">
                        What file formats do you accept for printing?
                    </button>
                </h2>
                <div id="filePrepCollapseOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="filePrepHeadingOne"
                    data-bs-parent="#filePrepAccordion">
                    <div class="accordion-body">
                        We accept high-quality file formats such as PDF, AI, and EPS. For the best results, we recommend submitting vector files to ensure sharp and accurate prints. If you are providing an image file, please ensure it has a minimum resolution of 300 DPI for optimal quality.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="filePrepHeadingTwo">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#filePrepCollapseTwo"
                        aria-expanded="false"
                        aria-controls="filePrepCollapseTwo">
                        Do I need to include bleed and crop marks in my design?
                    </button>
                </h2>
                <div id="filePrepCollapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="filePrepHeadingTwo"
                    data-bs-parent="#filePrepAccordion">
                    <div class="accordion-body">
                        Yes, adding bleed and crop marks ensures that your design prints correctly without white edges. We recommend a bleed of at least 3mm on all sides.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="filePrepHeadingThree">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#filePrepCollapseThree"
                        aria-expanded="false"
                        aria-controls="filePrepCollapseThree">
                        How do I make sure my images don’t appear blurry or pixelated?
                    </button>
                </h2>
                <div id="filePrepCollapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="filePrepHeadingThree"
                    data-bs-parent="#filePrepAccordion">
                    <div class="accordion-body">
                        To avoid blurry or pixelated prints, make sure your images are high resolution (at least 300 DPI) and sized correctly for print. Using vector files whenever possible will also ensure sharp and clear results.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="filePrepHeadingFour">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#filePrepCollapseFour"
                        aria-expanded="false"
                        aria-controls="filePrepCollapseFour">
                        What color mode should my file be in—RGB or CMYK?
                    </button>
                </h2>
                <div id="filePrepCollapseFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="filePrepHeadingFour"
                    data-bs-parent="#filePrepAccordion">
                    <div class="accordion-body">
                        Your file should be in CMYK color mode for accurate color reproduction in printing. RGB is intended for digital screens and may not print as expected.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="filePrepHeadingFive">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#filePrepCollapseFive"
                        aria-expanded="false"
                        aria-controls="filePrepCollapseFive">
                        Can I see a proof of my design before printing?
                    </button>
                </h2>
                <div id="filePrepCollapseFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="filePrepHeadingFive"
                    data-bs-parent="#filePrepAccordion">
                    <div class="accordion-body">
                        Yes, we provide digital proofs (mockups) to ensure the final print meets your expectations. Once approved, we proceed with production.
                    </div>
                </div>
            </div>

        </div>

        <!-- ================= Payment / Delivery ================= -->
        <h2 class="text-blk faq-head2 mt-5">Payment / Delivery</h2>

        <div class="accordion" id="paymentDeliveryAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="paymentHeadingOne">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#paymentCollapseOne"
                        aria-expanded="false"
                        aria-controls="paymentCollapseOne">
                        What payment methods do you offer?
                    </button>
                </h2>
                <div id="paymentCollapseOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="paymentHeadingOne"
                    data-bs-parent="#paymentDeliveryAccordion">
                    <div class="accordion-body">
                        We accept various payment methods, including cash, credit/debit cards, bank transfers, and online payments. Let us know your preferred option at checkout.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="paymentHeadingTwo">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#paymentCollapseTwo"
                        aria-expanded="false"
                        aria-controls="paymentCollapseTwo">
                        Can I get an official invoice for my order?
                    </button>
                </h2>
                <div id="paymentCollapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="paymentHeadingTwo"
                    data-bs-parent="#paymentDeliveryAccordion">
                    <div class="accordion-body">
                        Yes, we provide official invoices for all orders. If you need a VAT invoice or specific details, just let us know when placing your order.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="paymentHeadingThree">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#paymentCollapseThree"
                        aria-expanded="false"
                        aria-controls="paymentCollapseThree">
                        Do you offer delivery services outside Dubai?
                    </button>
                </h2>
                <div id="paymentCollapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="paymentHeadingThree"
                    data-bs-parent="#paymentDeliveryAccordion">
                    <div class="accordion-body">
                        Yes, we can arrange delivery to locations outside Dubai. Contact us with your address, and we’ll provide details on shipping options and costs.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="paymentHeadingFour">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#paymentCollapseFour"
                        aria-expanded="false"
                        aria-controls="paymentCollapseFour">
                        Do you accept payments via bank transfer?
                    </button>
                </h2>
                <div id="paymentCollapseFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="paymentHeadingFour"
                    data-bs-parent="#paymentDeliveryAccordion">
                    <div class="accordion-body">
                        Yes, we accept bank transfers. If you're using a local UAE bank, the process is straightforward. For urgent jobs or international payments, online payment is preferred for faster processing. Please send the transaction confirmation for order processing.
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection