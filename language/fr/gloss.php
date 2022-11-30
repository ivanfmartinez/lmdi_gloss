<?php
/**
* gloss.php
* @package phpBB Extension - LMDI Glossary
* @copyright (c) 2015-2021 LMDI - Pierre Duhem
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'LGLOSSAIRE'			=> 'Glossaire',
	'TGLOSSAIRE'			=> 'Configuration de l’extension',

// ACP
	'ACP_GLOSS_TITLE'	=> 'Glossaire',
	'ACP_GLOSS'		=> 'Configuration de l’extension',
	'ALLOW_FEATURE'	=> 'Validation de la fonction de glossaire',
	'ALLOW_FEATURE_EXPLAIN'	=> 'Vous pouvez valider ou inhiber la fonction de glossaire pour l’ensemble du forum.',
	'ALLOW_TITLE'		=> 'Validation des infobulles',
	'ALLOW_TITLE_EXPLAIN'	=> 'Vous pouvez valider ou inhiber l’affichage d’une infobulle lorsque le curseur passe au-dessus du terme dans les messages du forum.',
	'CREATE_UGROUP'		=> 'Création d’un groupe d’utilisateurs',
	'CREATE_UGROUP_EXPLAIN'	=> 'Vous pouvez créer un groupe d’utilisateurs auquel vous attribuerez le rôle d’éditeur des rubriques du glossaire qui a été créé lors de l’installation de l’extension. Vous pouvez ensuite placer dans ce groupe les utilisateurs chargés de cette tâche.',
	'CREATE_AGROUP'		=> 'Création d’un groupe d’administrateurs',
	'CREATE_AGROUP_EXPLAIN'	=> 'Vous pouvez créer un groupe pour gérer les administrateurs du glossaire. Vous pouvez ensuite y ajouter les administrateurs sélectionnés.',
	'LANGUAGE'			=> 'Langue par défaut',
	'LANGUAGE_EXPLAIN'		=> 'Code de langue (par défaut langue du forum) qui est enregistré si vous ne spécifiez pas une autre langue dans le formulaire de saisie.',
	'GLOSS_PIXELS'			=> 'Dimensions des images en pixels',
	'GLOSS_PIXELS_EXPLAIN'	=> 'Indiquez ici la taille maximale de l’image en pixels (sur le plus grand côté).',
	'GLOSS_WEIGHT'			=> 'Poids de l’image',
	'GLOSS_WEIGHT_EXPLAIN'	=> 'Indiquez ici le poids maximal de l’image téléchargée (en ko).',
	'TITLE_LENGTH'			=> 'Longueur du texte de l’infobulle',
	'TITLE_LENGTH_EXPLAIN'	=>'Indiquez ici le nombre de caractères auquel le texte de l’infobulle doit être tronqué si la description est trop longue.',
	'ACP_GLOSSARY_FORUMS'	=> 'Sélection des forums',
	'ACP_GLOSSARY_ENABLED'	=> 'Valider le glossaire',


));
