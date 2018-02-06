<?php
/*
|--------------------------------------------------------------------------
| Module Names
|--------------------------------------------------------------------------
*/
$lang['module_blog_posts'] = 'Įrašai';
$lang['module_blog_categories'] = 'Kategorijos';
$lang['module_blog_comments'] = 'Komentarai';
$lang['module_blog_links'] = 'Nuorodos';
$lang['module_blog_authors'] = 'Autoriai';
$lang['module_blog_settings'] = 'Nustatymai';
/*
|--------------------------------------------------------------------------
| Errors
|--------------------------------------------------------------------------
*/
$lang['blog_error_blank_comment'] = 'Prašome įrašyti komentarą.';
$lang['blog_error_invalid_comment_email'] = 'Prašome įrašyti teisingą el. pašto adresą.';
$lang['blog_error_comment_site_submit'] = 'Komentarai turi būti pateikiami per formą svetainėje.';
$lang['blog_error_comment_already_submitted'] = 'Šis komentaras jau yra pateiktas.';
$lang['blog_error_consecutive_comments'] = 'Norėdami rašyti pakartotinį komentarą turite palaukti.';
$lang['blog_error_delete_uncategorized'] = 'Negalite ištrinti kategorijos „Be kategorijos“.';
/*
|--------------------------------------------------------------------------
| Page Titles
|--------------------------------------------------------------------------
*/
$lang['blog_archives_page_title'] = 'Archyvai';
$lang['blog_authors_list_page_title'] = 'Autoriai';
$lang['blog_author_posts_page_title'] = '%s įrašai(-ų)';
$lang['blog_categories_page_title'] = 'Kategorijos';
$lang['blog_search_page_title'] = '%s paieškos rezultatai(-ų)';
/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/
$lang['blog_page_num_title'] = 'Įrašai %1s-%2s';
$lang['blog_prev_page'] = '&lt;&lt; ankstesnis puslapis';
$lang['blog_next_page'] = 'Kitas puslapis &gt;&gt;';
$lang['blog_first_link'] = '';
$lang['blog_last_link'] = '';
$lang['blog_error_no_posts_to_comment'] = 'Nėra įrašų, kuriuos galėtumėte komentuoti.';
$lang['blog_post_is_not_published'] = 'Įrašas, susijęs su šiuo komentaru, nėra publikuotas, todėl pranešimai apie atsakymus į komentarą nebus siunčiamas.';
$lang['blog_comment_notify_option1'] = 'Visi';
$lang['blog_comment_notify_option2'] = 'Komentarai';
$lang['blog_comment_notify_option3'] = 'Nėra';
/***************************************************************************
IMPORTANT: SEVERAL FORM FIELD LABELS ALREADY EXIST IN THE fuel language file
***************************************************************************/
/*
|--------------------------------------------------------------------------
| Posts (several fields are in the main form_label_ common)
|--------------------------------------------------------------------------
*/
$lang['form_label_formatting'] = 'Formatavimas';
$lang['form_label_author'] = 'Autorius';
$lang['form_label_sticky'] = 'Lipnu';
$lang['form_label_allow_comments'] = 'Leisti komentarus';
$lang['form_label_categories'] = 'Kategorijos';
/*
|--------------------------------------------------------------------------
| Comments 
|--------------------------------------------------------------------------
*/
$lang['blog_comment_monitor_subject']= "%s: buvo pridėtas komentaras.";
$lang['blog_comment_monitor_msg']= "Prie tinklaraščio įrašo buvo pridėtas komentaras. Norėdami peržiūrėti komentarą prisijunkite prie FUEL:";
$lang['blog_comment_reply_subject']= "%1s tinklaraščio komentaro atsakymas";
$lang['blog_comment_reply_msg']= "%1s atsakė į Jūsų komentarą straipsniui %2s.";
$lang['blog_captcha_text'] = "Paveikslėlyje rodomą tekstą įrašykite formoje aukščiau. <br /> Jei teksto neįžiūrite, atšviežinkite puslapį.";
$lang['blog_comment_is_spam'] = "Įrašytas komentaras negali būti pateiktas toks, koks yra, nes jis buvo pažymėtas šlamšto žyme.";
$lang['blog_error_captcha_mismatch'] = "Įvestas tekstas neatitiko paveikslėlio.";
$lang['blog_email_flagged_as_spam'] = 'PAŽYMĖTA ŠLAMŠTO ŽYME!!!';
$lang['blog_email_published'] = 'Publikuota';
$lang['blog_email_author_name'] = 'Autoriaus vardas';
$lang['blog_email_author_email'] = 'Autoriaus el. adresas';
$lang['blog_email_author_website'] = 'Svetainė';
$lang['blog_email_author_ip'] = 'Autoriaus IP';
$lang['blog_email_content'] = 'Turinys';
$lang['form_label_post_title'] = 'Įrašo pavadinimas';
$lang['form_label_comment'] = 'Komentaras';
$lang['form_label_comment_author_name'] = 'Komentaro autoriaus vardas';
$lang['form_label_is_spam'] = 'Yra šlamštas';
$lang['form_label_post_published'] = 'Įrašas paskelbtas';
$lang['form_label_date_submitted'] = 'Pateikimo data';
$lang['form_label_ip_host'] = 'IP/Host';
$lang['form_label_replies'] = 'Atsakymai';
$lang['form_label_reply'] = 'Atsakymas';
$lang['form_label_commentor'] = 'Komentatorius';
$lang['form_label_reply_notify'] = 'Perspėti';
$lang['form_label_author_ip'] = 'Autoriaus IP adresas';
/*
|--------------------------------------------------------------------------
| Settings 
|--------------------------------------------------------------------------
*/
$lang['form_label_uri'] = 'URI';
$lang['form_label_theme_path'] = 'Temos vieta';
$lang['form_label_theme_layout'] = 'Temos išdėstymas';
$lang['form_label_theme_module'] = 'Temos modulis';
$lang['form_label_use_cache'] = 'Naudoti cache';
$lang['form_label_allow_comments'] = 'Leisti komentarus';
$lang['form_label_monitor_comments'] = 'Stebėti komentarus';
$lang['form_label_use_captchas'] = 'Naudoti Captcha';
$lang['form_label_save_spam'] = 'Įrašyti šlamštu pažymėtus komentarus';
$lang['form_label_akismet_api_key'] = 'Akismet raktas';
$lang['form_label_multiple_comment_submission_time_limit'] = 'Komentaro pateikimo laiko limitas';
$lang['form_label_multiple_comment_submission_time_limit_after_html'] = ' (sekundėmis)';
$lang['form_label_comments_time_limit'] = 'Kiek laiko leisti komentuoti';
$lang['form_label_comments_time_limit_after_html'] = ' dienų po įrašo publikavimo (dienomis)';
$lang['form_label_cache_ttl'] = 'Cache galiojimo laikas';
$lang['form_label_asset_upload_path'] = 'Įkeliamų failų kelias';
$lang['form_label_per_page'] = 'Puslapyje';
