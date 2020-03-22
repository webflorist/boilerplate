<?php

$privacyEmail = config('boilerplate.privacy_email');
$s = config('boilerplate.privacy_policy_singular') === true;
return [

    'intro' => '
        <p>
            Der Schutz Ihrer persönlichen Daten ist ' . ($s ? 'mir' : 'uns') . ' ein besonderes Anliegen. In diesem Dokument informiere' . ($s ? ' ich' : 'n wir') . ' Sie über die Erfassung, Verarbeitung und Weitergabe persönlicher Informationen im Rahmen der verschiedenen Funktionen ' . ($s ? 'meiner' : 'unserer') . ' Webseite. Es beinhaltet auch Informationen über Ihre Rechte und wie sie geschützt sind.
        </p>
        <p>
            ' . ($s ? 'Ich' : 'Wir') . ' verarbeiten Ihre Daten ausschließlich auf Grundlage der gesetzlichen Bestimmungen - z.B. der Europäischen Datenschutzgrundverordnung (&quot;DSGVO&quot;). Alle gesammelten persönlichen Informationen dienen der Erbringung und Verbesserung ' . ($s ? 'meiner' : 'unserer') . ' Dienstleistungen. ' . ($s ? 'Ich werde' : 'Wir werden') . ' Ihre persönlichen Daten niemals anderweitig nutzen oder teilen, als als in dieser Erklärung beschrieben. Wenn Sie ' . ($s ? 'meine' : 'unsere') . ' Dienstleistungen nutzen, stimmen Sie der Verarbeitung von Daten im Rahmen dieser Datenschutzerklärung zu.
        </p>
        ',

    'rights_header' => 'Ihre Datenschutzrechte',
    'rights' => '
        <p>
            ' . ($s ? 'Ich' : 'Wir') . ' behandeln Ihre Daten in Übereinstimmung mit der ' . ($s ? 'Ich' : 'Wir') . ' Europäischen Datenschutzgrundverordnung (&quot;DSGVO&quot;). Diese gibt Privatpersonen weitgehende Rechte über die Art und Weise, wie ihre persönlichen Daten gesammelt und verarbeitet werden. Diese Rechte beinhalten:
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
            Sie können ' . ($s ? 'mich' : 'uns') . ' gerne unter <a href="mailto:' . $privacyEmail . '">' . $privacyEmail . '</a> kontaktieren, wenn Sie Fragen oder Wünsche in Bezug auf diese Rechte haben.
        </p>
        ',


    'security_header' => 'Datensicherheit',
    'security' => '
        <p>
            ' . ($s ? 'Ich nutze' : 'Wir nutzen') . ' viele technische und organisatorische Maßnahmen für die sichere Übertragung und Speicherung aller gesammelten Daten und um sie gegen Manipulation oder unbefugten Zugriff zu schützen. Jeglicher Datentransfer zwischen Ihrem Endgerät, dieser Webseite und weiterer Dienste findet (SSL-)verschlüsselt statt. Eine verschlüsselte Verbindung erkennen Sie am Schloss-Symbol in Ihrer Adresszeile Ihres Browsers.
        </p>
        <p>
            Sämtliche Daten werden auf Servern ' . ($s ? 'meiner' : 'unserer') . ' Auftragsverarbeiter gespeichert. Die Sammlung und Verarbeitung dieser Daten basiert auf Verträgen, die ' . ($s ? 'ich' : 'wir') . ' (in Übereinstimmung mit Artikel 28 der DSGVO) mit diesen Anbietern abgeschlossen haben.
        </p>
        ',

    'cookies_header' => 'Cookies',
    'cookies' => '
        <p>
            ' . ($s ? 'Meine' : 'Unsere') . ' Website verwendet so genannte "Cookies". Dabei handelt es sich um kleine Textdateien, die mit Hilfe des Browsers auf Ihrem Endgerät verarbeitet und abgelegt werden. Sie werden von bestimmten Funktionen ' . ($s ? 'meiner' : 'unserer') . ' Webseite zum Zwischenspeichern verschiedenster Informationen verwendet.
        </p>
        <p>
            Cookies können sowohl direkt von ' . ($s ? 'meiner' : 'unserer') . ' Webseite ("Erstanbieter-Cookies"), als auch durch die Dienste von Auftragsverarbeitern (z.B. bei der Verarbeitung von Zahlungsinformationen oder für Webanalyse) gesetzt werden. Beim ersten Aufruf ' . ($s ? 'meiner' : 'unserer') . ' Webseite werden nur technisch notwendige Erstanbieter-Cookies verwendet.
        </p>
        <p>
            Die meisten Web-Browser bieten Funktionen zur Anzeige und zum Löschen von bereits gesetzten Cookies. Weiters können Sie Ihren Browser auch so konfigurieren, dass keinerlei Cookies gesetzt werden. Bitte beachten Sie aber, dass dadurch ' . ($s ? 'meine' : 'unsere') . ' Webseite nur mehr engeschränkt funktioniert.
        </p>
        ',
    'first_party_cookies_intro' => 'Hier ist eine komplette Liste aller bei der Benutzung ' . ($s ? 'meiner' : 'unserer') . ' Webseite verwendeten technisch notwendigen <strong>&quot;Erstanbieter-Cookies&quot;</strong>:',
    'third_party_cookies_intro' => 'Und dies sind die <strong>&quot;Drittanbieter-Cookies&quot;</strong> die bei der Verwendung gewisser Funktionen zur Anwendung kommen:',

    'cookie_name' => 'Name',
    'cookie_purpose' => 'Zweck',
    'cookie_written_on' => 'Erstellt bei',
    'cookie_duration' => 'Dauer',
    'cookie_origin' => 'Herkunft',

    'cookie_purpose_session' => 'Das so genannte "Session"-Cookie erlaubt ' . ($s ? 'meiner' : 'unserer') . ' Webseite das Speichern und Abrufen bestimmter Informationen über Ihren aktuellen Besuch (z.B. ausgewählte Sprache oder Anmeldestatus).',
    'cookie_purpose_xsrf' => 'Dies ist ein Sicherheits-bezogenes Cookie, um sogenannte "Cross-Site Request Forgery" Attacken zu unterbinden.',
    'cookie_purpose_accept_test_phase' => 'Beim Ihrem ersten Besuch der Webseite während der Testphase wird eine Warnung eingeblendet. Durch dieses Cookie wird diese Warnung nur bei Ihrem ersten Besuch angezeigt.',
    'cookie_purpose_accept_cookies' => 'Speichert Ihre Entscheidung des Cookie-Hinweises, der bei Ihrem ersten Besuch angezeigt wird und verhindert, dass die Webseite Sie erneut fragt.',
    'cookie_purpose_accept_google_maps' => 'Speichert Ihre Entscheidung bzgl. der Verwendung von Google Maps beim Anzeigen einer Karte und verhindert, dass die Webseite Sie erneut fragt.',
    'cookie_purpose_google_analytics' => 'Diese Cookies werden vom Web-Analyse-Tool "Google Analytics" erstellt, welches ' . ($s ? 'ich' : 'wir') . ' zum verstehen und verbessern des Benutzerverhaltens ' . ($s ? 'nutze' : 'nutzen') . '. (Mehr Informationen hierzu finden Sie weiter unten im Web-Analyse-Abschnitt.)',
    'cookie_purpose_google_maps' => 'Beim Einblenden interaktiver Karten werden verschiedene Cookies von Google Maps erstellt. (Mehr Informationen hierzu finden Sie weiter unten im Google Maps-Abschnitt.)',

    'cookie_written_on_every_visit' => 'Jeder Besuch',
    'cookie_written_on_accept_test_phase' => 'Bestätigen des "Testbetrieb"-Hinweises beim ersten Besuch ' . ($s ? 'meiner' : 'unserer') . ' Webseite während der Testphase',
    'cookie_written_on_accept_cookies' => 'Klick auf eine der Antworten im Cookie-Hinweis, der beim ersten Besuch ' . ($s ? 'meiner' : 'unserer') . ' Webseite erscheint',
    'cookie_written_on_accept_google_maps' => 'Klick auf "OK" bei der Einverständniserklärung zur Verwendung von Google Maps',
    'cookie_written_on_accept_corresponding_cookies' => 'Bestätigung des diesbezüglichen Cookie-Hinweises sowie bei weiteren Besuchen',

    'cookie_origin_google_analytics' => 'Google Analytics (von Google Ireland Limited)',
    'cookie_origin_google_maps' => 'Google Maps (von Google LLC)',


    'cookie_duration_end_of_session' => 'Ende des Besuchs',
    'cookie_duration_1_year' => '1 Jahr',
    'cookie_duration_2_years' => '2 Jahre',
    'cookie_duration_24_hours' => '24 Stunden',
    'cookie_duration_1_minute' => '1 Minute',
    'cookie_duration_various' => 'verschieden',

    'cookie_settings_intro' => 'Sie können Ihre aktuellen Cookie-Einstellungen hier jederzeit einsehen oder zurücksetzen:',

    'cookie_settings_header' => 'Aktuelle Cookie-Einstellungen',
    'no_cookie_setting' => 'Keine Auswahl getroffen',
    'cookie_setting_true' => 'Google Analytics Cookies akzeptiert',
    'cookie_setting_false' => 'Google Analytics Cookies abgelehnt',
    'cookie_setting_google_maps' => 'Google Maps Cookies akzeptiert',
    'reset_cookie_setting' => 'Cookie-Einstellungen zurücksetzen',

    'data_collection_and_usage_header' => 'Sammlung und Verwendung von Daten',

    'log_data_header' => 'Log Daten',
    'log_data' => '
        <p>
            Beim Besuch einer Webseite sendet Ihr Web-Browser automatisch Information zum Server und der Infrastruktur, auf dem diese betrieben wird. In ' . ($s ? 'meinem' : 'unseren') . ' Fall handelt es sich dabei um ein Datencenter in Belgien, das von <strong>Google Ireland Limited</strong> (siehe Liste von Datenverarbeitern weiter unten). Dabei können folgende Arten von Daten übertragen werden:
        </p>
        <ul>
            <li>IP (Internet Protocol) Adresse Ihres Endgerätes,</li>
            <li>Zeit, Datum und Dauer Ihres Besuchs,</li>
            <li>besuchte Seiten,</li>
            <li>Typ, Version und Sprache Ihres Web-Browsers und Betriebssystems.</li>
        </ul>
        <p>
            Diese Daten werden automatisch übertragen und geloggt, um die Erreichbarkeit, Funktionalität, Sicherheit und Stabilität ' . ($s ? 'meiner' : 'unserer') . ' Webseite zu gewährleisten. Die Daten bleiben gespeichert bis die Logdatei gelöscht wird. Die gesammelten Daten sind technisch notwendig für den Betrieb und die Wartung dieser Webseite und werden in keiner Weise verwendet, um Sie als Person zu identifizieren oder zu tracken. Sammlung und Verarbeitung dieser Daten erfolgt in Übereinstimmung mit Artikel 6 (1) der DSGVO.
        </p>
    ',

    'website_analytics_header' => 'Web-Analyse',
    'website_analytics' => '
        <p>
            Wenn Sie Web-Analyse im Cookie-Hinweis akzeptieren, werden Log Daten auch an Google Analytics gesendet (ebenfalls ein Dienst von <strong>Google Ireland Limited</strong>). Dieser Dienst sammelt Daten über die Verwendung der Webseite für statistische Zwecke und um die Benutzerführung ' . ($s ? 'meiner' : 'unserer') . ' Seite zu verbessern. Sämtliche gesammelten Daten werden pseudonymisiert (durch Löschen eines Teils Ihrer IP Adresse) und können sowohl in der Europäischen Union als auch in den Vereinigten Staaten gespeichert werden. Alle Datenverarbeitungen werden auf Grundlage des &quot;Privacy Shield&quot; Abkommens zwischen der EU und den USA und eines Vertrags zwischen ' . ($s ? 'mir' : 'uns') . ' und <strong>Google Ireland Limited</strong>. Die Daten bleiben für die Dauer von 26 Monaten gespeichert.
        </p>
        <p>
            Bitte beachten Sie, dass keinerlei Daten zu Google Analytics transferiert werden, sofern Sie nicht explizit im Cookie-Hinweis zustimmen, der bei Ihrem ersten Besuch am unteren Rand der Seite erscheint  (&quot;OPT-IN&quot;). Die Datenverarbeitung geschieht somit in Übereinstimmung mit Artikel 6 (1a) der DSGVO.
        </p>
    ',

    'google_maps_header' => 'Google Maps',
    'google_maps' => '
        <p>
            ' . ($s ? 'Meine' : 'Unsere') . ' Webseite bietet auf Anforderung die Funktionalität zur Darstellung interaktiver Karten (z.B. zur Erstellung von Anfahrtsplänen). Dabei wird der Dienst &quot;Google Maps&quot; (betrieben von <strong>Google LLC</strong>) verwendet.
        </p>
        <p>
            Beim (ersten) Einblenden einer interaktiven Karte erscheint ein entsprechender Datenschutz-Hinweis. Wenn Sie diesem zustimmen, wird die Karte eingeblendet. Dabei werden auch persönliche Daten (wie Nutzungs- und Standort-Daten) an den Dritt-Anbieter <strong>Google LLC</strong> gesendet sowie diverse Cookies gesetzt.
        </p>
        <p>
            Bitte beachten Sie, dass keinerlei Daten zu Google Maps transferiert werden, sofern Sie nicht explizit im Datenschutz-Hinweis zustimmen, der bei Ihrem ersten Aufruf einer interaktiven Karte erscheint (&quot;OPT-IN&quot;). Die Datenverarbeitung geschieht somit in Übereinstimmung mit Artikel 6 (1a) der DSGVO.
        </p>
    ',

    'contact_form_header' => 'Kontaktformular',
    'contact_form' => '
        <p>
            ' . ($s ? 'Meine' : 'Unsere') . ' Webseite verfügt über ein Kontaktformular, das verwendet werden kann, um ' . ($s ? 'mir' : 'uns') . ' eine E-Mail zu senden. Im Formular können Sie Ihren Namen, Ihre E-Mail-Adresse sowie eine Nachricht eingeben. Beim Absenden der Anfrage werden diese über den Anbieter <strong>Twilio Sendgrid Inc.</strong> (siehe Liste von Datenverarbeitern weiter unten) in unsere Mailbox zugestellt.
        </p>
    ',

    'outgoing_links_header' => 'Ausgehende Links',
    'outgoing_links' => '
        <p>
            ' . ($s ? 'Meine' : 'Unsere') . ' Webseite beinhaltet Links zu anderen Webseiten, die nicht von ' . ($s ? 'mir' : 'uns') . ' betrieben wird. Wenn Sie auf einen solchen ausgehenden Link klicken, werden Sie zu dieser Webseite weitergeleitet. ' . ($s ? 'Ich habe' : 'Wir haben') . ' keinerlei Einfluss auf diese Webseiten und ihren Datenschutz und übernehme' . ($s ? '' : 'n') . ' deshalb keine Verantwortung in Bezug auf deren Inhalt und Verhalten. Weitere Details finden Sie in den Datenschutzerklärungen dieser Seiten.
        </p>
    ',

    'subprocessors_header' => 'Liste von Datenverarbeitern',
    'data_purpose' => 'Zweck',
    'data_categories' => 'Daten-Kategorien',
    'data_category' => [
        'inventory_data' => 'Stammdaten',
        'usage_data' => 'Nutzungs-Daten',
        'geo_data' => 'Standort-Daten',
        'usage_statistics' => 'Nutzungs-Statistiken',
        'contract_data' => 'Vertragsdaten',
        'payment_data' => 'Zahlungsdaten'
    ],
    'privacy_policy' => 'Datenschutzerklärung',

    'data_purpose_google' => 'Hosten der Webseite und benötigter Dienste (Google Cloud Platform), sowie Web-Analyse (Google Analytics).',
    'data_purpose_google_us' => 'Darstellung interaktiver Karten (Google Maps)',
    'data_purpose_send_emails' => 'Senden von E-Mails (z.B. via das Kontaktformular).',
    'data_purpose_chargebee' => 'Verwalten von Zulieferer-Abonnements.',
    'data_purpose_paypal' => 'Zahlungsabwicklung (für Zahlungen via PayPal)',
    'data_purpose_stripe' => 'Zahlungsabwicklung (für Zahlungen via Kreditkarte)',
];
