<?php
/**
 * Seiten Konfiguration, Anpassungen der Texte
 */
/**
 * Allgemeine Seiten Einstellungen und Variablen zur Anpassung der Personalisierung
 *
 **/

//Domain der Webseite
$site_domain = "https://feuerwehr-musterstadt.de";

//HTML Title Tag. Also das was oben im Browser steht
$site_title = "Freiwillige Feuerwehr Musterstadt";

//Hauptname der Seite. Wird überall verwendet wo der vollständige Name der Feuerwehr stehen soll
$site_name = "Freiwillige Feuerwehr Musterstadt – Ortswehr Mos Eisley";

//Nav header Name (Das ganz oben Links)
$site_headername = "FF Musterstadt";

//Unter Titel der Seite. Z.B. Löschen - Retten - Bergen - Schützen
$site_slogan="";

/**
 * Social Bereich
 * Einstellungen zu Facebook und co
 */

//Art der Social Verlinkung
$social_name = "Facebook";

//Überschrift
$social_titel = "Besuchen Sie uns auf Facebook!";

//Linker Beschreibungsbereich
$social_left = "Wir möchten Sie nicht nur auf unserer Website willkommen heißen, sondern ebenso auf unserem Social Media-Kanal.";

//Rechter Social Beschreibungsbereich
$social_right = "Auf Facebook versorgen wir Sie mit interessanten Neuigkeiten rund um unsere Feuerwehr. Spannende Inhalte warten hier auf Sie.";

//Link zum großen Social Media Button
$social_link1 = "https://www.facebook.com/freiwilligefeuerwehrmusterstadtundsoweiter";

//Zugehöriger Font Aweesome Button. Z.B. Facebook oder Instagram, Twitter etc.
$social_button1="fab fa-facebook-f fa-5x";// Das hier wäre es bspw. für Instagram "fab fa-instagram fa-5x"

//Link zum 2.großen Social Media Button. Leer lassen zum Deaktivieren. Dann wird der erste zentriert dargestellt
$social_link2 = "";

//Zugehöriger Font Aweesome Button. Z.B. Facebook oder Instagram, Twitter etc.
$social_button2="fab fa-instagram fa-5x";// Das hier wäre es bspw. für Instagram "fab fa-instagram fa-5x"



/**
 * Datenschutzerklärung
 * Einstellungen für Datenschutzkontakt und Hoster
 */

//Firemensitz des Hosters der Webseite.
$datenschutz_hoster="Hosting Firma<br/>Musterstr. 25<br/>12345 Musterstadt<br/>Deutschland";

//Kontakt Adresse der Feuerwehr für die Datenschutzerklärung
$datenschutz_kontakt="Förderverein der Freiwilligen Feuerwehr Stadt Musterstadt – Ortswehr Mos Eisley – e.V.<br/>
            Vertreten durch den Ortsbrandmeister Obi Wan Kenobi und stv. Ortsbrandmeisterin Grogu<br/>
            Musterstraße 12<br/>
            12345 Musterstadt";

/**
 * Mail Adresse in der Datenschutzerklärung
 * Diese muss in einzelnen abschnitten angegeben werden.
 * Die E-Mail wird erst später zusammengesetzt damit Bots diese nicht erkennen können
 */
$datenschutz_mail_name="ortsbrandmeister";
$datenschutz_mail_domain="feuerwehr-musterstadt";
$datenschutz_mail_tld="de";


/**
 * Impressum
 * Einstellungen für Datenschutzkontakt und Hoster
 */
$impressum_kontakt="Förderverein der Freiwilligen Feuerwehr Stadt Musterstadt – Ortswehr Mos Eisley – e.V.
                    <br/>
                    Am Bürokratieweg 42<br/>
                    12345 Musterstadt<br/><br/>
                    Vereinsregister: VR 200000<br/>
                    Registergericht: Amtsgericht Musterstadt<br/><br/>
                    Vertreten durch den Ortsbrandmeister Obi Wan Kenobi und stv. Ortsbrandmeisterin Grogu<br/>";

/**
 * Mail Adresse im Impressum.
 * Diese muss in einzelnen abschnitten angegeben werden.
 * Die E-Mail wird erst später zusammengesetzt damit Bots diese nicht erkennen können
 */
$impressum_mail_name="ortsbrandmeister";
$impressum_mail_domain="feuerwehr-musterstadt";
$impressum_mail_tld="de";


/**
 * Alles für das Kontaktformular
 */

//E-Mail Adresse des Empfängers der Nachrichten die über das Kontaktformular gesendet werden.
$kontaktform_to="kontaktformtest@maximilianjanzen.de";
$kontaktform_subject="Nachricht vom Konataktformular auf: $site_domain";
$kontaktform_sendmail="noreply@feuerwehr-musterstadt.de";


/**
 * Meta Daten
 * Einstellungen der Metadaten für SEO und co.
 */
$meta_description="Freiwilligen Feuerwehr Stadt Geestland – Ortswehr Imsum: Rund um die Uhr einsatzbereit: Für uns Ehrensache!";
$meta_keywords="Freiwillige Feuerwehr, Musterstadt, Stadt Mos Eisley, Orstwehr, Feuerwehr";
$meta_author ="Freiwillige Feuerwehr Musterstadt";
?>