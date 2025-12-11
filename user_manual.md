# NewsPortal User Manual
**Version:** 1.0

---

## 1. Introduction

**Product Name:** NewsPortal  

**Version:** 1.0  

**Purpose:**  
NewsPortal is a website that provides news articles for public reading. The application allows users to access and read news content easily and efficiently. In addition to browsing articles, users can also add comments under each article to share their thoughts and engage in discussions.  

**Target Users:**  
- General public interested in reading news.  
- Administrators responsible for managing content.  

**Key Features:**  
- **Read News Articles:** Anyone can access and read published articles.  
- **User Registration (Sign Up):** Users can register for an account. Currently, registration does not provide additional benefits but may be extended in the future.  
- **Add Comments:** Users can post comments under news articles to share their opinions and participate in discussions.  
- **Admin Page:** Administrators can add, edit, and delete news articles.  

**Manual Structure:**  
This manual covers the following sections:  
1. General Information – System requirements, supported browsers, and limitations.  
2. Getting Started – How to access and navigate the website.  
3. Interface and Navigation – Overview of menus, pages, and icons.  
4. Core Functions – Reading articles and managing content (for admins).  
5. Troubleshooting – Common issues and solutions.  
6. Security and Privacy – Guidelines for users and administrators.  
7. Support and Resources – Contact information and additional materials.

## 2. General Information

### System Requirements

**Server Requirements:**  
- Web server: Apache or Nginx (any server supporting PHP).  
- PHP version: 7.4 or higher recommended.  
- Required PHP extensions:
  - PDO (`php_pdo`)  
  - PDO MySQL (`php_pdo_mysql`)  
  - mbstring (`php_mbstring`)  
- UTF-8 support enabled in PHP.

**Database Requirements:**  
- Database type: MySQL (or MariaDB).  
- Database name: `newsportal`.  
- User credentials for local development:
  - Host: `localhost`  
  - User: `root`  
  - Password: (empty string)  
- Note: For production, use a secure password and proper access permissions.

**Client Requirements:**  
- Supported browsers: Latest versions of Chrome, Firefox, Edge, Safari.  
- Minimum screen resolution: 1024×768.  
- JavaScript must be enabled in the browser.

**Optional / Recommended:**  
- Operating System: Windows, macOS, or Linux.  
- Internet connection required if accessing the website remotely.  
- For local testing/development: XAMPP, WAMP, or MAMP to run Apache + PHP + MySQL.  

---

### Supported Languages
- **English** (currently the only supported language).  

---

### Limitations / Known Constraints
- Registration currently provides **no additional benefits** to users.  
- Admin functions (add/edit/delete articles) are **restricted to administrators only**.  
- News articles support **images** up to 64kb (stored as BLOB in the database).  
- Limited support for older browsers; best viewed in modern browsers.  

---

### Licensing / Registration / Access Permissions
- **License:** Free to use, not private or proprietary.  
- **Registration:** Users can register (sign up), but no additional features are unlocked at this time.  
- **Access Permissions:**  
  - Admin page accessible **only to authorized administrators**.  
  - Regular users cannot modify content.  

---

## 3. Getting Started

### 3.1 For Users

**Accessing the Website:**  
- Open your web browser and go to:  
  - `http://localhost:3000`  
  - or `http://localhost:3000/index.php`  

**Browsing News Articles:**  
- On the homepage, you can see a list of news articles.  
- Click on any article to read its full content.  
- Articles include images.
- You can add comments under news articles to share your thoughts.  

**Registering / Logging In:**  
- To register click the **Register** link in the navigation panel.  
- Currently, registration does not provide additional features but allows you to create a user account.  
- To log in, visit the admin login page at:  
  - `http://localhost:3000/admin/`  
  - or `http://localhost:3000/admin/index.php`  
- Only accounts with admin privileges can log in and access the admin panel. Regular users cannot manage news content.  

---

### 3.2 For Developers / Administrators

**Setting Up the Project Locally:**

1. **Install Required Software:**  
   - Web server: Apache or Nginx  
   - PHP 7.4 or higher with extensions: PDO, PDO MySQL, mbstring  
   - MySQL or MariaDB  
   - Optionally, use XAMPP, WAMP, or MAMP for an all-in-one setup  

2. **Database Setup:**  
   - Open your database management tool (phpMyAdmin, MySQL Workbench, or command line).  
   - Import the provided SQL file: `sql/newsportal_sample_data.sql`.  
     - This file includes all necessary tables (`news`, `users`, etc.) and several sample records for testing.  
   - Ensure the database is named `newsportal` or update `inc/database.php` with the correct database name and credentials.  

