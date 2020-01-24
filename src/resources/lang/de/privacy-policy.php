<?php

$privacyEmail = config('boilerplate.privacy_email');
$i = config('boilerplate.privacy_policy_salutation') === 'informal';
return [

    'intro' => '
        <p>
            Der Schutz Ihrer persönlichen Daten ist '.($i?'mir':'uns').' ein besonderes Anliegen. In diesem Dokument informiere'.($i?' ich':'n wir').' Sie über die Erfassung, Verarbeitung und Weitergabe persönlicher Informationen im Rahmen der verschiedenen Funktionen '.($i?'meiner':'unserer').' Webseite. Es beinhaltet auch Informationen über Ihre Rechte und wie sie geschützt sind.
        </p>
        <p>
            '.($i?'Ich':'Wir').' verarbeiten Ihre Daten ausschließlich auf Grundlage der gesetzlichen Bestimmungen - z.B. der Europäischen Datenschutzgrundverordnung (&quot;DSGVO&quot;). Alle gesammelten persönlichen Informationen dienen der Erbringung und Verbesserung '.($i?'meiner':'unserer').' Dienstleistungen. '.($i?'Ich werde':'Wir werden').' Ihre persönlichen Daten niemals anderweitig nutzen oder teilen, als als in dieser Erklärung beschrieben. Wenn Sie '.($i?'meine':'unsere').' Dienstleistungen nutzen, stimmen Sie der Verarbeitung von Daten im Rahmen dieser Datenschutzerklärung zu.
        </p>
        ',

    'rights_header' => 'Ihre Datenschutzrechte',
    'rights' => '
        <p>
            '.($i?'Ich':'Wir').' behandeln Ihre Daten in Übereinstimmung mit der '.($i?'Ich':'Wir').' Europäischen Datenschutzgrundverordnung (&quot;DSGVO&quot;). Diese gibt Privatpersonen weitgehende Rechte über die Art und Weise, wie ihre persönlichen Daten gesammelt und verarbeitet werden. Diese Rechte beinhalten:
        </p>
        <ul>
            <li><strong>Recht auf Auskunft</strong> über die gesammelten persönlichen Informationen und wie diese gespeichert, verarbeitet oder geteilt werden.</li>
            <li><strong>Recht auf Berichtigung</strong> Ihrer persönlichen Informationen.</li>
            <li><strong>Recht auf Löschen</strong> Ihrer persönlichen Informationen.</li>
            <li><strong>Recht auf Beschwerde</strong> bei einer Aufsichtsbehörde.</li>
            <li><strong>Recht auf Einschränkung</strong> der Verarbeitung Ihrer persönlichen Informationen.</li>
            <li><strong>Recht auf Widerruf</strong> von Zustimmungen über die Verarbeitung Ihrer Daten.</li>
            <li><strong>Recht auf Übertragung</strong> Ihrer persönlichen Informationen an Sie.</li>
        </ul>
        <p>
            Sie können '.($i?'uns':'mich').' gerne unter <a href="mailto:'.$privacyEmail.'">'.$privacyEmail.'</a> kontaktieren, wenn Sie Fragen oder Wünsche in Bezug auf diese Rechte haben.
        </p>
        ',


    'security_header' => 'Datensicherheit',
    'security' => '
        <p>
            '.($i?'Ich nutze':'Wir nutzen').' viele technische und organisatorische Maßnahmen für die sichere Übertragung und Speicherung aller gesammelten Daten und um sie gegen Manipulation oder unbefugten Zugriff zu schützen. Jeglicher Datentransfer zwischen Ihrem Endgerät, dieser Webseite und weiterer Dienste findet (SSL-)verschlüsselt statt. Eine verschlüsselte Verbindung erkennen Sie am Schloss-Symbol in Ihrer Adresszeile Ihres Browsers.
        </p>
        <p>
            Sämtliche Daten werden auf Servern '.($i?'meiner':'unserer').' Auftragsverarbeiter gespeichert. Die Sammlung und Verarbeitung dieser Daten basiert auf Verträgen, die '.($i?'ich':'wir').' (in Übereinstimmung mit Artikel 28 der DSGVO) mit diesen Anbietern abgeschlossen haben.
        </p>
        ',

    'cookies_header' => 'Cookies',
    'cookies' => '
        <p>
            '.($i?'Meine':'Unsere').' Website verwendet so genannte "Cookies". Dabei handelt es sich um kleine Textdateien, die mit Hilfe des Browsers auf Ihrem Endgerät verarbeitet und abgelegt werden. Sie werden von bestimmten Funktionen '.($i?'meiner':'unserer').' Webseite zum Zwischenspeichern verschiedenster Informationen verwendet.
        </p>
        <p>
            Cookies können sowohl direkt von '.($i?'meiner':'unserer').' Webseite ("Erstanbieter-Cookies"), als auch durch die Dienste von Auftragsverarbeitern (z.B. bei der Verarbeitung von Zahlungsinformationen oder für Webanalyse) gesetzt werden. Beim ersten Aufruf '.($i?'meiner':'unserer').' Webseite werden nur technisch notwendige Erstanbieter-Cookies verwendet.
        </p>
        <p>
            Die meisten Web-Browser bieten Funktionen zur Anzeige und zum Löschen von bereits gesetzten Cookies. Weiters können Sie Ihren Browser auch so konfigurieren, dass keinerlei Cookies gesetzt werden. Bitte beachten Sie aber, dass dadurch '.($i?'meine':'unsere').' Webseite nur mehr engeschränkt funktioniert.
        </p>
        ',
    'first_party_cookies_intro' => 'Hier ist eine komplette Liste aller bei der Benutzung '.($i?'meiner':'unserer').' Webseite verwendeten technisch notwendigen <strong>&quot;Erstanbieter-Cookiess&quot;</strong>:',
    'third_party_cookies_intro' => 'Und dies sind die <strong>&quot;Drittanbieter-Cookies&quot;</strong> die bei der Verwendung gewisser Funktionen zur Anwendung kommen:',

    'cookie_name' => 'Name',
    'cookie_purpose' => 'Zweck',
    'cookie_written_on' => 'Erstellt bei',
    'cookie_duration' => 'Dauer',
    'cookie_origin' => 'Herkunft',

    'cookie_purpose_session' => 'Das so genannte "Session"-Cookie erlaubt '.($i?'meiner':'unserer').' Webseite das Speichern und Abrufen bestimmter Informationen über Ihren aktuellen Besuch (z.B. ausgewählte Sprache oder Anmeldestatus).',
    'cookie_purpose_xsrf' => 'Dies ist ein Sicherheits-bezogenes Cookie, um sogenannte "Cross-Site Request Forgery" Attacken zu unterbinden.',
    'cookie_purpose_accept_test_phase' => 'Beim Ihrem ersten Besuch der Webseite während der Testphase wird eine Warnung eingeblendet. Durch dieses Cookie wird diese Warnung nur bei Ihrem ersten Besuch angezeigt.',
    'cookie_purpose_accept_cookies' => 'Speichert Ihre Entscheidung des Cookie-Hinweises, der bei Ihrem ersten Besuch angezeigt wird und verhindert, dass die Webseite Sie erneut fragt.',
    'cookie_purpose_google_analytics' => 'Diese Cookies werden vom Web-Analyse-Tool "Google Analytics" erstellt, welches '.($i?'ich':'wir').' zum verstehen und verbessern des Benutzerverhaltens '.($i?'nutze':'nutzen').'. (Mehr informationen hierzu finden Sie weiter unten im Web-Analyse-Abschnitt.)',

    'cookie_written_on_every_visit' => 'Jeder Besuch',
    'cookie_written_on_accept_test_phase' => 'Bestätigen des "Testbetrieb"-Hinweises beim ersten Besuch '.($i?'meiner':'unserer').' Webseite während der Testphase',
    'cookie_written_on_accept_cookies' => 'Klick auf eine der Antworten im Cookie-Hinweis, der beim ersten Besuch '.($i?'meiner':'unserer').' Webseite erscheint',
    'cookie_written_on_accept_corresponding_cookies' => 'Bestätigung des diesbezüglichen Cookie-Hinweises sowie bei weiteren Besuchen',

    'cookie_origin_google_analytics' => 'Google Analytics (von Google Ireland Limited)',

    'cookie_duration_end_of_session' => 'Ende des Besuchs',
    'cookie_duration_1_year' => '1 Jahr',
    'cookie_duration_2_years' => '2 Jahre',
    'cookie_duration_24_hours' => '24 Stunden',
    'cookie_duration_1_minute' => '1 Minute',

    'cookie_settings_intro' => 'Sie können Ihre aktuellen Cookie-Einstellungen hier jederzeit einsehen oder zurücksetzen:',

    'cookie_settings_header' => 'Aktuelle Cookie-Einstellungen',
    'no_cookie_setting' => 'Keine Auswahl getroffen',
    'cookie_setting_true' => 'Google Analytics Cookies akzeptiert',
    'cookie_setting_false' => 'Google Analytics Cookies abgelehnt',
    'reset_cookie_setting' => 'Cookie-Einstellungen zurücksetzen',

    'data_collection_and_usage_header' => 'Sammlung und Verwendung von Daten',

    'log_data_header' => 'Log Daten',
    'log_data' => '
        <p>
            Beim Besuch einer Webseite sendet Ihr Web-Browser automatisch Information zum Server und der Infrastruktur, auf dem diese betrieben wird. In '.($i?'meinem':'unseren').' Fall handelt es sich dabei um ein Datencenter in Belgien, das von <strong>Google Ireland Limited</strong> (siehe Liste von Datenverarbeitern weiter unten). Dabei können folgende Arten von Daten übertragen werden:
        </p>
        <ul>
            <li>IP (Internet Protocol) Adresse Ihres Endgerätes,</li>
            <li>Zeit, Datum und Dauer Ihres Besuchs,</li>
            <li>besuchte Seiten,</li>
            <li>Typ, Version und Sprache Ihres Web-Browsers und Betriebssystems.</li>
        </ul>
        <p>
            Diese Daten werden automatisch übertragen und geloggt, um die Erreichbarkeit, Funktionalität, Sicherheit und Stabilität '.($i?'meiner':'unserer').' Webseite zu gewährleisten. Die Daten bleiben gespeichert bis die Logdatei gelöscht wird. Die gesammelten Daten sind technisch notwendig für den Betrieb und die Wartung dieser Webseite und werden in keiner Weise verwendet, um Sie als Person zu identifizieren oder zu tracken. Sammlung und Verarbeitung dieser Daten erfolgt in Übereinstimmung mit Artikel 6 (1) der DSGVO.
        </p>
    ',

    'website_analytics_header' => 'Web-Analyse',
    'website_analytics' => '
        <p>
            Wenn Sie Web-Analyse im Cookie-Hinweis akzeptieren, werden Log Daten auch an Google Analytics gesendet (ebenfalls ein Dienst von <strong>Google Ireland Limited</strong>). Dieser Dienst sammelt Daten über die Verwendung der Webseite für statistische Zwecke und um die Benutzerführung '.($i?'meiner':'unserer').' Seite zu verbessern. Sämtliche gesammelten Daten werden pseudonymisiert (durch Löschen eines Teils Ihrer IP Adresse) und können sowohl in der Europäischen Union als auch in den Vereinigten Staaten gespeichert werden. Alle Datenverarbeitungen werden auf Grundlage des &quot;Privacy Shield&quot; Abkommens zwischen der EU und den USA und eines Vertrags zwischen '.($i?'mir':'uns').' und <strong>Google Ireland Limited</strong>. Die Daten bleiben für die Dauer von 26 Monaten gespeichert.
        </p>
        <p>
            Bitte beachten Sie, dass keinerlei Daten zu Google Analytics transferiert werden, sofern Sie nicht explizit im Cookie-Hinweis zustimmen, der bei Ihrem ersten Besuch am unteren Rand der Seite erscheint  (&quot;OPT-IN&quot;). Die Datenverarbeitung geschieht somit in Übereinstimmung mit Artikel 6 (1a) der DSGVO.
        </p>
    ',

    'contact_form_header' => 'Kontaktformular',
    'contact_form' => '
        <p>
            '.($i?'Meine':'Unsere').' Webseite verfügt über ein Kontaktformular, das verwendet werden kann, um '.($i?'mir':'uns').' eine E-Mail zu senden. Im Formular können Sie Ihren Namen, Ihre E-Mail-Adresse sowie eine Nachricht eingeben. Beim Absenden der Anfrage werden diese über den Anbieter <strong>Twilio Sendgrid Inc.</strong> (siehe Liste von Datenverarbeitern weiter unten) in unsere Mailbox zugestellt.
        </p>
    ',

    'outgoing_links_header' => 'Ausgehende Links',
    'outgoing_links' => '
        <p>
            '.($i?'Meine':'Unsere').' Webseite beinhaltet Links zu anderen Webseiten, die nicht von '.($i?'mir':'uns').' betrieben wird. Wenn Sie auf einen solchen ausgehenden Link klicken, werden Sie zu dieser Webseite weitergeleitet. '.($i?'Ich habe':'Wir haben').' keinerlei Einfluss auf diese Webseiten und ihren Datenschutz und übernehme'.($i?'':'n').' deshalb keine Verantwortung in Bezug auf deren Inhalt und Verhalten. Weitere Details finden Sie in den Datenschutzerklärungen dieser Seiten.
        </p>
    ',

    'subprocessors_header' => 'Liste von Datenverarbeitern',
    'data_purpose' => 'Zweck',
    'data_categories' => 'Daten-Kategorien',
    'data_category' => [
        'inventory_data' => 'Stammdaten',
        'usage_data' => 'Nutzungs-Daten',
        'usage_statistics' => 'Nutzungs-Statistiken',
        'contract_data' => 'Vertragsdaten',
        'payment_data' => 'Zahlungsdaten'
    ],
    'privacy_policy' => 'Datenschutzerklärung',

    'data_purpose_google' => 'Hosten der Webseite und benötigter Dienste (Google Cloud Platform), sowie Web-Analyse (Google Analytics).',
    'data_purpose_send_emails' => 'Senden von E-Mails (z.B. via das Kontaktformular).',
    'data_purpose_chargebee' => 'Verwalten von Zulieferer-Abonnements.',
    'data_purpose_paypal' => 'Zahlungsabwicklung (für Zahlungen via PayPal)',
    'data_purpose_stripe' => 'Zahlungsabwicklung (für Zahlungen via Kreditkarte)',
];
