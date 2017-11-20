<?php

return [
    'name' => 'metadesc',
    
    'type' => 'extension',
    
    'main' => function ($app) {
    },
    
    'events' => [
        
        'site' => function ($event, $app) {
            
            $app->on('view.meta', function ($event, $meta) use ($app) {
                
                $meta([
                        'description' => $meta->get('og:description'),
                    ]);
            }, -1);
            
        },
    ],

];