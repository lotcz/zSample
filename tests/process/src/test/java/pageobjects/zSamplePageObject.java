package pageobjects;

import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.FindBy;
import tests.SeleniumTestBase;

/**
 * Represents any page in zSample
  */
public class zSamplePageObject extends PageObjectBase {
   
    @FindBy(className = "main-title")
    public WebElement main_title;
   
    public zSamplePageObject(SeleniumTestBase parent_test, String page_url) {
        super(parent_test, page_url);
    }
        
}