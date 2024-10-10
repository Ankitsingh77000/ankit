<?php
session_start();

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
//     header("location: login.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include ("navbar.php"); ?>
    <style>
        .hidden {
            position: relative;
            background: linear-gradient(100deg, #e9f8e9, #a1b6b0);
        }
    </style>
    <div class="inner_container">
        <h1>Privacy Policy</h1>
        <h4>Information Collection and Use</h4>
        <p>We collect several different types of information for various purposes to provide and improve our Service to
            you.</br>

            <span style="font-weight:bold">Types of Data Collected</span><br>

        <span style="font-weight:bold">Personal Data</span>
        <br>

        While using our Service, we may ask you to provide us with certain personally identifiable information that
        can be used to contact or identify you. Personally identifiable information may include,
        but is not limited to:
        <br>
        <br>
        <ul>
            <li>Email address</li>
            <li>Phone number</li>
            <li>Cookies and Usage Data</li>
            <li>First name and last name</li>
            <li>Address, State, Province, ZIP/Postal code, City</li>
        </ul>



        <span style="font-weight:bolder;">Introduction and Scope:</span> Start with an introduction that explains the
        purpose and scope of the privacy policy.
        Clearly state that the policy applies to the website and any related services provided.</br></br>

        <span style="font-weight:bolder;">Information Collection:</span> Describe the types of personal information that
        the website collects from users. This
        may include names, contact details, payment information, travel preferences, and any other relevant data. Be
        specific about the purpose of collecting each type of information.</br></br>

        <span style="font-weight:bolder;">Information Use and Sharing:</span> Explain how the collected information will
        be used. For a traveling website, this
        may include processing bookings, providing customer support, personalizing travel recommendations, and sending
        promotional offers. Also, clarify if the information will be shared with third parties, such as travel partners
        or service providers, and provide details on how user consent will be obtained for such sharing.</br></br>

        <span style="font-weight:bolder;">Data Security:</span> Assure users that their personal information will be
        stored securely and protected from
        unauthorized access, loss, or misuse. Mention the security measures in place, such as encryption, firewalls, and
        regular security audits. Emphasize compliance with relevant data protection regulations, such as the GDPR or
        CCPA.</br></br>

        <span style="font-weight:bolder;">Cookies and Tracking Technologies:</span> Explain the use of cookies and other
        tracking technologies on the website.
        Describe the purpose of these technologies, the types of data collected, and how users can manage their
        preferences or opt-out if desired.</br></br>

        <span style="font-weight:bolder;">User Rights:</span> Inform users about their rights regarding their personal
        information. This may include the right to
        access, correct, or delete their data, as well as the right to withdraw consent or object to certain processing
        activities. Provide instructions on how users can exercise these rights.</br></br>

        <span style="font-weight:bolder;">Third-Party Links:</span> If the website contains links to third-party
        websites or services, clarify that the privacy
        policy does not apply to those external sites. Advise users to review the privacy policies of those third
        parties before providing any personal information.</br></br>

        <span style="font-weight:bolder;">Policy Updates:</span> State that the privacy policy may be updated from time
        to time and explain how users will be
        notified of any changes. Encourage users to regularly review the policy for updates.</br></br>
        </p>

        <div class="mission">
            <h2>Refund Policy</h2>
            <br>
            <h4>Thank you for using [ExploreQuest].</h4>
            <p>This Refund Policy applies to the purchases made on our website [<a style="text-decoration:none;color:red;"
                    href="https://explorequest.42web.io">https://explorequest.42web.io</a>].
                </br></br>
                <span style="font-weight:bolder;">Refund Eligibility</span></br></br>

                We strive to ensure your satisfaction with every purchase made on our website. Refunds may be provided
                under the following circumstances:</br></br>

                <span style="font-weight:bolder;">Cancellation by the Customer:</span> If you decide to cancel your
                booking, refunds will be issued according to
                the terms and conditions of the booking. Please refer to your booking confirmation or contact our
                customer service for details.</br></br>

                <span style="font-weight:bolder;">Service Unavailability:</span> In the event that the service you
                booked becomes unavailable due to
                circumstances beyond our control, such as weather conditions, natural disasters, or closure of
                attractions, we will provide a full refund.</br></br>

                <span style="font-weight:bolder;">Booking Errors:</span> If there is an error in the booking process
                resulting in duplicate bookings or incorrect
                charges, please contact us immediately for assistance. We will refund any overcharges or incorrect
                bookings promptly.</br></br>

                <span style="font-weight:bolder;">Refund Process</span></br></br>

                To request a refund, please contact our customer service team at [Customer Service Email] or [Customer
                Service Phone Number]. Please provide your booking details and the reason for the refund request. Our
                team will review your request and process the refund accordingly.</br></br>

                <span style="font-weight:bolder;">Refund Timeframe</span></br></br>

                Refunds will be processed within [7 Days] business days of receiving the refund request.
                Please note that it may take additional time for the refund to appear in your account depending on your
                payment method and financial institution.</br></br>

                <span style="font-weight:bolder;">Non-Refundable Items</span></br></br>

                Some services or products offered on our website may be non-refundable. Please check the terms and
                conditions of the specific service or product before making a purchase.</br></br>

                <span style="font-weight:bolder;">Contact Us</span></br></br>

                If you have any questions about our Refund Policy, please contact us at <span
                    style="font-weight:bolder;">[singhankit49793@gmail.com]</span> or
                <span style="font-weight:bolder;">[+917700063943].</span></br></br>
                <span style="font-weight:bolder;">Our Business Address :- [ExploreQuest,Near Ramabai Ambedkar
                    Statue,Ghatkopar East,Mumbai 400075.]</span></br></br>
            </p>
        </div>
    </div>


    <style>
        .hidden {
            position: relative;
            background: linear-gradient(100deg, #e9f8e9, #a1b6b0);
            height: 80px;
        }

        .inner_container {
            font-family: Arial, sans-serif;
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        .inner_container h1 {
            font-family: Arial, sans-serif;
            text-align: center;
            color: #333;
        }

        .inner_container p {
            font-family: Arial, sans-serif;
            color: #666;
            line-height: 1.6;
        }

        .mission {
            font-family: Arial, sans-serif;
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .mission h2 {
            font-family: Arial, sans-serif;
            color: #333;
        }
    </style>
    <?php include ("footer.php"); ?>
</body>

</html>