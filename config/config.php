<?php
	
	// S�kjum uppl �r config.xml og setjum � breytuna $config 
	$myFile = "config/config.xml";
	$fh = fopen($myFile, 'r');
	$config = new SimpleXMLElement(fread($fh, filesize($myFile)));
	fclose($fh);

	/* NOTKUN
	foreach ($config->xpath('//baseLayer') as $baseLayer) 
	{
		echo $baseLayer->layerTitle;
	}*/
?>