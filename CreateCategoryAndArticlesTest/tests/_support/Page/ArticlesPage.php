<?php
/**
 *
 */
namespace Page;

/**
 * Class ArticlesPage
 * @package Page
 */
class ArticlesPage extends AbstractPage
{
	/**
	 * @var string
	 */
	public static $URL = 'administrator/index.php?option=com_content';

	/**
	 * @var string
	 */
	public static $articlesTitle = 'Articles';

	/**
	 * @var string
	 */
	public static $articlesNewTitle = 'Articles: New';

	/**
	 * @var string
	 */
	public static $messageSuccess = 'Article saved.';

	/**
	 * @var string
	 */
	public static $title = '#jform_title-lbl';

	/**
	 * @var string
	 */
	public static $category = '#jform_catid_chzn';
}
