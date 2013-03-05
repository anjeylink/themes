<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Define the TCA for the access control calendar selector.
$tempColumn = array(
	'tx_themes_skin' => array(
		'exclude' => 1,
		'label' => 'Themes',
		'displayCond' => 'FIELD:root:REQ:true',
		'config' => array(
			'type' => 'user',
			'userFunc' => 'tx_Themes_Tca_Skinselector->display',
		)
	),
);

// Add the skin selector for backend users.
t3lib_div::loadTCA('sys_template');
t3lib_extMgm::addTCAcolumns('sys_template', $tempColumn);
t3lib_extMgm::addToAllTCAtypes('sys_template', '--div--;Themes,tx_themes_skin');