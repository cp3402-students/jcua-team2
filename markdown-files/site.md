# WordPress Plugin Usage – Baizonn Learning Centre Website

## WPForce SSL (Download Link)

https://wordpress.org/plugins/wp-force-ssl/

### Why We Installed It

WPForce SSL was installed to ensure that all website traffic is securely loaded over HTTPS instead of HTTP. This enhances the overall security of the website by encrypting data transferred between the server and users. It also helps prevent "Not Secure" warnings in browsers, thereby improving trust and credibility with visitors.

### Why It Was Installed But Never Used

The Baizonn Learning Centre website is hosted on SiteGround, which automatically issues and manages a valid SSL certificate for our domain. Because of this, the WPForce SSL plugin was not actively used. However, it was installed as a precautionary measure. If developers were to work on the site in a different environment that does not yet have a valid SSL certificate, or while waiting for an SSL request to be validated, the plugin could be used to force HTTP traffic to HTTPS during development.

### Setup Steps

- Go to **Plugins > Add New** in WordPress.  
- Search for **"WPForce SSL"**.  
- Click **Install Now**, then **Activate** the plugin.  
- Navigate to **Settings > WPForce SSL**.  
- Toggle the setting to **redirect all HTTP requests to HTTPS**.  
- Enable **HSTS** (only if your SSL certificate is valid and properly installed).  
- Go to the **Content Scanner** tab and run a scan to detect and fix any mixed content (non-HTTPS resources) on the site.

---

## WPForms Lite (Download Link)

https://wordpress.org/plugins/wpforms-lite/

### Why We Used WPForms Lite

WPForms Lite was used to create and manage user-friendly forms across the Baizonn Learning Centre website. These forms were essential for facilitating user interaction, allowing parents and students to contact the learning centre, register for classes, and provide feedback. The plugin's drag-and-drop builder made it easy to create and manage forms without writing any code, streamlining both the design and functionality aspects.

### How We Used WPForms Lite

Forms were embedded directly into relevant pages using the WPForms block in the WordPress Block Editor. Form submissions were set to be delivered to the admin email address to ensure that no inquiries or registrations were missed. The plugin allowed for quick configuration and reliable form performance.

### Setup Steps

- Install and activate **WPForms Lite** from the WordPress plugin repository.  
- Go to **WPForms > Add New** to create a new form.  
- Choose a template (e.g., Contact Form) or build one from scratch using the drag-and-drop builder.  
- Customize form fields, labels, and confirmation messages.  
- Enable **email notifications** to send form responses to the admin inbox.  
- Embed the form into a page using either the **WPForms block** or a **shortcode**.  
- Test the form to confirm that submissions are being received correctly.

### Outcome

Using WPForms Lite simplified communication between the learning centre and its users. It provided a reliable way to collect contact details, inquiries, and registrations, significantly improving the efficiency of user interaction and administrative follow-up.

---

## Query Monitor (Download Link)

https://wordpress.org/plugins/query-monitor/

### Why We Used Query Monitor

Query Monitor was used as an advanced debugging tool during the development and testing phases of the WordPress site. It allowed developers to quickly identify performance issues, problematic plugins or themes, and PHP errors. Its ability to show detailed information about database queries, hooks, HTTP requests, and template loading made it invaluable for optimizing site performance and diagnosing bugs. The plugin also provides a comprehensive admin toolbar interface, making complex information easy to navigate and filter.

### How We Used Query Monitor

We used Query Monitor to monitor database queries on each page load, analyze template file usage, catch PHP warnings, and inspect AJAX and REST API calls. The plugin helped highlight slow or duplicate queries, pinpoint broken dependencies in scripts and styles, and review all conditional functions on a given page. It was especially useful when fine-tuning the performance of custom themes or when troubleshooting plugin conflicts.

### Setup Steps

- Install and activate **Query Monitor** from the WordPress plugin repository.
- (Optional) Enable detailed query logging in `wp-config.php`:
  ```php
  define( 'WP_DEBUG', true );
  define( 'SAVEQUERIES', true );

---

## Debug Bar (Download Link)

https://wordpress.org/plugins/debug-bar/

### Why We Used Debug Bar

Debug Bar was used to quickly check basic debugging information during early development and troubleshooting. It provides a clean and minimal interface for reviewing MySQL queries, PHP warnings, cache usage, and other key metrics. Its lightweight design made it perfect for quick diagnostics without overwhelming the admin dashboard. The plugin also serves as a foundation for a range of add-ons, allowing developers to extend its functionality as needed.

### How We Used Debug Bar

We used Debug Bar to monitor PHP notices, track executed MySQL queries, and keep an eye on object caching behavior. It was particularly useful during theme development and plugin customization when quick checks were needed without diving into complex interfaces. We also used compatible add-ons like **Debug Bar Console** to run real-time PHP or SQL commands directly from the dashboard.

### Setup Steps

- Install and activate **Debug Bar** from the WordPress plugin repository.
- (Optional) Enable debugging in `wp-config.php`:
  ```php
  define( 'WP_DEBUG', true );
  define( 'SAVEQUERIES', true );
