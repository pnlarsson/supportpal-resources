<?php

return array(

    "user"                          => "Användare",
    "user_details"                  => "Användardetaljer",
    "add_user"                      => "Lägg till användare",
    "account_active"                => "Konto aktivt",
    "account_active_desc"           => "Växla för att aktivera eller avaktivera tillgång till autentiserade sektioner.",

    "operator_settings"             => "Operatörinställningar",
    "op_settings_dept_desc"         => "Välj vilka avdelningar operatören kan titta och svara på ärenden i",

    "organisation"                  => "Organisation|Organisationer",
    "members"                       => "Medlem|Medlemmar",
    "owner"                         => "Ägare",
    "manager"                       => "Chef",
    "access_level"                  => "Åtkomstnivå",
    "access_level_desc"             => "Definiera åtkomstnivån för användaren i organisationen baserat på följande schema:<br /><strong>Chef</strong> - Kan titta på ärenden öppnade av alla användare i organisationen och hantera användare i organisationen<br /><strong>Användare</strong> - Kan enbart titta på ärenden öppnade av sig själv",
    "manage_organisation"           => "Hantera organisation",
    "leave_organisation"            => "Lämna organisation",
    "user_membership"               => "Användarmedlemskap",
    "transfer_ownership"            => "Flytta ägarskap",
    "transfer_ownership_desc"       => "Som den nuvarande ägaren av organisationen kan du inte tas bort som chef och bara du kan ta bort organisationen. Du kan flytta ägarskapet till någon annan men var uppmärksam på att du inte kan ångra handlingen.",
    "transfer_ownership_operator"   => "Bara ägaren kan ta bort organisationen och kan inte tas bort från den. Använd detta val för att ge ägarskapet till en annan användare inom organisationen.",
    "start_typing_name"             => "Börja skriva ett namn...",
    "organisation_add_user"         => "Lägg till användare till organisation",
    "organisation_desc"             => "Varje organisation kan ha <strong>chefer</strong> som kan hantera användare och läsa och svara andras ärenden och <strong>användare</strong> som kan öppna ärenden men inte läsa eller svara på andra ärenden.",
    "organisation_operator_desc"    => "Lägg till existerande användare till denna organisation genomn att klicka på \"Lägg till användare\" och sök efter deras namn. Notera att skapandet av en användare tar bort kopplingar de kan ha med en annan organisation.",
    "organisation_user_desc"        => "<strong>Chef</strong> - kan hantera andra användare och läsa och svara andra användares ärenden.<br /><strong>Användare</strong> - kan bara öppna ärenden på uppdrag av organisationen och svara på egna ärenden.",
    "send_confirmation_email"       => "Skicka konfirmeringse-post till användaren",
    "send_password_reset"           => "Skicka lösenordåterställningslänk",

    "profile"                       => "Profil",
    "address"                       => "Adress",
    "city"                          => "Stad",
    "state"                         => "State",
    "postcode"                      => "Postkod",
    "phone"                         => "Telefonnummer",
    "website"                       => "Hemsida",

    "login"                         => "Logga in",
    "remember_me"                   => "Kom ihåg mig",
    "logout"                        => "Logga ut",
    "return_to_login"               => "Tillbaka till login",

    "user_register_disabled"        => "Publik användarregistrering är för närvarande avaktiverad.",
    "success_register"              => "Konto registrerat!",
    "success_register_desc"         => "Tack för att har registrerat ett konto. Du måste bekräfta din e-postadress innan du kan logga in. Vi kommer snart att skicka ett e-postmeddelande med en bekräftelselänk.",
    "register_now"                  => "Registrera nu",
    "register"                      => "Registrera",
    "register_account"              => "Registrera konto",
    "register_confirm"              => "Registreringsbekräftelse",
    "register_confirm_desc"         => "Tack för att du bekräftade din e-postadress. Skriv in ett lösenord för ditt konto nedan för att slutföra processen.",
    "confirmation_success"          => "Bekräftelse lyckades!",
    "confirmation_unsuccessful"     => "Bekräftelse misslyckades.",
    "thank_you_confirm"             => "Tack för att du bekräftade ditt konto. Fortsätt till <a href=':route'>inloggning</a>.",
    "signed_up"                     => "Anmäld",
    "last_active"                   => "Senast aktiv",

    "reset_request"                 => "Lösenordåterställningsbegäran mottagen",
    "reset_request_desc"            => "Vi kommer inom kort skicka ett e-postmeddelande som innehåller en bekräftelselänk som låter dig återställa ditt lösenord.",
    "forgot_password"               => "Glömt lösenord?",
    "password_reset"                => "Lösenord återställt",
    "password_reset_confirm"        => "Återställningsbekräftelse",
    "reset_password"                => "Återställ lösenord",
    "password_reset_complete"       => "Återställning slutförd",
    "set_password"                  => "Sätt ett lösenord",
    "only_enter_to_change"          => "Skriv bara in för att ändra",
    "success_pass_reset"            => "Ditt lösenord har återställts. Fortsätt till <a href=':route'>logga in</a>.",
    "please_set_password"           => "Skriv in ditt nya lösenord här nedan.",
    "emailed_pwd_reset_link"        => "Vi har skickat ett e-postmeddelande med en återställningslänk.",
    "operator_email_not_found"      => "Operatörens e-postadress hittades inte.",
    "missing_email_or_reset"        => "E-postadressen saknas eller har ingen återställningstoken.",

    "firstname"                     => "Förnamn",
    "lastname"                      => "Efternamn",
    "formatted_name"                => "Formaterat namn",
    "country"                       => "Land",
    "avatar"                        => "Avatar",
    "generate_password"             => "Generera slumpmässigt lösenord",
    "confirm_password"              => "Bekräfta lösenord",

    "confirmed"                     => "Bekräftat",
    "confirmed_desc"                => "Växla för att aktivera eller avaktivera tillgång till autentiserade sektioner.",
    "unconfirmed"                   => "Obekräftat",

    "group"                         => "Användargrupp|Användargrupper",
    "group_members"                 => "Gruppmedlemmar",
    "operator_group"                => "Operatörsgrupp|Operatörsgrupper",
    "add_group"                     => "Lägg till grupp",

    "customfield"                   => "Användarskräddarsytt fält|Användarskräddarsydda fält",
    "customfield_order"             => "Dra raderna för att ändra ordningen som de skräddarsydda fältet visas för användare.",

    "role"                          => "Roll|Roller",

    "operator_login_log"            => "Operatörinloggningslog",
    "system_activity_log"           => "Systemaktivitetslog",
    "activity_log"                  => "Aktivitetslog",

    "mass_email"                    => "Skicka masse-post",
    "send_email"                    => "Skicka e-post",
    "choose_template"               => "Välj mall...",

    "ldap_account"                  => "LDAP-konto|LDAP-konton",
    "ldap_operator_desc"            => "Söker efter en existerande operatör eller skapar en ny.",
    "ldap_server"                   => "LDAP-server",
    "ldap_server_desc"              => "Serverns hostnamn. Alternativt kan du specifiera den fulla LDAP-URI:n. Exempel: ldaps://ldap.server:1234/ kommer ansluta via SSL till porten 1234.",
    "ldap_username"                 => "LDAP-användarnamn",
    "ldap_username_desc"            => "Användarnamnet som operatören kommer använda för att logga in till helpdesken (deras LDAP-användarnamn).",
    "ldap_rdn"                      => "LDAP RDN eller DN",
    "ldap_rdn_desc"                 => "Det distingerade för LDAP-användarnamnet, till exempel: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "LDAP-detaljer",
    "ldap_extension_missing"        => "php-ldap-förlängningen är för närvarande inte laddad. Användare kommer inte att kunna logga in via LDAP.",

    "operator_details"              => "Operatördetaljer",

    "email_notifications"           => "E-postnotifikationer",
    "email_notifications_desc"      => "E-postnotifikationerna som kommer mottas från systemet.",

    "enable_ldap"                   => "Tillåt LDAP-inloggning",
    "enable_ldap_desc"              => "Om du använder LDAP kan du aktivera det för operatörsinloggning. Efter att det har aktiverats kan du gå till LDAP-kontoinställningssidan för konfiguration.",
    "user_reg_enabled"              => "Användarregistrering tillåten",
    "user_reg_enabled_desc"         => "Tillåt nya användare att registrera ett konto i framsidan.",
    "user_reg_captcha"              => "Användarregistreringscaptcha",
    "user_reg_captcha_desc"         => "Om captchan ska synas för nya användare vid registrering.",
    "user_name_format"              => "Namnformat",
    "user_name_format_desc"         => "Det format som användar- och operatörnamn visas i helpdesken.",
    "first_last"                    => "För efter",
    "last_first"                    => "Efter för",
    "first_l"                       => "För e.",
    "f_last"                        => "F. efter",
    "password_length"               => "Lösenordslängd",
    "password_length_desc"          => "Den minsta teckenlängden för lösenord vid skapande eller uppdaterande av konto.",
    "password_strength"             => "Lösenordsstyrka",
    "password_strength_desc"        => "Välj vilka tecken som krävs vid registrering av ett nytt användarkonto.",
    "password_str_must_contain"     => "Måste innehålla:",
    "password_str_letters"          => "Åtminstone en bokstav.",
    "password_str_digits"           => "Åtminstone en siffra.",
    "password_str_case"             => "Både stora och små bokstäver.",
    "password_str_symbols"          => "Åtminstone en symbol.",

    "load_template"                 => "Ladda mall",
    "load_template_desc"            => "Vid val av mall ersätts det för närvarande använda ämnet och meddelandet för e-post.",
    "clear_template"                => "Rensa mall",

    "personal_settings"             => "Personliga inställningar",
    "personal_settings_desc"        => "Uppdatera din profil och ändra inställningar som berör ditt egna operatörskonto.",
    "two_fa"                        => "Tvåfaktorsautensiering",
    "notifications"                 => "Notifikationer",
    "two_fa_success_disabled"       => "Tvåfaktorsautensiering har avaktiverats.",
    "two_fa_success_enabled"        => "Tvåfaktorsautensiering har aktiverats.",
    "two_fa_incorrect"              => "Koden är inkorrekt. Se till att koden du skrev in är korrekt och att servertiden är synkroniserad.",
    "two_fa_enabled"                => "2FA aktiverat",
    "two_fa_disable"                => "För att avaktivera 2FA, verifiera här nedan.",
    "two_fa_enable"                 => "För att aktivera 2FA, sätt upp kontot på din telefon med detaljer här nedanför och verifiera.",
    "verify_code"                   => "Verifiera kod",
    "verify_and_disable"            => "Verifiera & avaktivera",
    "verify_and_enable"             => "Verifiera & aktivera",
    "verify_code_desc"              => "Skriv in en giltig kod för ditt 2FA-konto för att avaktivera 2FA-autentisering.",
    "qr_code"                       => "QR-kod",
    "two_fa_code"                   => "2FA-kod",
    "two_fa_secret"                 => "2FA-hemlighet",
    "two_fa_secret_desc"            => "Förvara detta på en säker plats då du kommer att behöva detta för att lägga in autentiseringskontot igen om du skulle förlora åtkomst.",
    "two_fa_verify_desc"            => "Ladda ner och installera en av följande applikationer och skanna QR-koden eller skriv in den hamliga nyckeln. Detta kommer att sätta upp ditt konto på din enhet. Sedan kommer du att kunna visa kontot och det kommer att genereras en en sexsiffrig kod som du måste skriva in ovan för att verifiera och slutföra uppsättandet. Säkerställ att du klickar verifiera innan innan koden löper ut.  Din servertid kommer behövas vara i synk med en NTP-server för att fungera korrekt.",
    "display_notifications"         => "Visa notifikationer",
    "display_notifications_desc"    => "Systemet kommer polla nya ärenden, svar och andra operatörer som loggar in medan du har operatörspanel öppen. Du kan välja mellan skrivbordsnotifieringar, webbläsarnotifieringar och att avaktivera det helt.",
    "desktop_notifications"         => "Skrivbordsnotifikationer",
    "browser_notifications"         => "Webbläsarnotifikationer",
    "operator_template"             => "Operatörsmall",

    "search_for_user"               => "Sök efter användare...",
    "select_operator"               => "Välj en operatör...",
    "select_group"                  => "Välj en grupp...",

    "your_ip_has_been_banned"       => "Din IP har bannlysts.",
    "password_reset_error"          => "Användarkontot eller återställningstoken hittades inte. Verifiera att detaljerna är korrekta eller försök att återställa igen.",
    "password_reset_not_found"      => "Användaren hittades inte eller så kunde inte lösenordet återställas.",
    "password_reset_expired"        => "Token har gått ut, försök igen.",
    "password_reset_invalid"        => "Ogiltig token. Verifiera att detaljerna är korrekta eller försök igen.",
    "password_reset_success"        => "Lösenord återställt!",
    "password_reset_already"        => "Du har redan bekräftat ditt konto och kan logga in.",
    "password_not_valid"            => "Lösenorden är inte giltiga eller inte likadana.",
    "invalid_reset_request"         => "Ogiltig lösenordåterställningsbegäran.",

    "simpleauth_token_expired"      => "Tillgångstoken har utgått.",
    "simpleauth_token_invalid"      => "Den tillhandahållna tillgångstoken är ogiltig.",
    "simpleauth_invalid_guard"      => "Kan inte logga in som en ickegiltig användare.",
    "simpleauth_not_allowed"        => "Operatörer kan för närvarande inte logga in med SimpleAuth.",

    /*
     * 2.0.2
     */

    "email_history"                 => "E-posthistorik",
    "view_email"                    => "Visa e-post",

    "ban_after_count"               => "Bannlys IP efter misslyckade inloggning",
    "ban_after_count_user"          => "Antalet misslyckade inloggningar som krävs för att användarens IP ska bannlysas och de inte längre kan logga in till framsidan under den konfigurerade tiden. Om den sätts till 0 avaktiveras IP-bannlysningar helt.",
    "ban_after_count_operator"      => "Antalet misslyckade inloggningar som krävs för att användarens IP ska bannlysas och de inte längre kan logga in till operatörspanelen eller API:et under den konfigurerade tiden. Om den sätts till 0 avaktiveras IP-bannlysningar helt.",
    "ban_length"                    => "IP-bannlysningens längd",
    "ban_length_desc"               => "Längden på IP-bannlysningen när de uppnår det konfigurerade antalet misslyckade inloggningar på en dag.",
    "n_failed_logins"               => ":count misslyckade inloggningar under 24 timmar",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Tar en paus...",
    "operator_session_expired"      => "Du var inaktiv ett eller loggade in på en annan enhet så jag tog en tupplur. Väck mig genom att logga in igen.",
    "log_back_in"                   => "Logga in igen",
    "all_users"                     => "Alla användare",
    "all_operators"                 => "Alla operatörer",
    "email_per_batch"               => "E-post per sats",
    "email_per_batch_desc"          => "Antal e-post som skickas tillsammans vid varje tillfälle.",
    "batch_interval"                => "Satsintervaller",
    "batch_interval_desc"           => "Skillnaden mellan e-postsatser i minuter, 1 minut är minimum.",
    "select_user_groups"            => "Välj användar-/operatörsgrupper eller skriv in e-postadresser...",
    "mass_email_sending_time"       => "Det kommer ta ungefär :time att skicka all e-post.",
    "organisations_enabled"         => "Organisationer aktiverade",
    "organisations_enabled_desc"    => "Användare kan lägga till en organisation till sin profil och lägga till andra användare till den som standard. Om du bara hanterar konsumenter kan du avaktivera organisationsinställningen och gömma den från gränssnittet.",
    "manager_notifications"         => "Notifikationer för organisationschefer",
    "manager_notifications_desc"    => "Om organisationschefer ska få e-postnotifikationer när ärenden öppnade av andra användare i organisationen uppdateras som standard. Varje chef kan skriva över detta genom att ändra i sin egen profil.",
    "manager_email_notifications_desc" => "Om de ska ta emot e-postnotifikationer när ärenden öppnade av andra användare i din organisation uppdateras.",
    "organisation_notifications_desc" => "Om du vill ta emot e-postnotifikationer när ärenden öppnade av andra användare i din organisation uppdateras.",
    "select_operator_group_desc"    => "Välj åtminstone en operatörsgrupp för denna operatör.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Organisationskräddarsytt fält|Organisationskräddarsydda fält",
    "recent_users"                  => "Senaste användare",
    "recent_organisations"          => "Senaste organisationer",
    "group_brand_desc"              => "Välj vilka varumärken som operatörerna i denna grupp kommer att kunna se, skapa och ta bort (beroende på tillåtelser) ärenden och annat innehåll.",
    "select_operators"              => "Välj operatörer...",
    "select_groups"                 => "Välj grupper...",
    "group_department_desc"         => "Tilldela alla medlemmar av denna grupp till avdelningar, operatörer kanoperators can also be assigned individually in the department settings.",
    "op_settings_group_dept"        => "Tilldelad via operatörsgrupper:",
    "op_settings_group_dept_desc"   => "Dessa avdelningar är ärvda automatiskt från operatörsgrupperna valda ovan. För att tilldela via en operatörgrupp: ändra operatörgruppen eller avdelningsinställningar.",
    "op_settings_individual_dept"   => "Tilldelade individuellt:",
    "op_settings_individual_dept_desc" => "Dessa avdelningar är extra till eventuella avdelningar operatören är tilldelad via sina grupper ovan.",
    "also_registered_other_brand"   => "Denna användare är också registrerad i varumärket :brands.|Denna användare är också registrerad i varumärkena :brands.",
    "signature"                     => "Signatur|Signaturer",
    "signature_desc"                => "Skapa personliga ärendesignaturer med valmöjligheten att skräddarsy beroende på varumärket/avdelningen av ärendet. Standardsignaturen används när en signatur för en specifik avdelning och/eller varumärke inte kan hittas.",
    "operator_signature"            => "Operatörssignatur|Operatörssignaturer",
    "ticket_signature_desc"         => "Sätt operatörens standardärendesignatur.",
    "operator_signature_desc"       => "Ytterliggare signaturer för specifika avdelningar och/eller varumärken kan sättas i <a href=':route' target='_blank'>operatörssignatursektionen</a>.",
    "view_organisation"             => "Visa Organisationer",
    "new_owner"                     => "Ny ägare",
    "operator_role"                 => "Operatörsroll|Operatörsroller",
    "manage_users"                  => "Hantera användare",
    "manage_organisations"          => "Hantera organisationer",
    "manage_operators"              => "Hantera operatörer",
    "user_profile"                  => "Användarprofil",
    "organisation_access_level"     => "Organisationåtkomstnivåer",
    "organisation_notifications"    => "Organisationnotifieringar",
    "organisation_users"            => "Organisationanvändare",
    "organisation_users_ticket"     => "Här ovanför finns en lista över din organisations chefer som också kommer att bli e-postadeuppdateringar gällande detta ärende.",

    /*
     * 2.1.1
     */
    "change_password"               => "Ändra lösenord",
    "current_password"              => "Nuvarande lösenord",
    "new_password"                  => "Nytt lösenord",
    "personal_confirm_password"     => "Bekräfta nuvarande lösenord för att sätta ett nytt.",
    "operator_confirm_password"     => "Bekräfta lösenord för att ändra operatörskontot.",
    "login_via_idp"                 => "Logga in via IdP",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Sök efter användare/operatör...",
    "two_fa_personal_settings"      => "Operatören kan aktivera 2FA i sina personliga inställningar.",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "Formatet som används för att visa användarens namn i applikationen.",
    "operator_name_format_desc"     => "Formatet som används för att visa operatörens namn i applikationen.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Ta bort Från :record?",
    "remove_from_warn"              => "Detta kommer permanent ta bort <strong>:name</strong> användaren från :record.",

);
