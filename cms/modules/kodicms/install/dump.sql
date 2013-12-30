INSERT INTO `__TABLE_PREFIX__pages` (`id`, `title`, `slug`, `breadcrumb`, `meta_title`, `meta_keywords`, `meta_description`, `parent_id`, `layout_file`, `behavior_id`, `status_id`, `created_on`, `published_on`, `updated_on`, `created_by_id`, `updated_by_id`, `position`, `needs_login`) VALUES
(1, 'Home', '', 'Home', 'Home', '', '', 0, 'normal', '', 100, '__DATE__', '__DATE__', '__DATE__', 1, 1, 0, 0),
(2, 'Page not found', 'page-not-found', 'Page not found', 'Page not found', '', '', 1, '', 'page_not_found', 101, '__DATE__', '__DATE__', '__DATE__', 1, 1, 4, 2),
(3, 'About us', 'about-us', 'About us', 'About us', '', '', 1, '', '', 100, '__DATE__', '__DATE__', '__DATE__', NULL, 1, 1, 2),
(4, 'RSS Feed', 'rss.xml', 'RSS Feed', 'RSS Feed', '', '', 1, 'none', '', 101, '__DATE__', '__DATE__', '__DATE__', 1, 1, 3, 2),
(5, 'My first article', 'my-first-article', 'My first article', 'My first article', '', '', 8, '', '', 100, '__DATE__', '__DATE__', NULL, NULL, NULL, 1, 2),
(6, '%B %Y archive', 'b-y-archive', '%B %Y archive', '%B %Y archive', '', '', 8, '', 'archive_month_index', 101, '__DATE__', '__DATE__', '__DATE__', 1, 1, 0, 2),
(7, 'My second article', 'my-second-article', 'My second article', 'My second article', '', '', 8, '', '', 100, '__DATE__', '__DATE__', NULL, NULL, NULL, 2, 2),
(8, 'Articles', 'articles', 'Articles', 'Articles', '', '', 1, '', 'archive', 100, '__DATE__', '__DATE__', '__DATE__', NULL, 1, 2, 2),
(9, 'Third entry', 'third-entry', 'Third entry', 'Third entry', '', '', 8, '0', '0', 100, '__DATE__', '__DATE__', '__DATE__', 1, 1, 3, 2),
(10, 'Fourth entry', 'fourth-entry', 'Fourth entry', 'Fourth entry', '', '', 8, '0', '0', 100, '__DATE__', '__DATE__', '__DATE__', 1, 1, 4, 2),
(11, 'Contacts', 'contacts', 'Контакты', 'Контакты', '', '', 1, '0', '0', 100, '__DATE__', '__DATE__', '__DATE__', 1, 1, 5, 2),
(12, 'Send page', 'send', 'send', 'send', '', '', 11, 'none', '0', 101, '__DATE__', '__DATE__', '__DATE__', 1, 1, 1, 2);