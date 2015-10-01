<?php function html_header ($title = 'Nix', $style = false, $desc = false)
{
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<meta name="robots" content="all, index, follow" />
		<meta name="language" content="fr-FR" />
		<meta name="keywords" content="nix, Nix, serveur, Minecraft,  rp, roleplay, jeu de rôle, magie, mystère, neige, nord, nordique, aventure, savoir" />
		<meta name="description" content="<?php
			echo ($desc) ? $desc : 'Nix est un serveur français de roleplay sur Minecraft, se déroulant dans une région enneigée et remplit de mystères.'?>" />

		<title><?=htmlentities($title)?></title>
		<?php
		if ($style) { ?>
		<link rel="stylesheet" href="<?=css_directoy.$style?>" />
		<?php } ?>
	</head>

	<body>
<?php
}
?>
