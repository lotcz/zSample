package tests;

/**
 * Base class for all zSample.
 */
public class zSampleTestBase extends SeleniumTestBase {
    
    public String login = "karelzav@gmail.com";
    public String password = "karel123";
        
    public zSampleTestBase() {
        base_url = "http://zSample.loc";        
    }
        
}