3. **Project Files:**  
   - Place the project files in your web server’s root folder (e.g., `htdocs` for XAMPP).  
   - Ensure the folder structure is maintained:  
     ```
    NewsPortal/
    ├── admin/                   # Admin module
    │   ├── controllers/         # Admin-specific controllers
    │   ├── models/              # Admin-specific data models
    │   ├── routes/              # Admin route definitions
    │   ├── views/               # Admin templates/pages
    │   ├── js/                  # Admin-side JavaScript files
    │   ├── public/
    │   │   ├── css/             # Admin CSS files
    │   │   ├── fonts/           # Fonts used on admin pages
    │   │   └── js/              # Additional admin JS
    │   ├── .htaccess
    │   └── index.php            # Entry point for Admin Panel
    │
    ├── controller/              # Main site controllers
    ├── model/                   # Main site models
    ├── view/                    # Main site templates/pages
    ├── route/                   # Front-end route definitions
    ├── inc/                     # Includes Database.php
    │
    ├── public/                  # Public assets for the main site
    │   └── css/                 # Global styles (non-admin)
    │
    ├── sql/                     # Database schema and sample data
    │
    ├── .htaccess                # Root rewrite rules
    ├── index.php                # Main entry point of the application
    ├── style.css                # Core front-end stylesheet
    └── user_manual.md           # Project user manual
     ```

4. **Configure Database Connection:**  
   - Open `inc/database.php`.  
   - Update `$host`, `$user`, `$password`, and `$baseName` if your local setup differs from defaults:  
     ```php
     $this->host = 'localhost';
     $this->user = 'root';
     $this->password = '';
     $this->baseName = 'newsportal';
     ```

5. **Access the Website:**  
   - Open your browser and navigate to `http://localhost:3000` or `http://localhost:3000/index.php` to see the NewsPortal homepage.  

**Admin Access:**  
- Administrators log in using their credentials on the **dedicated admin login page**.  
- The admin login page is **not accessible** through the standard `Register/Login` button on the public site.  
- Admin users must manually navigate to the admin login URL: `http://localhost:3000/admin/` or `admin/index.php`.  
- After a successful login, administrators gain access to the admin panel where they can manage news articles (add, edit, delete).  
- Only accounts with admin privileges can access the admin interface.  
- Use the admin account included in the sample database to log in and manage content.  

---

**Note:**  
- The included sample database makes it easy to test the website immediately without manually creating tables or records.  
- For production environments, use secure passwords and proper access control.

### 4. Interface and Navigation

#### 4.1 Main Page

> Note: The layout of the website remains consistent across all pages/views; only the main content area changes as you navigate through different sections.  

**Overview:**  
When you visit the site, the **Main Page** displays the **3 latest news articles** by default.

**Navigation Panel:**  
At the top of the page, there is a navigation panel with the following links:  
- **Category** – displays a vertical list of news categories, starting with **ALL**.  
  - Clicking a category shows articles only from that category.  
  - Selecting **ALL** displays all articles, but **without images**.  
- **Info** – currently unavailable; clicking it returns an **Error 404** page.  
- **Main Page** – returns to the homepage showing the latest articles.  
- **Register** – opens the registration form.

**Article Overview:**  
- Each article shows a **red number in parentheses `( )`**, indicating the number of comments.  
- Below each article, there is a **Details** link that opens the article page, showing:  
  - Full article description  
  - Comments section  
  - Comment field with a **Send** button  

**Registration Form:**  
- Accessible via the **Register** link in the navigation panel.  
- The registration page contains the following fields:  
  1. Name  
  2. Email  
  3. Password  
  4. Confirm Password  
- Buttons/Links:  
  - **Register** – submits the registration form  
  - **Web Site** – returns to the Main Page

#### 4.2 Admin Page

**Admin Login Page:**  
- Accessible at:  
  - `http://localhost:3000/admin/`  
  - or `http://localhost:3000/admin/index.php`  
- Contains the following elements:  
  - **Email** field  
  - **Password** field  
  - **Enter** button to submit login credentials  
  - **Web Site** link below the form that redirects to the Main Page  

**Admin Panel (after successful login):**  
- **Navigation Panel (top links):**  
  - **WEB SITE** – returns to the Main Page  
  - **Admin Main** – opens the admin panel home  
  - **Categories** – currently unavailable; returns **Error 404**  
  - **News Articles List** – displays all articles in the system  

- **Top-right corner:**  
  - Displays the logged-in user’s name (e.g., User or Administrator)  
  - **Exit** link with exit door icon – logs out the user and sends to the **Admin Login Page**  

**News Articles List:**  
- **Add News** button – opens the form to create a new article  
- Below the button, a table lists all articles with the following columns:  
  - **ID** – article identifier  
  - **Header News** – contains title, category, and author  
  - **EDIT** and **DELETE** links with icons `class="glyphicon glyphicon-edit"` and `class="glyphicon glyphicon-remove"` accordingly.  

