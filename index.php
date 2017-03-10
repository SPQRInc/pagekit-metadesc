<?php

return [
	'name' => 'metadesc',
	
	'type' => 'extension',
	
	'main' => function ($app) {
		
	},
	
	'events' => [
		'site' => function ($event, $app) {
			
			$app->on('view.meta', function ($event, $meta) use ($app) {
				
				$description = $app['node']->get('meta.og:description');
				$meta([
					      'description' => $description
				      ]);
			}, 60);
		}
	]
];