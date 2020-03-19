<?php
// @(#) $Id$
// +-----------------------------------------------------------------------+
// | Copyright (C) 2009, http://devphp.sourceforge.net/                    |
// +-----------------------------------------------------------------------+
// | This file is free software; you can redistribute it and/or modify     |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation; either version 2 of the License, or     |
// | (at your option) any later version.                                   |
// | This file is distributed in the hope that it will be useful           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of        |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the          |
// | GNU General Public License for more details.                          |
// +-----------------------------------------------------------------------+
// | Adaptation for Dev-PHP by: Pierre Fauconnier pf18387@users.sf.net     |
// +-----------------------------------------------------------------------+
//   Original work is
// @copyright Frederic G. MARAND
// @license CeCILL Version 2.0
// @link http://www.cecill.info/licences/Licence_CeCILL_V2-en.html
// @version $Id: Gtk_Dumper.php,v 1.1 2008-05-17 09:58:19 marand Exp $
//
/**
 * @object Return an array of interfaces whose name starts with "Gtk"
 * @return array
 */
function getPHPGtkInterfaceNames() {
//       -----------------------
	$aInterfaceName	= get_declared_interfaces();
	$result		= array();
	foreach ( $aInterfaceName as $aValue ) {
		if ( strpos($aValue, 'Gtk') === 0 ) {
			$result[] = $aValue;
		}
	}
	return $result;
} // getPHPGtkInterfaceNames

/**
 * @object Return an array of all methods implemented by <$theClass>
 * @return array
 */
function getClassMethods( $theClass ) {
//       ---------------
	$result = $theClass->getMethods();
	return $result;
} // getClassMethods

/**
 * @object Return a string describing the header of <$theFunction>
 * @return string
 */
function getParameters( $theFunction ) {
//       -------------
	global	$G_arr;
	
	$myArgs = $theFunction->getParameters();
	$myOpts = 0;
// TODO 3 -opFa -cCompletion : When autocompletion will be fully functional... we'll need classes
//	$result = $theFunction->class.'::'.$theFunction->name . "\t( ";
	$result = $theFunction->name . "\t( ";
	foreach ( $myArgs as $aArg ) {
		if ( $aArg->isOptional() ) {
			$result .= ' [';
			++$myOpts;
		}
		$result .= $aArg->getPosition() > 0 ?	', '		: NULL;
// In order to avoid "ReflectionException: Class GdkEventMotion does not exist in ..."
//		Gdk::event_request_motions( GdkEventMotion $event )
		try {
			$myType = $aArg->getClass();
		} catch ( ReflectionException $e ) {
			$myType = NULL;
		}

		if ( ! empty($myType) ) {
			$result .= $myType->name.' ';
		}
		$result .= $aArg->isArray() ?		'array '	: NULL;
		$result .= $aArg->isPassedByReference() ?'& '		: NULL;
		$result .= '$';
		$result .= str_replace(' ', '_', $aArg->getName() );
		if ( $aArg->isDefaultValueAvailable() ) {
			$result .= ' = '.$aArg->getDefaultValue();
		}
	}
	$result .= str_repeat(']', $myOpts );
	$result .= ' )';
	$G_arr[] = $result;
	return $result;
} // getParameters

/**
 * @object Return an array containing the names of the root classes of PHP-GTK2
 * @return array
 */
function getPHPGtkClassNames() {
//       -------------------
// PHP-Gtk2 root classes
	$result = array(
		'Atk',
		'GBoxed',
		'Gdk',
		'GdkAtom',
		'Glade',	// requires php.ini php-gtk.extensions=php_gtk_libglade2.dll (+libglade-2.0-0.dll, libxml2.dll, iconv.dll)
		'GObject',
		'GParamSpec',
		'GPointer',
		'GType',
		'Gtk',
		'GtkAccessible',
//		'GtkAtom',
		'GtkTreeModelRow',
		'GtkTreeModelRowIterator',
		'Pango',
		'PhpGtkException',
	);
	return $result;
} // getPHPGtkClassNames

//______________________________________________________________________________
/**
 * 1- PHP-GTK is mandatory
 */
	$aExtensions	= get_loaded_extensions( false );
	if ( !in_array('php-gtk', $aExtensions) ) {
		die('PHP-GTK not loaded');
	}
/**
 * 2- Extract headers from Interfaces
 **/
	$G_arr		= array();
	$aInterfaces	= getPHPGtkInterfaceNames();
	foreach ( $aInterfaces as $myInterfaceName ) {
		$myClass = new ReflectionClass( $myInterfaceName );
		$aFunctions = getClassMethods( $myClass );
		foreach ( $aFunctions as $myFunction ) {
//			printf("%s\n", getParameters( $myFunction ) );
			getParameters( $myFunction );
		}
	}
/**
 * 3- Extract headers from Classes
 */	
	$aClasses	= getPHPGtkClassNames();
	foreach ( $aClasses as $myClassName ) {
		try {
			$myClass = new ReflectionClass( $myClassName );
		} catch ( ReflectionException $e ) {
			$myClass = NULL;
		}
		if ( ! empty($myClass) ) {
			$aFunctions = getClassMethods( $myClass );
			foreach ( $aFunctions as $myFunction ) {
//				printf("%s\n", getParameters( $myFunction ) );
				getParameters( $myFunction );
			}
		}
	}
	echo "\n";
	sort( $G_arr );
	$aPrevious = '';
	foreach ( $G_arr as $myFunction ) {
		if ( $myFunction <> $aPrevious ) {
			echo $myFunction."\n";
			$aPrevious = $myFunction;
		}
	}
?>
