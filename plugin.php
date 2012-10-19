<?php

class KokenHtmlInjector extends KokenPlugin {

	function __construct()
	{
		$this->register_filter('before_closing_head', 'head');
		$this->register_filter('before_closing_body', 'foot');
	}

	function head()
	{

		if (isset($this->data->header))
		{
			return $this->data->header;	
		}

	}

	function foot()
	{

		if (isset($this->data->footer))
		{
			return $this->data->footer;	
		}

	}
}