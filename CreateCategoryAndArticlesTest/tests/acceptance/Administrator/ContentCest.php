<?php
use Faker\Factory;
use Faker\Generator;
use Step\Acceptance\ArticlesStep;
use Step\Acceptance\CategoryStep;
use Page\ArticlesPage;
use Page\CategoryPage;
/**
 * Class ArticlesCest
 */
class ContentCest
{
    /**
     * @var Generator
     */
    protected $faker;

    /**
     * @var string
     */
    protected $articleName;

    /**
     * @var
     */
    protected $articleName2;

    /**
     * @var
     */
    protected $categoryName;

    /**
     * ContentCest constructor.
     */
    public function __construct()
    {
        $this->faker = Factory::create();
        $this->articleName = $this->faker->bothify("Articles ##??");
        $this->categoryName = $this->faker->bothify("Category ##??");
    }

    /**
     * @param CategoryStep $I
     * @throws Exception
     */
    public function createNewCategory(CategoryStep $I)
    {
        $I->doAdministratorLogin();
        $I->wantToTest("Create a new Category in Joomla");
        $I->createNewCategory($this->categoryName);
        $I->waitForText(CategoryPage::$messageSuccess,30,CategoryPage::$message);
    }

    /**
     * @param ArticlesStep $I
     * @throws Exception
     */
    public function createNewArticle(ArticlesStep $I){
        $I->doAdministratorLogin();
        $I->wantToTest('Create a new Articles in Joomla');
        $I->createNewArticle($this->articleName);
        $I->waitForText(ArticlesPage::$messageSuccess,30,ArticlesPage::$message);
    }

    /**
     * @param ArticlesStep $I
     * @throws Exception
     */
    public function createNewArticleWithCategory(ArticlesStep $I, CategoryStep $scenior)
    {
        $I->doAdministratorLogin();
        $scenior->createNewCategory($this->categoryName);
        $I->wantToTest("Create a new Articles with Category");
        $I->createArticleWithCategory($this->articleName2,$this->categoryName);
        $I->waitForText(ArticlesPage::$messageSuccess,30,ArticlesPage::$message);
    }
}
