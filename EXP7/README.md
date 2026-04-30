# Experiment 07: Implementation of Secure Authentication

## Objective
To build a functional authentication system that utilizes secure session management and hashed password verification.

## Tools Used
* **Python/Flask:** For web framework implementation.
* **SQLAlchemy:** For secure database interaction.

## Methodology
1. **Backend Setup:** Developed a registration endpoint that hashes passwords using Bcrypt before DB insertion.
2. **Login Logic:** Implemented a comparison function that checks the salted hash against user input.
3. **Session Security:** Configured secure, HTTP-only cookies to prevent XSS-based session theft.

## Results
* **Outcome:** Successfully demonstrated a "Zero-Knowledge" storage system where even database admins cannot read user passwords.
