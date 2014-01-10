<?php
// Version: 1.0 Alpha; Security

$txt['http_error'] = 'Erreur HTTP';

// Titles for the errors
$txt['behav_400'] = 'Une requ�te invalide a �t� re�ue !';
$txt['behav_403'] = 'Acc�s interdit.';
$txt['behav_417'] = 'Erreur inattendue.';

$txt['behavior_admin'] = 'Erreur de S�curit�';
$txt['behavior_header'] = 'Nous nous excusons pour le d�sagr�ment, mais votre requ�te n\'a pas pu aboutir ; le m�canisme de d�fense du site contre le spam et les malwares a d�tect� un comportement suspicieux similaire � celui d\'un spammeur ou d\'un malware connu. Heureusement, ce probl�me est facile � r�gler.<br /><br />Les r�gles de d�tection sont bas�es sur celles de <a href="http://www.bad-behavior.ioerror.us/">Bad Behavior</a>.';

$txt['behavior_false_ua'] = '� chaque requ�te envoy�e par le navigateur devrait �tre associ�e une ent�te User-Agent, qui l\'identifie aupr�s du serveur. L\'agent utilisateur fourni dans cette requ�te est mensonger. Vous devriez pouvoir acc�der au site apr�s avoir r�tabli le param�tre par d�faut dans votre logiciel.';
$txt['behavior_misconfigured_proxy'] = 'Ce probl�me est souvent d� � des serveurs proxy et autres syst�mes mal configur�s. En temps normal, vous devriez d�sinstaller le logiciel, le d�sactiver n\'�tant pas suffisant. Si vous ne le pouvez pas, contactez l\'administrateur du serveur.';
$txt['behavior_misconfigured_privacy'] = 'Ce probl�me peut survenir en cas d\'utilisation d\'un pare-feu ou d\'un logiciel de s�curisation de navigation mal configur� ou buggu�. Si vous utilisez ce type de logiciel, d�sactivez-le ou corrigez son param�trage avant de r�essayer. (Exemple&nbsp;: Norton Internet Security poss�de un mode de navigation furtive qui emp�che une navigation correcte.)';
$txt['behavior_malware'] = 'Ce probl�me peut �tre d� � la pr�sence de virus ou de spywares sur votre ordinateur, ou de logiciels malveillants se pr�sentant comme des antivirus ou des anti-spyware. Assurez-vous que vos logiciels de s�curisation sont authentiques, qu\'ils sont � jour, et que vous avez pass� votre syst�me au crible de ces logiciels. Une fois votre ordinateur assaini, r�it�rez votre demande.<br /><br />Si vous n\'y connaissez rien, le logiciel gratuit <a href="http://www.microsoft.com/security_essentials/">Microsoft Security Essentials</a> est une bonne piste de d�part, mais ne vous contentez pas de n\'utiliser que lui.';
$txt['behavior_opera_bug'] = 'Quelques versions anciennes du navigateur Opera sont connues pour ce type de comportement. Vous avez bon go�t en mati�re de navigateur, mais mettez-le � jour quand m�me...';
$txt['behavior_chrome_bug'] = 'Quelques versions du navigateur Chrome ont un souci logiciel pouvant d�clencher ce probl�me. Essayez de vider votre historique de navigation et de recharger la page.';

$txt['behavior_footer'] = 'Si les pistes mentionn�es ne vous sont d\'aucune aide, contactez le webmestre par e-mail ({email_address}), et signalez-lui le num�ro de l\'incident ({incident}).';

// Begin the rules as defined in Security.php
// Each rule has a _desc (the text to use, complete with <br /> as appropriate) and _log (the text to display in the admin log)

$txt['behav_blacklist_desc'] = 'Vous n\'avez pas l\'autorisation d\'acc�der au serveur.';
$txt['behav_blacklist_log'] = 'Un agent utilisateur interdit a �t� utilis�.';

$txt['behav_not_cloudflare_desc'] = 'Vous n\'avez pas l\'autorisation d\'acc�der au serveur.';
$txt['behav_not_cloudflare_log'] = 'L\'agent utilisateur s\'est identifi� comme �tant CloudFlare, mais cela reste � prouver.';

$txt['behav_expect_header_desc'] = 'Le requ�te signalait une attente, mais celle-ci n\'a pu �tre combl�e. Veuillez r�essayer. Ce probl�me signale peut-�tre l\'utilisation d\'un logiciel interdit d\'utilisation sur ce site pour cause d\'activit�s frauduleuses. Nous vous conseillons de le d�sinstaller et de contacter son auteur ; remplacez-le en attendant par un navigateur tel qu\'Opera, Firefox, Chrome, Internet Explorer ou Safari.';
$txt['behav_expect_header_log'] = 'La requ�te contenait l\'ent�te \'Expect\' ; une demande de confirmation a �t� faite.';

$txt['behav_no_ua_in_post_desc'] = 'Votre navigateur a envoy� une requ�te invalide.';
$txt['behav_no_ua_in_post_log'] = 'L\'agent utilisateur ne s\'est pas identifi�, ce qui est requis au moment de poster.';

$txt['behav_content_range_desc'] = 'Votre navigateur a envoy� une requ�te invalide.';
$txt['behav_content_range_log'] = 'La requ�te contenait \'Range\' ou \'Content-Range\', ce qui ne devrait pas �tre le cas.';

$txt['behav_empty_refer_desc'] = 'Votre navigateur a envoy� une requ�te invalide.';
$txt['behav_empty_refer_log'] = 'La requ�te sp�cifiait \'Referer\', mais le r�f�rant �tait vide.';

