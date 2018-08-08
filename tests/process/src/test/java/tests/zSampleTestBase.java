package tests;

/**
 * Base class for all zSample.
 */
public class zSampleTestBase extends SeleniumTestBase {
    
    public String login = "karelzav@gmail.com";
    public String password = "karel123";
        
    public zSampleTestBase() {
        if (System.getenv().containsKey("ZSAMPLE_TEST_URL")) {
            base_url = System.getenv("ZSAMPLE_TEST_URL");
        } else {
            base_url = "http://zSample.loc";
        }
    }

}
