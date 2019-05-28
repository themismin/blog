<?php

return [
    'disk' => env('BLOG_DISK', 'public'),
    'system_key' => [
        'blog_name',
        'motto',
        'title',
        'seo_keyword',
        'seo_desc',
        'icp',
        'github_url',
        'weibo_url',
        'disqus_short_name',
        'comment_plugin',
        'statistics_script'
    ],
    'menu' => [
        [
            'manage.home' => [
                'icon'  => 'fa fa-home',
                'name'  => 'Home'
            ]
        ],
        [
            'tree_title' => [
                'icon' => 'fa fa-files-o',
                'name' => '文章'
            ],
            'manage.article.index' => [
                'icon' => '',
                'name' => '文章管理'
            ],
            'manage.article.create' => [
                'icon' => '',
                'name' => '发布文章'
            ],
            'manage.category.index' => [
                'icon' => '',
                'name' => '文章分类'
            ]
        ],
        [
            'manage.tag.index' => [
                'icon' => 'fa fa-tags',
                'name' => '标签'
            ]
        ],
        [
            'manage.navigation.index' => [
                'icon' => 'fa fa-navicon',
                'name' => '导航'
            ]
        ],
        [
            'tree_title' => [
                'icon' => 'fa fa-user',
                'name' => '用户'
            ],
            'manage.user.index' => [
                'icon' => '',
                'name' => '用户管理'
            ],
            'manage.user.create' => [
                'icon' => '',
                'name' => '用户添加'
            ]
        ],
        [
            'tree_title' => [
                'icon' => 'fa fa-cog',
                'name' => '设置'
            ],
            'manage.system.index' => [
                'icon' => '',
                'name' => '系统设置'
            ],
            'manage.link.index' => [
                'icon' => '',
                'name' => '友情链接'
            ],
            'manage.page.index' => [
                'icon' => '',
                'name' => '自定义页面'
            ]
        ]
    ]
];