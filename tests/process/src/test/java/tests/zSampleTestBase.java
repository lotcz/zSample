package tests;

/**
 * Base class for all zSample tests.
 */
public class zSampleTestBase extends SeleniumTestBase {
    
    public String visitor_email = "karel@zavadil.eu";
    public String visitor_password = "karel123";
    
    public String admin_email = "karel";
    public String admin_password = "karel123";
        
    public zSampleTestBase() {
        base_url = this.getEnv("ZSAMPLE_TEST_URL", "http://zSample.loc");
        visitor_email = this.getEnv("ZSAMPLE_VISITOR_EMAIL", "test@test.com");
        visitor_password = this.getEnv("ZSAMPLE_VISITOR_PASS", "test");
        admin_email = this.getEnv("ZSAMPLE_ADMIN_EMAIL", "karel@zavadil.eu");
        admin_password = this.getEnv("ZSAMPLE_ADMIN_PASS", "karel123");
    }

}
