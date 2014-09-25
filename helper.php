<?php

defined('_JEXEC') or die;

JModelLegacy::addIncludePath(JPATH_SITE.'/components/com_reviews/models', 'ReviewsModel');

abstract class modReviewsHelper
{
	public static function getList(&$params)
	{
		$model = JModelLegacy::getInstance('Reviews', 'ReviewsModel', array('ignore_request' => true));

		$app = JFactory::getApplication();
		$appParams = $app->getParams();
		$model->setState('params', $appParams);

		$items = $model->getItems();
                
		return $items;
	}
}
