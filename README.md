# EduNavigator

EduNavigator is a Laravel-based portal that provides information on **offered courses**, **available scholarships**, and **job opportunities**.

---

## Modules

### 1. **Courses**
- Browse and search for courses.
- View detailed descriptions, eligibility requirements, and enrollment links.

### 2. **Scholarships**
- Explore available scholarships.
- Filter by eligibility criteria, location, and field of study.
- Access application details.

### 3. **Jobs**
- Discover job opportunities tailored for students and professionals.
- View job descriptions, qualifications, and application processes.

### 4. **Admin Dashboard**
- The admin dashboard for managing courses, scholarships, and job opportunities.
- **Screenshot**:  
  ![Admin Dashboard](public/images/admindashboard.png)

### 5. **Home Page**
- The homepage of EduNavigator, featuring the main navigation and user-friendly layout.
- **Screenshot**:  
  ![Home Page](public/images/home.png)

### 6. **User Registration and Login**
- Secure registration and login for personalized access.
- **Screenshot**:  
  ![User Authentication](public/images/login.png)

---

## Note

If you encounter errors during registration, update the `.env` file with your mail configuration:

```env
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=youremail@gmail.com
MAIL_PASSWORD=yourPassword
MAIL_ENCRYPTION=ssl
MAIL_FROM_NAME="${APP_NAME}"
