<?php

$privacyEmail = config('boilerplate.privacy_email');

return [

    'intro' => '
        <p>
            The privacy and protection of your data is of great concern to us. This document describes any collection, usage and disclosure of personal information when using various services of our website. It also provides information about your rights and how they are protected.
        </p>
        <p>
            We collect and process your data exclusively based on existing laws - e.g. the European General Data Protection Regulation (&quot;GDPR&quot;). The personal information we collect is used to provide and improve our services. We will never use or share any of your personal information except as described in this policy. By choosing to use our services, you agree to the collection and use of information in accordance with this privacy policy.
        </p>
        ',

    'rights_header' => 'Your Data Protection Rights',
    'rights' => '
        <p>
            We handle your data in accordance with the European General Data Protection Regulation (&quot;GDPR&quot;), which gives people extensive rights with respect to how their personal data is collected and processed. These rights include:
        </p>
        <ul>
            <li><strong>Right of access</strong> to the personal information we gather about you, and how we the share, store and process that information.</li>
            <li><strong>Right to correction</strong> of your personal information.</li>
            <li><strong>Right to erasure</strong> of your personal data from our servers.</li>
            <li><strong>Right to complain</strong> with a supervisory authority about our handling of your data.</li>
            <li><strong>Right to restrict processing</strong> of your personal information.</li>
            <li><strong>Right to object</strong> to how your personal information is processed.</li>
            <li><strong>Right to portability</strong> of your personal information over to you.</li>
        </ul>
        <p>
            If you have questions or requests regarding these rights, feel free to contact us at <a href="mailto:'.$privacyEmail.'">'.$privacyEmail.'</a>.
        </p>
        ',


    'security_header' => 'Data Security',
    'security' => '
        <p>
            We take many technical and organizational measures to provide a secure transmission and storage of any collected data and to guard it against manipulation or unauthorized access. Any communication between your device, this website and any further backend services will be encrypted via SSL. You can verify the SSL-Encryption in your browser via the lock symbol in the address bar.
        </p>
        <p>
            All data will be stored on servers of our service providers. Collection and usage of this data is based on contracts with those service providers according to Article 28 of the GDPR.
        </p>
        ',

    'cookies_header' => 'Cookies',
    'cookies' => '
        <p>
            Our website uses so called &quot;cookies&quot;, which are small text files processed and stored on your device by your web browser. They are used to store various types of information to enable certain functionality of our website.
        </p>
        <p>
            Cookies may be set by our website itself (&quot;first-party cookies&quot;), or by third-party websites whose services we use (e.g. on payment-related transactions or for web analytics). On an initial visit to our site, only technically mandatory non-third-party cookies are used.
        </p>
        <p>
            Most browsers allow their users to view and delete already set cookies. Furthermore, you can also configure your browser not to accept any cookies at all. But be aware that this will hinder our website from functioning properly.
        </p>
        ',
    'first_party_cookies_intro' => 'Here is a complete overview of all technically mandatory <strong>&quot;first-party-cookies&quot;</strong> set by our website:',
    'third_party_cookies_intro' => 'And these are the <strong>&quot;third-party-cookies&quot;</strong> set by using various parts of our website:',

    'cookie_name' => 'Name',
    'cookie_purpose' => 'Purpose',
    'cookie_written_on' => 'Written on',
    'cookie_duration' => 'Duration',
    'cookie_origin' => 'Origin',

    'cookie_purpose_session' => 'The so called &quot;Session” cookie allows us to store and retrieve information about your current visit (e.g. the selected language or login-state).',
    'cookie_purpose_xsrf' => 'A security-related cookie used to prevent so called &quot;Cross-Site Request Forgery” attacks.	',
    'cookie_purpose_accept_test_phase' => 'On your first visit on our website during its test phase, a warning will be displayed. The purpose of this cookie is to display that warning only on your first visit.',
    'cookie_purpose_accept_cookies' => 'Stores your choice of the cookie dialog displayed on your first visit and stops the website from asking you again.',
    'cookie_purpose_google_analytics' => 'These cookies are written by Google Analytics which allows us understand and improve user experience and is used for statistical purposes. (For more info see the Google Analytics section below.)',

    'cookie_written_on_every_visit' => 'Every visit',
    'cookie_written_on_accept_test_phase' => 'Acknowledging the &quot;Test Operation” dialog popping up on your first visit to our website during its test phase',
    'cookie_written_on_accept_cookies' => 'Clicking one of the choices in the cookie notification dialog popping up on your first visit to our website',
    'cookie_written_on_accept_corresponding_cookies' => 'Accepting the corresponding cookie notification as well as on subsequent visits',

    'cookie_origin_google_analytics' => 'Google Analytics (by Google Ireland Limited)',

    'cookie_duration_end_of_session' => 'End of session',
    'cookie_duration_1_year' => '1 year',
    'cookie_duration_2_years' => '2 years',
    'cookie_duration_24_hours' => '24 hours',
    'cookie_duration_1_minute' => '1 minute',

    'cookie_settings_intro' => 'You can view or reset your current cookie settings here:',
    'cookie_settings_header' => 'Current cookie settings',
    'no_cookie_setting' => 'No selection taken',
    'cookie_setting_true' => 'Google Analytics cookies accepted',
    'cookie_setting_false' => 'Google Analytics cookies declined',
    'reset_cookie_setting' => 'Reset cookie setting',

    'data_collection_and_usage_header' => 'Data Collection and Usage',

    'log_data_header' => 'Log Data',
    'log_data' => '
        <p>
            When visiting any website, your browser is automatically transmitting information to the server and infrastructure it is hosted on. In our case this is a data centre owned by <strong>Google Ireland Limited</strong> (see list of subprocessors below) and situated in Belgium. The transmitted information can include the following types of data:
        </p>
        <ul>
            <li>your device’s IP (Internet Protocol) address,</li>
            <li>time, date and duration of your visit,</li>
            <li>visited pages,</li>
            <li>type, version and language of your browser and operating system.</li>
        </ul>
        <p>
            This data is transmitted and logged automatically to ensure the connectivity and functionality of our website and enables us to evaluate and ensure its security and stability. The data is kept until the log is deleted. The collected data is essential for running and maintaining this website and is in no way used to identify or track you as a person. Collection and processing of this data is in accordance with Article 6 (1) of the GDPR.
        </p>
    ',

    'website_analytics_header' => 'Website Analytics',
    'website_analytics' => '
        <p>
            If you accept Google Analytics in the cookie notification, our website will forward log data to Google Analytics as well (also provided by <strong>Google Ireland Limited</strong>). This service is used to track and report website traffic for statistical purposes and to understand and improve how visitors are using our website. Any collected data will be anonymized (by deleting part of your IP address) and might be stored in the European Union or the United States. Any data will be processed according to the &quot;Privacy Shield&quot; agreement between EU und USA and based on a data processing contract between us and <strong>Google Ireland Limited</strong>. Data will be stored for the duration 26 months.
        </p>
        <p>
            Please note, that no data will be transferred to Google Analytics at all, if you do not explicitly accept the cookie notification visible on the bottom of the page on your first visit. Data processing is therefor according to Article 6 (1a) of the GDPR.
        </p>
    ',

    'contact_form_header' => 'Contact Form',
    'contact_form' => '
        <p>
            Our website includes a contact form, that can be used to send us an e-mail. The form collects your name, e-mail-address as well as your message. When submitting the contact-request, this data will be transmitted via our service provider <strong>Twilio Sendgrid Inc.</strong> (see list of subprocessors below for details) into our mailbox.
        </p>
    ',

    'user_accounts_header' => 'User Accounts',
    'user_accounts' => '
        <p>
            When signing up for any account via our website, you will be asked for a set of personal information, that includes the following personal data:
        </p>
        <ul>
            <li>Company (place of work)</li>
            <li>Salutation (gender)</li>
            <li>Name</li>
            <li>(Work) phone number</li>
            <li>(Work) address</li>
            <li>(Work) e-mail-address</li>
        </ul>
        <p>
            This data is collected for the purpose of fulfilling our contract. Creating an account saves this data in our database hosted by our sub processor <strong>Google Ireland Limited</strong> in Belgium, EU. It will be used for contacting you as well as for statistical purposes.
        </p>
        <p>
            Our website uses this data for sending you various e-mail notifications, which are transmitted via our service provider <strong>Twilio Sendgrid Inc.</strong> (see list of subprocessors below for details).
        </p>
        <p>
            If you are creating a supplier account, this information will also be disclosed publicly on the contact information for your company.
        </p>
    ',

    'subscription_and_payment_header' => 'Subscription & Payment',
    'subscription_and_payment' => '
        <p>
            If you have a supplier account and start a subscription with us, we will forward your account data to our subscription management provider <strong>Chargebee Inc.</strong> They will use this data to create invoices and send billing-related e-mail notifications. They also take care of managing your billing information and payment details. Payments will be initiated by Cargebee and are processed via our payment service providers <strong>PayPal (Europe) S.a.r.l. et Cie, S.C.A.</strong> and <strong>Stripe Payments Europe Ltd.</strong> (for credit cards).
        </p>
    ',

    'outgoing_links_header' => 'Outgoing Links',
    'outgoing_links' => '
        <p>
            Our website includes links to other websites, which are not operated by us. When clicking such an outgoing link, you will be redirected there. We have no control over these websites and their privacy policies. Therefor we assume no responsibility regarding their content or behaviour. We recommend you check their privacy policies for details.
        </p>
    ',

    'childrens_privacy_header' => "Children's Privacy",
    'childrens_privacy' => '
        <p>
            Since we offer services for businesses, we do not address anyone under the age of 13. Therefor we do not knowingly collect personally identifiable information from anyone under the age of 13. Please contact us if you are aware that your child has provided us with personal data without parental consent. We will then take steps to remove the information from our servers.
        </p>
    ',

    'subprocessors_header' => 'List of subprocessors',
    'data_purpose' => 'Purpose',
    'data_categories' => 'Data categories',
    'data_category' => [
        'inventory_data' => 'Inventory Data',
        'usage_data' => 'Usage Data',
        'usage_statistics' => 'Usage Statistics',
        'contract_data' => 'Contract Data',
        'payment_data' => 'Payment Data'
    ],
    'privacy_policy' => 'Privacy policy',

    'data_purpose_google' => 'Hosting of website and depending services (Google Cloud Platform) as well as website analytics (Google Analytics).',
    'data_purpose_send_emails' => 'Sending of e-mail notifications (e.g. via contact form).',
    'data_purpose_chargebee' => 'Managing supplier subscriptions.',
    'data_purpose_paypal' => 'Payment processing (for payments via PayPal)',
    'data_purpose_stripe' => 'Payment processing (for payments via credit card)',
];
