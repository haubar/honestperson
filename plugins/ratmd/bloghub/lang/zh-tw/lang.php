<?php declare(strict_types=1);

return [
    'plugin' => [
        'name' => '老實人',
        'description' => 'Extends RainLab.Blog with Comments, Tags, Custom Meta Fields, Archives, Statistics, Views and more.',
    ],

    'components' => [
        'bloghub_group' => 'BlogHub Settings',

        'base' => [
            'label' => 'Base Configuration',
            'comment' => 'The Base BlogHub configuration, should be included on the base CMS layouts.',
            'archive_author' => 'Author CMS Page',
            'archive_author_comment' => 'Name of the CMS Page used for the author archive.',
            'archive_date' => 'Date CMS Page',
            'archive_date_comment' => 'Name of the CMS Page used for the date archive.',
            'archive_tag' => 'Tag CMS Page',
            'archive_tag_comment' => 'Name of the CMS Page used for the tag archive.',
            'author_slug' => 'Use Author Slug only',
            'author_slug_comment' => 'Uses the author_slug backend column field only.',
            'date_invalid' => '404 on invalid dates',
            'date_invalid_comment' => 'Shows the 404 error message on invalid dates.',
            'date_empty' => '404 on empty dates',
            'date_empty_comment' => 'Shows the 404 error message on empty date archives.',
            'tag_multiple' => 'Allow multiple tags',
            'tag_multiple_comment' => 'Allows multiple tag queries using + or , on the tag archive pages.',
        ],
        'author' => [
            'label' => '作者的帖子',
            'comment' => 'Displays a list of posts by author.',
            'filter' => '作者過濾器',
            'filter_comment' => 'Enter a author login name or URL parameter to filter the posts by.',
        ],
        'comment_count' => [
            'label' => '通過評論帖子',
            'comment' => 'Displays a list of posts by the comments counter.'
        ],
        'comments_list' => [
            'label' => '留言列表',
            'comment' => 'Displays a list of comments on the page.',
            'exclude_posts' => '排除帖子',
            'exclude_posts_description' => 'Exclude specific post ids or post slugs (comma-separated list).',
            'amount' => '評論金額',
            'amount_description' => 'The amount of comments to be passed to the page.',
            'amount_validation' => 'Invalid format of the the amount value.',
            'only_favorites' => 'Show Favorites only',
            'only_favorites_description' => 'Shows only comments which has been marked as favorites by the authors.',
            'default_tab' => 'Default Tab',
            'default_tab_comment' => 'The default tab shown in the widget.'
        ],
        'comments_section' => [
            'label' => 'Comments Section',
            'comment' => 'Display a comments section with comment form on the single post CMS page.',
            'group_form' => 'Comment Form',
            'post_slug' => 'Post filter',
            'post_slug_comment' => 'Enter a post slug or URL parameter to filter the comments by.',
            'comments_per_page' => 'Comments per Page',
            'comments_order' => 'Comment order',
            'comments_order_comment' => 'Attribute on which the comments should be ordered.',
            'comments_hierarchy' => 'Display Hierarchically',
            'comments_hierarchy_comment' => 'Shows replies hierarchically below the parent comment or flat using quotation.',
            'comments_anchor' => 'Container Anchor',
            'comments_anchor_comment' => 'The ID of the main comment container, used as URL anchor on the pagination links.',
            'pin_favorites' => 'Pin Favorites',
            'pin_favorites_comment' => 'Pin Author-Favorites comments on top of the comment list.',
            'hide_on_dislike' => 'Hide disliked comments',
            'hide_on_dislike_comment' => 'Hide disliked comments, use either an absolute number or start your number with a colon to define a relation to the likes.',
            'form_position' => 'Form Position',
            'form_position_comment' => 'Change the Position for the Comment Form section.',
            'form_position_above' => 'Above the comments',
            'form_position_below' => 'Below the comments',
            'disable_form' => 'Disable Comment Form',
            'disable_form_comment' => 'Disables the comment submit form, regardless of the post option.',
        ],
        'date' => [
            'label' => '按日期發布',
            'comment' => '按日期顯示文章列表.',
            'filter' => '日期過濾器',
            'filter_comment' => 'Enter a specific date or URL parameter to filter the posts by.',
        ],
        'post' => [
            'date_range' => '預設日期範圍',
            'date_range_comment' => 'Change the default date range used for the graphs.',
            '7days' => '最近7天',
            '14days' => '最近14天',
            '31days' => '最近31天',
            '3months' => '最近3個月',
            '6months' => '最近6個月',
            '12months' => '最近12個月',
            'views_visitors' => 'Views / Visitors',
            'views' => '視圖',
            'visitors' => ' 訪客',
            'published_posts' => '已發表的文章',
            'default_order' => '預設順序',
            'default_order_comment' => 'Change the default order used for the post list',
            'by_published' => '按出版日期',
            'by_views' => '通過視圖',
            'by_visitors' => '由訪客',
            'total' => '總帖子',
            'published' => '發布',
            'scheduled' => '計劃',
            'draft' => '草稿',
            'posts_list' => '帖子列表',
        ],
        'tag' => [
            'label' => '按標籤帖子',
            'comment' => '通過標籤顯示帖子列表.',
            'filter' => '日過濾器',
            'filter_comment' => 'Enter a tag slug or URL parameter to filter the posts by.',
        ],
        'tags' => [
            'label' => '標籤列表',
            'comment' => '顯示（促進）博客標籤的列表。',
            'tags_page' => '標籤檔案頁面',
            'tags_page_comment' => '標籤存檔的CMS頁面的名稱。',
            'only_promoted' => '僅晉升',
            'only_promoted_comment' => '顯示僅宣傳標籤',
            'amount' => '標籤量',
            'amount_description' => '標籤的數量將傳遞給列表。',
            'amount_validation' => '金額值的格式無效。',
            'view' => '標籤視圖',
            'view_comment' => '更改標籤列表的視圖'
        ],
        'deprecated' => [
            'authors_label' => '[OLD] Posts by Author',
            'authors_comment' => '[DEPRECATED] - Please use "Posts By Author" above.',
            'dates_label' => '[OLD] Posts by Date',
            'dates_comment' => '[DEPRECATED] - Please use "Posts By Date" above.',
            'tags_label' => '[OLD] Posts by Tag',
            'tags_comment' => '[DEPRECATED] - Please use "Posts by Tags" above.',
        ],
    ],

    'frontend' => [
        'comments' => [
            'username' => 'Your Username',
            'email' => 'Your Mail address',
            'title' => '標題',
            'comment' => '留言',
            'comment_markdown_hint' => 'You can use the Markdown syntax to style your comment.',
            'captcha' => 'Captcha Code',
            'captcha_reload' => 'Reload Captcha', 
            'captcha_placeholder' => 'Enter the code from the image', 
            'submit_comment' => 'Write a new Comment',
            'cancel_reply' => 'Cancel this Reply',
            'submit_reply' => 'Reply to this comment',
            'approve' => 'Approve',
            'approve_title' => 'Approve this comment',
            'reject' => 'Reject',
            'reject_title' => 'Reject this comment',
            'spam' => 'Mark as Spam',
            'spam_title' => 'Mark this comment as spam',
            'like' => 'Like',
            'like_title' => 'Like this Comment',
            'dislike' => 'Dislike',
            'dislike_title' => 'Dislike this Comment',
            'favorite' => 'Favorite',
            'favorite_title' => 'Favorite this Comment',
            'unfavorite' => 'Unfavorite',
            'unfavorite_title' => 'Unfavorite this Comment',
            'reply' => 'Reply',
            'reply_title' => 'Reply to this Comment',
            'disabled_open' => 'You\'re not allowed to comment on this post.',
            'disabled_restricted' => 'You must be logged-in to comment on this post.',
            'disabled_private' => 'Only registered backend users are allowed to comment on this post.',
            'disabled_closed' => 'The comment section for this post has been closed.',
            'awaiting_moderation' => 'Awaiting Moderation',
            'previous' => 'Previous',
            'next' => 'Next',
            'replyto' => 'Reply to :name',
            'comment_by' => 'Comment by',
            'reply_by' => 'Reply by',
            'by' => 'By',
            'on' => 'on',
        ],
        'errors' => [
            'unknown_post' => 'The passed post id or slug is unknown or invalid.',
            'missing_form_id' => 'The component id is missing or invalid.',
            'form_disabled' => 'The comment form is disabled on this post.',
            'not_allowed_to_comment' => 'You\'re not allowed to comment or reply on this post.',
            'invalid_csrf_token' => 'The passed CSRF token is invalid. Please reload the page and try again.',
            'invalid_validation_code' => 'The passed Comment Validation code is invalid. Please reload the page and try again.',
            'invalid_captcha' => 'The passed Captcha Code was wrong.',
            'honeypot_filled' => 'The passed data seems strange, please try again later.',
            'tos_not_accepted' => 'You need to accept the Terms of Service to comment on this post.',
            'parent_not_found' => 'The parent comment on which you tried to reply does not exist or has been deleted.',
            'parent_invalid' => 'The parent comment on which you tried to reply is invalid or has been moved.',
            'not_allowed_to' => 'You are not allowed to call this action.',
            'moderate_permission' => 'You are not allowed to moderate comments.',
            'invalid_sttus' => 'The passed comment status is invalid.',
            'unknown_comment' => 'The passed comment does not exist (anymore).',
            'disabled_method' => 'This function has been disabled by the website administrator.',
            'no_permissions_for' => 'You don\'t have the permission to call this action.',
            'missing_comment_id' => 'The comment id is missing or invalid.',
            'invalid_comment_id' => 'The passed comment id does not exist.',
            'unknown_error' => 'An unknown error occured, please try again later.'
        ],
        'success' => [
            'update_status' => 'The comment status could be successfully updated.'
        ]
    ],

    'model' => [
        'comments' => [
            'label' => '留言',
            'manage' => '管理留言',
            'recordName' => '留言',
            'status' => '留言狀態',
            'statusColumn' => '狀態',
            'statusComment' => '更改當前評論狀態',
            'statusPending' => '待辦的',
            'statusApproved' => '得到正式認可的',
            'statusRejected' => '拒絕',
            'statusSpam' => '垃圾郵件',
            'title' => '標題',
            'titleComment' => '評論的標題（取決於Bloghub配置）',
            'content' => '留言內容',
            'contentComment' => '評論的簡單內容.',
            'favorite' => '最喜歡的評論',
            'favoriteComment' => '最喜歡的評論被突出顯示，可以顯示在評論列表的頂部。',
            'favoriteColumn' => '最喜歡的',
            'likes' => '喜歡',
            'dislikes' => '毫無疑問',
            'author' => '自動用戶名',
            'authorComment' => '作者的用戶名, when not written by a logged-in user.',
            'authorEmail' => '作者電子郵件地址',
            'authorEmailComment' => 'The E-Mail address of the author, when not written by a logged-in user.',
            'post_visibility' => [
                'label' => '顯示留言',
                'comment' => '是否開放此篇文章的留言板.'
            ],
            'post_mode' => [
                'label' => '留言模式',
                'comment' => '更改這篇文章的留言模式.',
                'open' => '完全開放',
                'restricted' => '限登入網站者',
                'private' => '限管理員',
                'closed' => '不開放'
            ],
            'guest' => '訪客',
            'seconds_ago' => '一秒前',
            'x_ago' => ':amount :format ago',
            'no_comment' => 'No comment available', 
            'no_further_comments' => 'No further comments available', 
        ],
        'post' => [
            'read_time' => 'Read Time: :min minutes :sec seconds',
            'read_time_sec' => 'Read Time: :sec seconds',
            'published_seconds_ago' => 'Published a few seconds ago.',
            'published_ago' => 'Published :amount :format ago.',
            'published_format_years' => 'years',
            'published_format_months' => 'months',
            'published_format_days' => 'days',
            'published_format_hours' => 'hours',
            'published_format_minutes' => 'minutes',
            'statistics' => 'Post Statistics',
        ],
        'tags' => [
            'label' => '標簽',
            'manage' => '管理tag',
            'recordName' => '標簽',
            'slug' => '標記',
            'slugComment' => '標籤說明.',
            'title' => '標題',
            'titleComment' => '支持主題可能顯示標籤標題，而不是標籤標題.',
            'description' => '描述',
            'descriptionComment' => '支持主題可能會在標籤存檔頁面上顯示描述文本。',
            'promote' => '晉升 Tag',
            'promoteComment' => 'Supporting themes may highlight promoted tags in a special way.',
            'color' => 'Color',
            'colorComment' => 'Supporting themes may use this color to highlight this tag.',
            'posts' => 'Assigned Posts',
            'postsComment' => 'The single posts assigned to this tag.',
            'postsEmpty' => '沒有可用的文章.',
            'postsNumber' => '文章編號'
        ],
        'users' => [
            'displayName' => 'Display Name',
            'displayNameComment' => 'A custom version of your name, supporting themes may show them on your posts.',
            'authorSlug' => 'Author Slug',
            'authorSlugComment' => 'Author slugs are used for the archive on the frontend (instead of the login name).',
            'aboutMe' => 'About Me',
            'aboutMeDescription' => 'A small description about yourself, supporting themes may show them on your posts.'
        ],
        'visitors' => [
            'views' => '瀏覽次數 / 觀看人次'
        ]
    ],

    'permissions' => [
        'access_comments' => 'Manage the blog comments',
        'access_comments_comment' => 'Allows access to the comments submenu for all posts.',
        'manage_post_settings' => 'Manage post-related comment settings',
        'moderate_comments' => 'Moderate blog comments',
        'delete_commpents' => 'Allowed to delete published comments',
        'access_tags' => 'Manage the blog tags',
        'access_tags_comment' => 'Allows to access the tags submenu and to set the post tags itself for all posts.',
        'promote_tags' => 'Allows to promote tags',
    ],

    'sorting' => [
        'bloghub_views_asc' => 'Views (ascending)',
        'bloghub_views_desc' => 'Views (descending)',
        'bloghub_unique_views_asc' => 'Unique Views (ascending)',
        'bloghub_unique_views_desc' => 'Unique Views (descending)',
        'bloghub_comments_count_asc' => 'Number of Comments (ascending)',
        'bloghub_comments_count_desc' => 'Number of Comments (descending)',
        'created_at_desc' => 'Published (descending)',
        'created_at_asc' => 'Published (ascending)',
        'comments_count_desc' => 'Comments Counter (descending)',
        'comments_count_asc' => 'Comments Counter (ascending)',
        'likes_desc' => 'Likes Counter (descending)',
        'likes_asc' => 'Likes Counter (ascending)',
        'dislikes_desc' => 'Dislikes Counter (descending)',
        'dislikes_asc' => 'Dislikes Counter (ascending)',
    ],

    'settings' => [
        'config' => [
            'label' => 'BlogHub',
            'description' => 'Manage the BlogHub related settings.'
        ],

        'comments' => [
            'tab' => '留言',
            'general_section' => '常規設置',
            'comment_form_section' => '表單設置',

            'author_favorites' => [
                'label' => '作者的最愛',
                'comment' => 'Allow authors to favourite user comments.'
            ],
            'like_comment' => [
                'label' => '喜歡評論',
                'comment' => 'Enable the Like button on each user comment.'
            ],
            'dislike_comment' => [
                'label' => '不喜歡評論',
                'comment' => 'Enable the Dislike button on each user comment.'
            ],
            'restrict_to_users' => [
                'label' => 'Like & Dislike only for users',
                'comment' => 'Restrict the Like and Dislike functions to logged in users only.'
            ],
            'guest_comments' => [
                'label' => 'Guest Comments',
                'comment' => 'Allow guests to comment on all enabled posts.'
            ],
            'moderate_guest_comments' => [
                'label' => 'Moderate Guest Comments',
                'comment' => 'Moderate each guest comment, before it is published and visible to everyone.'
            ],
            'moderate_user_comments' => [
                'label' => 'Moderate User Comments',
                'comment' => 'Moderate each frontend user comment, before it is published and visible to everyone.'
            ],
            'form_comment_title' => [
                'label' => 'Comment Title Field',
                'comment' => 'Enable and Use the comment title field.',
            ],
            'form_comment_markdown' => [
                'label' => 'Comment Markdown',
                'comment' => 'Allow to use markdown in the comment body field.',
            ],
            'form_comment_honeypot' => [
                'label' => 'Comment Honeypot',
                'comment' => 'Add a Honeypot field to protect your comments from the simplest bots.',
            ],
            'form_comment_captcha' => [
                'label' => 'Comment Captcha',
                'comment' => 'Add a GREGWAR Captcha field to protect your comments from some bots.',
            ],
            'form_tos_checkbox' => [
                'label' => 'Require Terms of Service',
                'comment' => 'Shows a Terms of Service agreement checkbox below the comment form.',
            ],
            'form_tos_hide_on_user' => [
                'label' => 'Hide for known Users',
                'comment' => 'Hides the Terms of Service checkbox for loggedin users and backend users.',
            ],
            'form_tos_type' => [
                'label' => 'Terms of Service Type',
                'cms_page' => 'CMS Page',
                'static_page' => 'Static Page'
            ],
            'form_tos_label' => [
                'label' => 'Terms of Service Label',
                'default' => 'I\'ve read and agree to the [Terms of Service]',
                'comment' => 'The text within the square brackets will link to the specified page.'
            ],
            'form_tos_page' => [
                'cmsLabel' => 'Terms of Service - CMS Page',
                'staticLabel' => 'Terms of Service - Static Page',
                'emptyOption' => '-- Select a Terms of Service Page --',
                'comment' => 'Select the desired page to link to, or leave empty to show the plain label only.'
            ]
        ],

        'meta' => [
            'defaultTab' => 'Meta Data',
            'label' => 'Custom Meta Fields',
            'description' => 'Manage the global custom meta fields for your posts.',
            'prompt' => 'Add a new Meta Field',

            'hint' => [
                'label' => 'Make sure your Field Names are unique',
                'comment' => 'The custom meta fields configured here will be overriden by the meta fields configured in the theme.yaml template file. Thus, keep your keys unique!'
            ],
            'name' => [
                'label' => 'Custom Meta Name',
                'comment' => 'The custom meta name as available on the frontend.'
            ],
            'type' => [
                'label' => 'Custom Meta Type',
                'comment' => 'The custom meta field type as available on the backend.'
            ],
            'config' => [
                'label' => 'Custom Meta Configuration',
                'comment' => 'Pass your field definition configuration here, as documented on the <a href="https://docs.octobercms.com/3.x/element/form/widget-taglist.html" target="_blank">OctoberCMS Docs</a>.'
            ],
            'types' => [
                'text' => 'Text Field',
                'number' => 'Number Field',
                'password' => 'Password Field',
                'email' => 'E-Mail Field',
                'textarea' => 'Textarea Field',
                'dropdown' => 'Dropdown Selector',
                'radio' => 'Radio Field',
                'balloon' => 'Balloon Selector',
                'checkbox' => 'Checkbox Field',
                'checkboxlist' => 'Checkbox List',
                'switch' => 'Switch Button',
                'codeeditor' => 'Code Editor',
                'colorpicker' => 'Color Picker',
                'datepicker' => 'Date/Time Picker',
                'fileupload' => 'File Upload Field',
                'markdown' => 'Markdown Editor',
                'mediafinder' => 'Media Finder',
                'richeditor' => 'Rich WYSIWYG Editor',
                'taglist' => 'Tag List',
            ]
        ]
    ],

    'widgets' => [
        'comments_list' => [
            'label' => 'BlogHub - Comments List'
        ],
        'posts_list' => [
            'label' => 'BlogHub - Posts List'
        ],
        'posts_statistics' => [
            'label' => 'BlogHub - Posts Statistics'
        ]
    ]
];
