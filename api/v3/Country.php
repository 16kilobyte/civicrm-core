<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 5                                                  |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2019                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
 */

/**
 * This api exposes CiviCRM country.
 *
 * @package CiviCRM_APIv3
 */

/**
 * Add an Country for a contact.
 *
 * @param array $params
 *   Array per getfields metadata.
 *
 * @return array
 *   API result array
 * @throws \API_Exception
 */
function civicrm_api3_country_create($params) {
  return _civicrm_api3_basic_create(_civicrm_api3_get_DAO(__FUNCTION__), $params, 'Country');
}

/**
 * Adjust Metadata for Create action.
 *
 * The metadata is used for setting defaults, documentation & validation.
 *
 * @param array $params
 *   Array of parameters determined by getfields.
 */
function _civicrm_api3_country_create_spec(&$params) {
  $params['name']['api.required'] = 1;
}

/**
 * Deletes an existing Country.
 *
 * @param array $params
 *
 * @return array
 */
function civicrm_api3_country_delete($params) {
  return _civicrm_api3_basic_delete(_civicrm_api3_get_DAO(__FUNCTION__), $params);
}

/**
 * Retrieve one or more countryies.
 *
 * @param array $params
 *   Array per getfields metadata.
 *
 * @return array
 *   api result array
 */
function civicrm_api3_country_get($params) {

  return _civicrm_api3_basic_get(_civicrm_api3_get_DAO(__FUNCTION__), $params);
}
