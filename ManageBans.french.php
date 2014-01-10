<?php
// Version: 0.1; ManageBans

$txt['ban_general_description'] = 'Cette section vous permet de g�rer les bannissements (bans) des utilisateurs p�nibles, spammeurs ou g�n�ralement emp�cheurs de poster en rond.';
$txt['ban_description_hard'] = 'Cette section vous permet de g�rer les bannissements (bans) "s�v�res", qui emp�chent aux utilisateurs toute action, et imm�diatement.';
$txt['ban_description_soft'] = 'Cette section vous permet de g�rer les bannissements (bans) "l�gers", qui n\'emp�chent pas aux utilisateurs d\'utiliser le forum, mais les d�courage progressivement de causer des probl�mes, en simulant des probl�mes techniques sur le forum.';
$txt['ban_description_add'] = 'Cette section vous permet d\'ajouter de nouveaux bannissements (bans) � votre forum.';
$txt['ban_description_settings'] = 'Cette section vous permet de changer les param�tres s\'appliquant aux bannissements (bans), principalement � ceux de type "l�ger".';

$txt['ban_type'] = 'Type';
$txt['ban_type_id_member'] = 'Membre';
$txt['ban_type_member_name'] = 'Noms des membres';
$txt['ban_type_email'] = 'E-mail';
$txt['ban_type_ip_address'] = 'IP';
$txt['ban_type_hostname'] = 'Nom d\'h�te';

$txt['ban_edit'] = 'Modifier ban';

$txt['ban_content'] = 'Banni';
$txt['ban_reason'] = 'Raison du ban';
$txt['ban_added'] = 'Ajout� le';
$txt['ban_added_by'] = 'Ajout� par';
$txt['ban_invalid_member'] = 'Le membre num�ro #%1$s a �t� banni mais n\'existe pas.';

$txt['ban_id_member_is'] = 'Le membre&nbsp;: <a href="%1$s">%2$s</a>';

$txt['ban_member_names_beginning'] = 'Les noms de membre commen�ant par %1$s %2$s';
$txt['ban_member_names_ending'] = 'Les noms de membre se terminant par %1$s %2$s';
$txt['ban_member_names_containing'] = 'Les noms de membre contenant %1$s %2$s';
$txt['ban_member_names_matching'] = 'Le nom de membre de&nbsp;: %1$s %2$s';
$txt['ban_member_names_case_matters'] = '(sensible � la casse)';

$txt['ban_entire_domain'] = 'Toute adresse e-mail sur le domaine %1$s';
$txt['ban_entire_tld'] = 'Toute adresse e-mail dont le suffixe de domaine est %1$s';
$txt['ban_gmail_style_email'] = 'Toute variation de %1$s@%2$s';

$txt['ban_entire_hostname'] = 'Tous les utilisateurs du nom d\'h�te %1$s';

$txt['ban_remove_selected'] = 'Supprimer la s�lection';
$txt['ban_remove_selected_confirm'] = '�tes-vous s�r de vouloir supprimer les bannissements s�lectionn�s&nbsp;?';

$txt['ban_hardness_header'] = 'Type de ban';
$txt['ban_hardness_title'] = 'Quel type de ban&nbsp;?';
$txt['ban_hardness_soft'] = 'Ban l�ger';
$txt['ban_hardness_hard'] = 'Ban s�v�re';
$txt['ban_hardnesses'] = 'Les bans l�gers n\'emp�chent pas � un utilisateur d\'utiliser le forum, ils se contentent de le g�ner. On peut aussi emp�cher aux adresses IP � ban l�ger de s\'inscrire. A contrario, les bans s�v�res mettent un terme imm�diat aux activit�s de l\'utilisateur.';

$txt['ban_type_header'] = 'Crit�res de ban';
$txt['ban_type_title'] = 'Sur quoi doit se baser le ban&nbsp;?';
$txt['ban_type_description'] = 'Plusieurs options sont disponibles suivant le type de ban � impl�menter.';
$txt['ban_type_title_id_member'] = 'Un membre sp�cifique de la communaut�';
$txt['ban_type_title_member_name'] = 'Un ou plusieurs noms de membre';
$txt['ban_type_title_email'] = 'Une adresse e-mail ou des domaines';
$txt['ban_type_title_ip_address'] = 'Une adresse IP ou une plage d\'IP';
$txt['ban_type_title_hostname'] = 'Un nom d\'h�te ou une plage d\'h�tes';