**Add News Article Form:**  
- Fields:  
  - **News Article Title**  
  - **News Article Text**  
  - **Category** (select form)  
  - **Picture** (file upload)  
- Buttons:  
  - **Save** – with a crest icon (`class="glyphicon glyphicon-plus"`)  
  - **Back to List** – with back icon (`<i class="glyphicon glyphicon-backward"></i>`)  

**Edit News Article Form:**  
- Same as Add News form, with these differences:  
  - Displays the **old picture** between category and picture upload fields  
  - **Edit** button instead of Save  

**Delete News Article Form:**  
- Similar layout, with the following differences:  
  - **Old Picture** displayed  
  - **Delete** button instead of Save  
  - No picture upload field

### 5. Core Functions / Tasks

#### 5.1 Browsing News Articles (User)

**Steps:**  
1. Open the Main Page (`http://localhost:3000` or `http://localhost:3000/index.php`).  
2. Scroll through the list of the 3 latest news articles.  
3. Click the **Details** link under any article to read the full content.  

**Expected Result:**  
- The article page opens, displaying the full text and associated images.  
- Comments (if any) are displayed below the article.  

**Example:**  
- You see a news article titled “Technology Update” and click **Details** to read more about it.  

**Screenshot:**  
- ![Article Details Page](path/to/screenshot.png)  

---

#### 5.2 Viewing Articles by Category (User)

**Steps:**  
1. Click the **Category** link in the navigation panel.  
2. Select a category from the vertical list (starting with **ALL**).  

**Expected Result:**  
- Only articles belonging to the selected category are displayed.  
- Selecting **ALL** shows all articles without images.  

**Example:**  
- You want to read only Technology news. Click the **Technology** category to filter articles accordingly.  

**Screenshot:**  
- ![Category Selection Example](path/to/screenshot.png)

---

#### 5.3 Adding a Comment (User)

**Steps:**  
1. Open the article page by clicking **Details**.  
2. Scroll to the comment field at the bottom of the article.  
3. Type your comment.  
4. Click **Send**.  

**Expected Result:**  
- Your comment appears immediately under the article.  

**Example:**  
- You read an article about a local event and write: “Looking forward to attending!”  

**Screenshot:**  
- ![Comment Field Example](path/to/screenshot.png)  

**Note:**  
- All users can add comments.

---

#### 5.4 Registering an Account (User)

**Steps:**  
1. Click the **Register** link in the navigation panel.  
2. Fill in the registration form: Name, Email, Password, Confirm Password.  
3. Click **Register**.  

**Expected Result:**  
- Your user account is created successfully.  
- You can now log in via the admin login page.  

**Screenshot:**  
- ![Registration Form](path/to/screenshot.png)  

**Note:**  
- Registration currently does not provide additional features for regular users.

---

#### 5.5 Admin Login

**Steps:**  
1. Navigate to the admin login page: `http://localhost:3000/admin/` or `http://localhost:3000/admin/index.php`.  
2. Enter your admin email and password.  
3. Click **Enter**.  

**Expected Result:**  
- You are redirected to the Admin Panel.  

**Screenshot:**  
- ![Admin Login Page](path/to/screenshot.png)  

**Note:**  
- Only accounts with admin privileges can access the admin panel.  

---

#### 5.6 Adding a News Article (Admin)

**Steps:**  
1. From the Admin Panel, click **News Articles List**.  
2. Click **Add News**.  
3. Fill in the form:  
   - News Article Title  
   - News Article Text  
   - Category (select from dropdown)  
   - Picture (choose file)  
4. Click **Save** to add the article.  
5. Or click **Back to List** to cancel.  

**Expected Result:**  
- The new article appears in the news articles list.  

**Screenshot:**  
- ![Add News Article Form](path/to/screenshot.png)  

---

#### 5.7 Editing a News Article (Admin)

**Steps:**  
1. From the Admin Panel, click **News Articles List**.  
2. Find the article you want to edit and click **EDIT**.  
3. Update the fields as needed:  
   - News Article Title  
   - News Article Text  
   - Category  
   - Optionally replace the picture  
4. Click **Edit** to save changes.  
5. Or click **Back to List** to cancel.  

**Expected Result:**  
- The article is updated in the news articles list.  

**Screenshot:**  
- ![Edit News Article Form](path/to/screenshot.png)  

---

#### 5.8 Deleting a News Article (Admin)

**Steps:**  
1. From the Admin Panel, click **News Articles List**.  
2. Find the article you want to delete and click **DELETE**.  
3. Confirm deletion if prompted.  

**Expected Result:**  
- The article is removed from the news articles list.  

**Screenshot:**  
- ![Delete News Article Form](path/to/screenshot.png)  

**Warning:**  
- Deletion is permanent. Once an article is deleted, it cannot be recovered.

