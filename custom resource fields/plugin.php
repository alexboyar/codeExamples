<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.10.2017
 * Time: 13:59
 */

switch ($modx->event->name) {
	case 'OnMODXInit':
		// Загружаем наши поля в модель ресурса
		$modx->loadClass('modResource');
		$modx->map['modResource']['fields']['b_linked_resource'] = 0;
		$modx->map['modResource']['fieldMeta']['b_linked_resource'] = array(
			'dbtype' => 'int',
			'attributes' => 'unsigned',
			'phptype' => 'integer',
			'null' => true,
		);

		$modx->map['modResource']['fields']['b_image'] = '';
		$modx->map['modResource']['fieldMeta']['b_image'] = array(
			'dbtype' => 'varchar',
			'precision' => 255,
			'attributes' => '',
			'phptype' => 'string',
			'null' => false,
			'default' => '',
		);

		$modx->map['modResource']['fields']['b_date'] = 0;
		$modx->map['modResource']['fieldMeta']['b_date'] = array(
			'dbtype' => 'int',
			'precision' => 20,
			'phptype' => 'integer',
			'null' => false,
		);

		$modx->map['modResource']['fields']['b_team1'] = '';
		$modx->map['modResource']['fieldMeta']['b_team1'] = array(
			'dbtype' => 'varchar',
			'precision' => 100,
			'attributes' => '',
			'phptype' => 'string',
			'null' => false,
			'default' => '',
		);

		$modx->map['modResource']['fields']['b_team2'] = '';
		$modx->map['modResource']['fieldMeta']['b_team2'] = array(
			'dbtype' => 'varchar',
			'precision' => 100,
			'attributes' => '',
			'phptype' => 'string',
			'null' => false,
			'default' => '',
		);

		$modx->map['modResource']['fields']['b_team1_score'] = '';
		$modx->map['modResource']['fieldMeta']['b_team1_score'] = array(
			'dbtype' => 'varchar',
			'precision' => 10,
			'attributes' => '',
			'phptype' => 'string',
			'null' => false,
			'default' => '',
		);

		$modx->map['modResource']['fields']['b_team2_score'] = '';
		$modx->map['modResource']['fieldMeta']['b_team2_score'] = array(
			'dbtype' => 'varchar',
			'precision' => 10,
			'attributes' => '',
			'phptype' => 'string',
			'null' => false,
			'default' => '',
		);

		$modx->map['modResource']['fields']['b_team1_city'] = '';
		$modx->map['modResource']['fieldMeta']['b_team1_city'] = array(
			'dbtype' => 'varchar',
			'precision' => 20,
			'attributes' => '',
			'phptype' => 'string',
			'null' => false,
			'default' => '',
		);

		$modx->map['modResource']['fields']['b_team2_city'] = '';
		$modx->map['modResource']['fieldMeta']['b_team2_city'] = array(
			'dbtype' => 'varchar',
			'precision' => 20,
			'attributes' => '',
			'phptype' => 'string',
			'null' => false,
			'default' => '',
		);

		$modx->map['modResource']['fields']['b_location'] = '';
		$modx->map['modResource']['fieldMeta']['b_location'] = array(
			'dbtype' => 'varchar',
			'precision' => 50,
			'attributes' => '',
			'phptype' => 'string',
			'null' => false,
			'default' => '',
		);

		$modx->map['modResource']['fields']['b_name'] = '';
		$modx->map['modResource']['fieldMeta']['b_name'] = array(
			'dbtype' => 'varchar',
			'precision' => 255,
			'attributes' => '',
			'phptype' => 'string',
			'null' => false,
			'default' => '',
		);

		$modx->map['modResource']['fields']['b_count'] = 0;
		$modx->map['modResource']['fieldMeta']['b_count'] = array(
			'dbtype' => 'int',
			'precision' => 10,
			'phptype' => 'integer',
			'null' => false,
			'default' => 0
		);


 		$modx->map['modResource']['fields']['rf_price'] = 0;
 		$modx->map['modResource']['fieldMeta']['rf_price'] = array(
 			'dbtype' => 'float',
 			'precision' => 11,
 			'attributes' => 'unsigned',
 			'phptype' => 'float',
 			'null' => false,
 			'default' => 0,
 		);

 		$modx->map['modResource']['fields']['rf_pr_description'] = '';
 		$modx->map['modResource']['fieldMeta']['rf_pr_description'] = array(
 			'dbtype' => 'text',
 			'attributes' => '',
 			'phptype' => 'string',
 			'null' => false,
 			'default' => '',
 		);
		break;
	case 'OnDocFormSave':
		if ($resource->get('template') == 3) {
			// Сохраняем ТВ в поля таблицы ресурса
			$resource->set('b_image', $resource->getTVValue('img'));
			$resource->set('b_linked_resource', $resource->getTVValue('linked_resource'));
			$resource->save();
		} elseif ($resource->get('template') == 5) {
			$resource->set('b_date', strtotime($resource->getTVValue('date')));
			$resource->save();
		}
		break;
	case 'OnDocFormRender':
		if ($resource->get('template') == 5) {
			$modx->controller->addLastJavascript('/assets/components/' . $modx->getOption('site_folder_name') .
				'/js/mgr/resource/fields.js');
		}
		break;
}