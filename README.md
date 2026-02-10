# Facemash

A PHP-based web application that implements a comparative voting system where users vote on images by selecting their preference between pairs of photos.

## Features

- **Comparative Voting** - Users vote on pairs of images, selecting which one they prefer
- **Facebook Authentication** - Secure login using Facebook credentials
- **Vote Tracking** - System tracks voting counts per user and maintains a complete voting history
- **Rankings** - View top-rated images based on vote counts
- **Responsive Design** - Mobile-friendly interface using Skeleton CSS framework
- **User Profiles** - View user statistics and voting activity

## Project Structure

```
├── index.php              # Homepage/Landing page
├── shuffle.php            # Main voting interface
├── top5.php              # Top-rated images view
├── result.php            # Voting results display
├── view.php              # Image/profile viewer
├── create.php            # User account creation
├── about.php             # About page
├── developers.php        # Developers information
├── feedback.php          # Feedback form
├── terms.php             # Terms and conditions
├── fbaccess.php          # Facebook authentication setup
├── logout.php            # User logout
├── startsession.php      # Session initialization
├── connectvars.php       # Database connection configuration
├── page1.php             # Shared template/header
├── page2.php             # Shared template/footer
├── css/                  # Stylesheets
│   ├── index.css
│   ├── shuffle.css
│   ├── result.css
│   ├── view.css
│   ├── about.css
│   ├── developers.css
│   ├── feedback.css
│   └── statistics.css
├── images/               # Image assets
└── src/
    ├── facebook.php      # Facebook SDK/API wrapper
    └── base_facebook.php # Base Facebook class
```

## Requirements

- PHP 5.4+
- MySQL Database
- Facebook App (for authentication)
- Web Server (Apache, Nginx, etc.)

## Installation

1. **Clone or download the project**

   ```bash
   cd /path/to/project
   ```

2. **Configure Database Connection**
   - Edit `connectvars.php` and update database credentials:

   ```php
   define('DB_HOST', 'your_host');
   define('DB_USER', 'your_user');
   define('DB_PASSWORD', 'your_password');
   define('DB_NAME', 'your_database');
   ```

3. **Set up Database**
   - Create the following tables:
     - `girls_db` - Stores images and vote counts
     - `user_db` - Tracks user voting statistics
     - `votes` - Records individual vote transactions

4. **Configure Facebook App**
   - Create a Facebook App at [Facebook Developers](https://developers.facebook.com/)
   - Update `fbaccess.php` with your App ID and App Secret
   - Set redirect URI to your application URL

5. **Upload to Web Server**
   - Upload all files to your web hosting server
   - Ensure `uploads/` directory has write permissions

## Usage

1. **User Registration**
   - Users sign up using their Facebook account
   - Click "Create Account" or login via Facebook button

2. **Voting**
   - Navigate to the "Shuffle" page to start voting
   - Two images are displayed side-by-side
   - Click on the image you prefer to cast your vote
   - Continue voting to build your track record

3. **View Results**
   - Check the "Results" page to see overall rankings
   - View "Top 5" to see the highest-rated images
   - Access user statistics to see your voting activity

## Database Schema

### girls_db

- `id` - Image ID
- `name` - Image filename
- `votes` - Vote count

### user_db

- `id` - Facebook User ID
- `name` - User name
- `count` - Number of votes cast

### votes

- `id` - Vote record ID
- `fb_id` - Facebook User ID
- `pic1` - First image ID in comparison
- `pic2` - Second image ID in comparison

## Technologies Used

- PHP
- MySQL
- Facebook SDK
- HTML5
- CSS (Skeleton Framework)
- JavaScript
