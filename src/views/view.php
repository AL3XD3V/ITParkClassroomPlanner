<?php

class View
{

	function generate($content_view, $template_view, $data = null, $data2 = null)
	{
		include './src/views/'.$template_view;
	}

}
