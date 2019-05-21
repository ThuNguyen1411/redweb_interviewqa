<?php
namespace Step\Acceptance;


use Page\ArticlesPage;
/**
 * Class ArticlesStep
 * @package Step\Acceptance
 */
class ArticlesStep extends AbstractStep
{
    /**
     * @param $articleName
     * @throws \Exception
     */
    public function createNewArticle($articleName){
        $I = $this;
        $I->amOnPage(ArticlesPage::$URL);
        $I->waitForText(ArticlesPage::$articlesTitle,30,ArticlesPage::$h1);
        $I->click(ArticlesPage::$buttonNew);
        $I->waitForText(ArticlesPage::$articlesNewTitle,30,ArticlesPage::$h1);
        $I->fillField(ArticlesPage::$fieldTitle,$articleName);
        $I->click(ArticlesPage::$buttonSaveClose);
    }

    /**
     * @param $articleName
     * @param $categoryName
     * @throws \Exception
     */
    public function createArticleWithCategory($articleName, $categoryName)
    {
        $I = $this;
        $I->amOnPage(ArticlesPage::$URL);
        $I->waitForText(ArticlesPage::$articlesTitle,30,ArticlesPage::$h1);
        $I->click(ArticlesPage::$buttonNew);
        $I->waitForText(ArticlesPage::$articlesNewTitle,30,ArticlesPage::$h1);
        $I->fillField(ArticlesPage::$fieldTitle,$articleName);
        $I->waitForText('Category', 30);
        $I->see('Category');
        $I->waitForElement(ArticlesPage::$category,30);
        $I->selectOption(ArticlesPage::$category,$categoryName);
        $I->click(ArticlesPage::$buttonSaveClose);
    }
}