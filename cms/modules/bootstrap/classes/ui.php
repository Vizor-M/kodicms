<?php defined( 'SYSPATH' ) or die( 'No direct access allowed.' );

/**
 * @package		Twitter Bootstrap
 * @author		ButscHSter
 */
class UI {
	
	const BUTTON_TYPE_BUTTON = 0;
	const BUTTON_TYPE_ANCHOR = 1;

	public static function icon($name)
	{	
		$attributes = array(
			'class' => 'fa fa-' . HTML::chars($name)
		);
	
		return '<i' . HTML::attributes($attributes) . '></i>';
	}

	public static function label($text, $type = 'info')
	{
		$attributes = array(
			'class' => 'label label-' . HTML::chars($type)
		);
		
		return '<span' . HTML::attributes($attributes) . '>' . $text . '</span>';
	}

	public static function badge($text, $type = 'info')
	{
		$attributes = array(
			'class' => 'badge badge-' . HTML::chars($type)
		);
		
		return '<span' . HTML::attributes($attributes) . '>' . $text . '</span>';
	}

	public static function button($body, array $attributes = NULL)
	{
		if (!isset($attributes['class']))
		{
			$attributes['class'] = array();
		}
		else
		{
			$attributes['class'] = explode(' ', $attributes['class']);
		}
		
		$attributes['class'][] = 'btn';
		$attributes['class'] = array_filter(array_unique($attributes['class']));

		if (isset($attributes['icon']))
		{
			$body = $attributes['icon'] . ' ' . $body;
			unset($attributes['icon']);
		}

		if (isset($attributes['href']))
		{
			$attributes['type'] = self::BUTTON_TYPE_ANCHOR;

			$href = $attributes['href'];
			unset($attributes['href']);
		}
		elseif (isset($attributes['name']))
		{
			$attributes['type'] = self::BUTTON_TYPE_BUTTON;
		}

		if (!isset($attributes['type']))
		{
			$attributes['type'] = self::BUTTON_TYPE_BUTTON;
		}

		$type = $attributes['type'];
		unset($attributes['type']);
		
		switch ($type) {
			case self::BUTTON_TYPE_ANCHOR:
				return HTML::anchor($href, $body, $attributes);
				break;
			default:
				return '<button'.HTML::attributes($attributes).'>'.$body.'</button>';
				break;
		}
	}
	
	public static function hidden($title, array $types = array('xs', 'sm'))
	{
		$attributes = array('class' => array());
		
		foreach($types as $type)
		{
			$attributes['class'][] = 'hidden-' . $type;
		}

		return '<span' . HTML::attributes($attributes) . '>' . $title . '</span>';
	}
	
	public static function page_header($title)
	{
		return '<div class="page-header"><h1>' . $title . '</h1></div>';
	}

	public static function actions($page = NULL, $uri = NULL) 
	{
		if($uri === NULL)
		{
			$uri = Route::get('backend')->uri(array('controller' => $page));
		}
	
		return View::factory('ui/actions', array(
			'uri' => $uri
		));
	}
	
	public static function counter( $num = 0 )
	{
		if($num == 0) return '';

		return '<span'.HTML::attributes(array('class' => 'counter')).'>' . (int)$num . '</span>';
	}
}