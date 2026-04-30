# Experiment 04: Secure Code Review of Authentication Systems

## Objective
To conduct a comprehensive manual security audit of a login module to identify insecure coding practices.

## Methodology
1. **Auth Flow Audit:** Tracked how session tokens are generated and stored (Local Storage vs. Secure Cookies).
2. **Credential Handling:** Inspected the backend to verify if passwords are encrypted in transit (SSL/TLS).
3. **Account Protection:** Checked for the presence of Rate Limiting or CAPTCHA to prevent brute-force attacks.

## Results
* **Vulnerabilities Found:** Identified that passwords were being logged in plaintext within server-side debug logs.
* **Improvements:** Suggested implementing Bcrypt with a work factor of 12 for password derivation.
