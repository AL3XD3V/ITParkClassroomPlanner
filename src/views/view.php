<?php

class View
{

	function generate($content_view, $template_view, $data = null)
	{
		include './src/views/'.$template_view;
	}

}
