package pageobjects;

import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.FindBy;
import tests.SeleniumTestBase;

/**
 * Represents page with login dialog
 */
public class AdminLoginPageObject extends zSamplePageObject {
   
    @FindBy(id="user_name")
    public WebElement user_name;
    
    @FindBy(id="password")
    public WebElement password;
    
    @FindBy(id="login_button")
    public WebElement login_button;
	  
    public AdminLoginPageObject(SeleniumTestBase parent_test) {
        super(parent_test, "admin");
    }
    
    public void setUserName(String strUserName){
        user_name.sendKeys(strUserName);
    }

    public void setPassword(String strPassword){
        password.sendKeys(strPassword);
    }

    public void clickLogin(){
        login_button.click();
    }

    public void login(String login, String password) {
        setUserName(login);
        setPassword(password);
        clickLogin();
    }
    
}