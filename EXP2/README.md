# Experiment 02: Simulation of Input-Based Attacks & Mitigation

## Objective
To simulate SQL Injection (SQLi) and Cross-Site Scripting (XSS) attacks on a controlled web application and implement defensive sanitization.

## Tools Used
* **DVWA (Damn Vulnerable Web Application):** As a target environment.
* **Burp Suite:** To intercept and modify HTTP requests.

## Methodology
1. **SQLi Execution:** Injected `' OR 1=1 --` into the login form to bypass authentication.
2. **XSS Payload:** Injected `<script>alert(document.cookie)</script>` into a comment field to demonstrate session hijacking.
3. **Defense Implementation:** Applied PHP `mysqli_real_escape_string()` and HTML entity encoding to neutralize payloads.

## Results
* **Successful Breach:** Gained administrative access without a password.
* **Mitigation:** Verified that the application is no longer vulnerable after implementing Prepared Statements.
