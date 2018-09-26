package tests;

import org.junit.FixMethodOrder;
import org.junit.runners.MethodSorters;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.remote.RemoteWebDriver;
import org.openqa.selenium.support.ui.ExpectedCondition;
import org.openqa.selenium.support.ui.Wait;
import org.openqa.selenium.support.ui.WebDriverWait;

/**
 * This is a base class for all Selenium tests. 
 * It creates Selenium gecko driver and provides some helper functions.
 * 
 * @author karel
 */
@FixMethodOrder(MethodSorters.NAME_ASCENDING)
public class SeleniumTestBase {
    
    public static RemoteWebDriver driver;
    
    public String base_url = "fill this in derived class constructor";
   
    public SeleniumTestBase() {
       
    }
    
    public static void initializeDriver() {
       System.setProperty("webdriver.gecko.driver", SeleniumTestBase.getEnv("SELENIUM_FIREFOX_DRIVER", "C:\\develop\\vendor\\Selenium\\geckodriver.exe"));        
        driver = new FirefoxDriver();
    }
    
    public static void quitDriver() {
        if (driver != null) {
            driver.quit();
        }
    }
    
    public String getPageUrl(String relativeUrl) {
        return base_url + "/" + relativeUrl;
    }
    
    public void goTo(String relativeUrl) {
        driver.get(getPageUrl(relativeUrl));
    }
    
    public void waitForElement(final By by) {
        Wait<WebDriver> wait = new WebDriverWait(driver, 10);
        wait.until(new ExpectedCondition<Boolean>() {
            public Boolean apply(WebDriver driver) {
                return driver.findElement(by).isDisplayed();
            }
        });
    }
    
    protected boolean elementExists(By by) {
        try {
            WebElement element = driver.findElement(by);
            return (element != null);
        } catch (org.openqa.selenium.NoSuchElementException ex) {
            return false;
        }
    }
    
    protected static String getEnv(String env_name, String default_value) {
        if (System.getenv().containsKey(env_name)) {
            return System.getenv(env_name);
        } else {
            return default_value;
        }
    }
    
}
