package tests;

import pageobjects.FrontPageObject;
import pageobjects.AdminLoginPageObject;
import org.junit.AfterClass;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;
import org.openqa.selenium.*;

/**
 * Implements admin login test
 */
public class TestCaseAdmin extends zSampleTestBase {

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
        
        // INITIALIZE (go to homepage and verify)
        FrontPageObject front_page = new FrontPageObject(this);
        front_page.open();
        assertEquals("Given URL doesn't seem to be actual zSample front page.", front_page.main_title.getText(), "Hello");
                
        // sign in
        AdminLoginPageObject login_page = new AdminLoginPageObject(this);
        login_page.open();
        login_page.login(admin_login, admin_password);
        assertEquals("Could not log in.", front_page.main_title.getText(), "Administration test");
              
    }

}
