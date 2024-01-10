<?php

use craft\elements\Entry;
use craft\elements\Asset;
use craft\helpers\UrlHelper;

return [
    'endpoints' => [
        '/api/products' => function() {
            return [
                'elementType' => Entry::class,
                'criteria' => ['section' => 'products'],
                'cache' => false,
                'serializer' => 'jsonFeed',
                    return [

                    ];
                },
            ];
        },
        '/api/products/<entryId:\d+>' => function($entryId) {
            return [
                'elementType' => Entry::class,
                'criteria' => ['id' => $entryId],
                'one' => true,
                'cache' => false,
                'serializer' => 'jsonFeed',
                'transformer' => function(Entry $entry) {
                  return [
                    
                  ];
              },
            ];
        },
    ]
];