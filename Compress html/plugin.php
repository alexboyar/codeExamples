<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.11.2017
 * Time: 16:55
 */
switch ($event->name) {
	case 'OnWebPagePrerender':
		// Compress output html for Google
		$this->modx->resource->_output = preg_replace('#\s+#', ' ', $this->modx->resource->_output);
		break;
}