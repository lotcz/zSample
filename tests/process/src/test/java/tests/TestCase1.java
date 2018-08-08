package tests;

import pageobjects.FrontPageObject;
import pageobjects.LoginPageObject;
import org.junit.AfterClass;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;
import org.openqa.selenium.*;

/**
 * Implements PT 2
 */
public class TestCase1 extends zSampleTestBase {

    @BeforeClass
    public static void setUpClass() {
        initializeDriver();
    }

    @AfterClass
    public static void tearDownClass() {
        quitDriver();
    }

    /**
     * Implements login process test
     */
    @Test
    public void test() {
        
        // INITIALIZE (go to homepage and verify we are on the e-shop)
        FrontPageObject front_page = new FrontPageObject(this);
        front_page.open();
        assertEquals("Given URL doesn't seem to be actual zSample front page.", front_page.main_title.getText(), "Hello");
                
        // sign in
        LoginPageObject login_page = new LoginPageObject(this);
        login_page.open();
        login_page.login(login, password);
        assertTrue("Could not log in.", elementExists(By.className("log-out-menu-item")));
              
    }

}
