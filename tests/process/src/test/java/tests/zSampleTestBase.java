package tests;

/**
 * Base class for all zSample tests.
 */
public class zSampleTestBase extends SeleniumTestBase {
    
    public String customer_login = "karelzav@gmail.com";
    public String customer_password = "karel123";
    
    public String admin_login = "karel";
    public String admin_password = "karel123";
        
    public zSampleTestBase() {
        if (System.getenv().containsKey("ZSAMPLE_TEST_URL")) {
            base_url = System.getenv("ZSAMPLE_TEST_URL");
        } else {
            base_url = "http://zSample.loc";
        }
    }

}
