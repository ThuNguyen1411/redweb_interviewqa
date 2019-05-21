<?php
namespace Page;

class CategoryPage extends AbstractPage
{
	/**
	 * @var string
	 */
	public static $URL = 'administrator/index.php?option=com_categories&extension=com_content';

	/**
	 * @var string
	 */
	public static $categoryTitle = 'Articles: Categories';

	/**
	 * @var string
	 */
	public static $categoryNewTitle = 'Articles: New Category';

	/**
	 * @var string
	 */
	public static $messageSuccess = 'Category saved.';

	/**
	 * @var string
	 */
	public static $title = '#jform_title';

}