$txt['behav_invalid_refer_desc'] = 'Votre navigateur a envoy� une requ�te invalide.';
$txt['behav_invalid_refer_log'] = 'La requ�te sp�cifiait \'Referer\', mais le r�f�rant semble corrompu.';

$txt['behav_alive_close_desc'] = 'Votre navigateur a envoy� une requ�te invalide.';
$txt['behav_alive_close_log'] = 'La requ�te sp�cifiait \'Connection\' mais contenait des valeurs invalides.';

$txt['behav_wrong_keep_alive_desc'] = 'Votre navigateur a envoy� une requ�te invalide.';
$txt['behav_wrong_keep_alive_log'] = 'La requ�te sp�cifiait \'Keep-Alive\' mais sa forme �tait corrompue.';

$txt['behav_rogue_chars_desc'] = 'Vous n\'avez pas l\'autorisation d\'acc�der au serveur. Des informations mal intentionn�es ont �t� trouv�es dans la requ�te.';
$txt['behav_rogue_chars_log'] = 'Du code malicieux a �t� trouv� dans la requ�te.';

$txt['behav_invalid_via_desc'] = 'Il semblerait que vous utilisiez un serveur proxy non autoris� ici.';
$txt['behav_invalid_via_log'] = 'La requ�te contenait une ent�te \'via\' invalide.';

$txt['behav_banned_via_proxy_desc'] = 'Il semblerait que vous utilisiez un serveur proxy non autoris� ici.';
$txt['behav_banned_via_proxy_log'] = 'Requ�te en provenance d\'un serveur proxy banni.';

$txt['behav_banned_xaa_proxy_desc'] = 'Il semblerait que vous utilisiez un serveur proxy non autoris� ici.';
$txt['behav_banned_xaa_proxy_log'] = 'Des ent�tes invalides, \'X-Aaaaaaaaaa\' ou \'X-Aaaaaaaaaaaa\', ont �t� trouv�es.';

$txt['behav_bot_rfc2965_desc'] = 'Les cookies re�us par le serveur ne sont pas valides. Mettez � jour votre logiciel, ou contactez son auteur et informez-le de la non-conformit� de son logiciel avec les standards de l\'Internet (en particulier, la RFC 2965).';
$txt['behav_bot_rfc2965_log'] = 'Ce robot ne respecte pas la RFC 2965.';

$txt['behav_proxy_connection_desc'] = 'Votre navigateur a envoy� une requ�te invalide.';
$txt['behav_proxy_connection_log'] = 'La requ�te contenait une ent�te interdite, \'Proxy-Connection\'.';

$txt['behav_pragma_desc'] = 'Votre navigateur a envoy� une requ�te invalide.';
$txt['behav_pragma_log'] = 'L\'ent�te \'Pragma\' est interdite dans les requ�tes HTTP/1.1 si elle n\'est pas accompagn�e de \'Cache-Control\'.';

$txt['behav_te_error_desc'] = 'Votre navigateur a envoy� une requ�te invalide.';
$txt['behav_te_error_log'] = 'L\'ent�te \'TE\' est pr�sente, mais TE n\'est pas sp�cifi� dans l\'ent�te \'Connection\'.';

$txt['behav_invalid_range_desc'] = 'Le programme que vous utilisez pour acc�der � ce serveur n\'est pas autoris�. Utilisez un autre programme, dans l\'id�al un navigateur web standard comme Opera, Firefox, Internet Explorer, Safari ou Chrome.';
$txt['behav_invalid_range_log'] = 'La requ�te contient l\'ent�te interdite \'Range\'.';

$txt['behav_no_accept_desc'] = 'Votre navigateur a envoy� une requ�te invalide.';
$txt['behav_no_accept_log'] = 'La requ�te ne contenait pas d\'ent�te \'Accept\'.';

$txt['behav_invalid_win_desc'] = 'Votre requ�te a �t� refus�e, car les informations concernant votre navigateur sont invalides.';
$txt['behav_invalid_win_log'] = 'L\'ent�te User-agent se d�finissait comme IE mais avec une ent�te trafiqu�e.';

$txt['behav_te_not_msie_desc'] = 'Votre requ�te est invalide ; si vous utilisez le navigateur Opera (et vous avez tr�s bon go�t), changez ses param�tres d\'identification navigateur en &quot;Opera&quot; dans les options.';
$txt['behav_te_not_msie_log'] = 'L\'ent�te User-agent se d�finissait comme IE, mais l\'ent�te Connection: TE indique que ce n\'est pas vraiment IE.';

$txt['behav_not_msnbot_desc'] = 'Votre requ�te est invalide ; elle indique que vous �tes associ� � un moteur de recherche majeur, mais sans preuves tangibles.';
$txt['behav_not_msnbot_log'] = 'L\'ent�te User-agent se d�finissait comme msnbot, mais sans le prouver.';

$txt['behav_not_googlebot_desc'] = 'Votre requ�te est invalide ; elle indique que vous �tes associ� � un moteur de recherche majeur, mais sans preuves tangibles.';
$txt['behav_not_googlebot_log'] = 'L\'ent�te User-agent se d�finissait comme Google, mais sans le prouver.';

$txt['behav_offsite_form_desc'] = 'Des donn�es en provenance d\'un autre site ont �t� soumises ici. Ce n\'est pas autoris�.';
$txt['behav_offsite_form_log'] = 'Un formulaire semble avoir �t� envoy� de l\'ext�rieur du site.';

?>