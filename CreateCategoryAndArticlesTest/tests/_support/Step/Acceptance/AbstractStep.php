<?php
namespace Step\Acceptance;
use Page\LoginPage as liPage;
/**
 * Class AbstractStep
 * @package Step\Acceptance
 */
class AbstractStep extends \AcceptanceTester
{
    /**
     * doAdministratorLogin
     */
    public function doAdministratorLogin(){
        $I = $this;
        $I->wantTo("Login with Administrator");
        $I->amOnPage(liPage::$URL);
        $I->fillField(liPage::$userNameField,'admin');
        $I->fillField(liPage::$passWordField,'admin');
        $I->click(liPage::$buttonLogin);
    }
}