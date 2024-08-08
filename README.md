# Design Process

### 1. Dashboard Page Design

-   **Objective**: Create a simple, user-friendly dashboard that welcomes users and displays their name after login.
-   **Technology**: Bootstrap for responsive design and clean layout.
-   **Components**:
    -   **Navigation Bar**: Application name and logout link.
    -   **Main Content**: Welcome message with the user's name using a jumbotron.
    -   **Footer**: Minimalistic footer with copyright notice.
-   **Blade Template**: `dashboard.blade.php` with a clear structure.

### 2. Login Page Design

-   **Objective**: Design an easy-to-navigate login interface with clear feedback.
-   **Technology**: Bootstrap for responsiveness and aesthetics.
-   **Components**:
    -   **Form Layout**: Email and password fields with validation error messages.
    -   **Remember Me**: Checkbox for staying logged in.
    -   **Forgot Password**: Link for password reset.
-   **Blade Template**: Extends `auth.layout` for consistent design.

### 3. Register Page Design

-   **Objective**: Provide a seamless interface for account creation.
-   **Technology**: Bootstrap for a responsive and clean layout.
-   **Components**:
    -   **Form Layout**: Fields for name, email, password, and confirmation.
    -   **Validation**: Error messages displayed below the input fields.
    -   **Call to Action**: Prominent "Sign up" button.
    -   **Link to Login**: Navigation link for existing users.
