<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav/user/config/site.yaml',
    'modified' => 1583185675,
    'data' => [
        'title' => 'Grav',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Luis Torres Farias',
            'email' => 'luis.torres@pucese.edu.ec'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
