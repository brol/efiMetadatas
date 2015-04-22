<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of efiMetadatas, a plugin for Dotclear 2.
# 
# Copyright (c) 2009-2015 JC Denis and contributors
# 
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------
	/* date */		#15-01-2015

if (!defined('DC_RC_PATH')){return;}

$this->registerModule(
	/* Name */			"efiMetadatas",
	/* Description*/		"Show metadatas of first image of an entry",
	/* Author */			"JC Denis, Pierre Van Glabeke",
	/* Version */			'0.4.1',
	/* Properties */
	array(
		'permissions' => 'admin',
		'type' => 'plugin',
		'dc_min' => '2.6',
		'support' => 'http://forum.dotclear.org/viewtopic.php?id=41468',
		'details' => 'http://plugins.dotaddict.org/dc2/details/efiMetadatas'
	)
);