$txt['ban_type_id_member_type'] = 'Qui voulez-vous bannir&nbsp;?';

$txt['ban_type_member_name'] = 'Quel type de noms de membre bannir&nbsp;?';
$txt['ban_member_names_select_beginning'] = 'Les noms commen�ant par...';
$txt['ban_member_names_select_ending'] = 'Les noms se terminant par...';
$txt['ban_member_names_select_containing'] = 'Les noms contenant...';
$txt['ban_member_names_select_matching'] = 'Les noms correspondant �...';

$txt['ban_member_case_sensitive'] = 'Sensible � la casse&nbsp;?';
$txt['ban_member_case_sensitive_desc'] = 'Si oui, <em>Admin</em> ne sera pas vu de la m�me mani�re qu\'<em>admin</em>. En temps normal, le nom doit �tre insensible � la casse, donc laissez d�coch�.';

$txt['ban_type_email_type'] = 'Quelle sorte d\'adresse e-mail bannir&nbsp;?';
$txt['ban_type_email_type_specific'] = 'Une ou plusieurs adresses sp�cifiques';
$txt['ban_type_email_type_domain'] = 'Un domaine entier';
$txt['ban_type_email_type_tld'] = 'Une plage enti�re de domaines';
$txt['ban_type_email_content'] = 'Adresse(s) � bannir';
$txt['ban_email_gmail_style'] = 'Domaine de type Gmail&nbsp;?';

$txt['ban_type_ip_address'] = 'Quel type d\'adresse IP bannir&nbsp;?';
$txt['ban_type_ip_range'] = 'Bannir une plage d\'adresses IP&nbsp;?';
$txt['ban_type_range_start'] = 'D�but&nbsp;:';
$txt['ban_type_range_end'] = 'Fin&nbsp;:';
$txt['ban_type_ip_address_details'] = 'Adresse(s) IP � bannir&nbsp;:';

$txt['ban_type_hostname'] = 'Quel nom d\'h�te voulez-vous bannir&nbsp;?';
$txt['ban_type_hostname_wildcard'] = 'Vous pouvez utiliser * comme joker, par exemple *.net (tous les domaines en .net), ou *.comcast.net (tous les sous-domaines ayant comcast.net comme domaine).';

$txt['ban_information'] = 'Notes � propos du ban';
$txt['ban_reason'] = 'Raison du ban';
$txt['ban_reason_subtext'] = 'Requis pour vous rafra�chir la m�moire sur ce ban � l\'avenir, � vous ou � un autre administrateur.';
$txt['ban_message'] = 'Message � montrer � l\'utilisateur';
$txt['ban_message_subtext'] = 'Facultatif. Si vous remplissez ce champ, il sera montr� aux utilisateurs bannis pour leur expliquer la raison du ban.';

$txt['ban_no_modify'] = 'Vous ne pouvez pas modifier un ban de nom d\'h�te si les lookups (recherches) de nom d\'h�te sont d�sactiv�s.';

$txt['ban_invalid_type'] = 'Vous n\'avez pas sp�cifi� un type de ban valide.';
$txt['ban_invalid_member'] = 'Vous n\'avez pas sp�cifi� de membre valide � bannir.';
$txt['ban_invalid_membername'] = 'Vous n\'avez pas sp�cifi� de nom valide � bannir.';
$txt['ban_invalid_ip_address'] = 'Vous n\'avez pas sp�cifi� d\'adresse IP ou plage IP valide � bannir.';
$txt['ban_invalid_hostname'] = 'Vous n\'avez pas sp�cifi� un nom d\'h�te valide � bannir.';

$txt['softban_blankpage'] = 'Chances qu\'un banni l�ger re�oive une page blanche';
$txt['softban_percent_subtext'] = 'En pourcentage, de 0 � 100.';
$txt['softban_nosearch'] = 'Chances qu\'un banni l�ger ne puisse pas lancer une recherche';

?>