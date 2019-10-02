<?php
/*    Please retain this copyright header in all versions of the software
 *
 *    Copyright (C) Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}.
 */

$oParentTheme = oxNew(\OxidEsales\Eshop\Core\Theme::class);
$oParentTheme->load('wave');
$aTheme = [
    'id'             => $oParentTheme->getInfo('id') . '_child',
    'title'          => $oParentTheme->getInfo('title') . '<i>&nbsp;(ChildTheme)</i>',
    'description'    => $oParentTheme->getInfo('description'),
    'thumbnail'      => 'theme.jpg',
    'version'        => '1.0.0',
    'author'         => '<a href="https://ecomstyle.de" target="_blank" title="OXID6 Module & Designs"><strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong></a>',
    'parentTheme'    => $oParentTheme->getInfo('id'),
    'parentVersions' => [$oParentTheme->getInfo('version')]
];
