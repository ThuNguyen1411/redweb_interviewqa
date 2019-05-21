<?php
namespace Step\Acceptance;

use Page\CategoryPage;
class CategoryStep extends AbstractStep
{
    public function createNewCategory($categoryName)
    {
        $I = $this;
        $I->amOnPage(CategoryPage::$URL);
        $I->waitForText(CategoryPage::$categoryTitle,30,CategoryPage::$h1);
        $I->see(CategoryPage::$categoryTitle);
        $I->click(CategoryPage::$buttonNew);
        $I->waitForText(CategoryPage::$categoryNewTitle,30,CategoryPage::$h1);
        $I->see(CategoryPage::$categoryNewTitle);
        $I->fillField(CategoryPage::$fieldTitle,$categoryName);
        $I->click(CategoryPage::$buttonSaveClose);
    }
}