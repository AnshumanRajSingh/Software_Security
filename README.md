Software Security Laboratory
A comprehensive portfolio of security experiments, vulnerability analysis, and defensive implementations.

Project Overview
This repository serves as a technical log for the Software Security (SS) Lab. It documents the identification of critical vulnerabilities (OWASP Top 10) and the implementation of industry-standard security controls.

Experiment Index
1. Code Vulnerability Analysis
Objective: Identify basic security flaws in C and Python.
Vulnerabilities: Buffer Overflows, Insecure Input Handling, and Hardcoded Credentials.
Methodology: Manual Code Walkthroughs and Static Analysis.

2. Input-Based Attacks & Mitigations
Objective: Simulate SQL Injection (SQLi) and Cross-Site Scripting (XSS).
Countermeasure: Implementation of input validation and sanitization.
Platforms: DVWA (Damn Vulnerable Web Application) / Local Web Apps.

3. Cryptographic Hashing & Secure Storage
Objective: Experiment with hashing algorithms (MD5, SHA-256).
Focus: Implementing password storage using Hashing + Salting in Python.

4. Secure Code Review: Login Systems
Objective: Audit a login module for insecure coding practices.
Findings: Identifying plain-text passwords and missing input length checks.

5. Network Traffic Capture & Inspection
Objective: Use packet capture tools to observe HTTP transmissions.
Focus: Identifying plaintext vulnerabilities and sensitive headers using Wireshark or tcpdump.

6. Threat Modeling (STRIDE)
Objective: Design and analyze a threat model for a web application.
Methodology: Applying the STRIDE framework (Spoofing, Tampering, Repudiation, Information Disclosure, DoS, Elevation of Privilege).

7. Authentication Mechanisms
Objective: Develop a secure login form with backend hashed password verification.
Focus: Demonstrating how modern, secure authentication workflows function.

8. Vulnerability Scanning
Objective: Automated security testing of web applications.
Tools: OWASP ZAP (Passive Scan Mode) to detect outdated software and misconfigurations.

9. Browser Artifact Inspection
Objective: Understand user tracking and privacy risks.
Focus: Exploring history, cookies, and saved session data using Browser Developer Tools.

10. Incident Response Simulation
Objective: Identify suspicious activities from system access logs.
Outcome: Detecting brute-force attempts and drafting professional incident reports.

Tech Stack & Tools
Languages: C, Python, SQL
Network Analysis: Wireshark, tcpdump
Web Security: OWASP ZAP, DVWA
Methodologies: STRIDE Threat Modeling, Static Code Analysis

Disclaimer
The content of this repository is for educational and ethical security research purposes only. Unauthorized access to or testing of computer systems is strictly prohibited and illegal.

Author: ANSHUMAN RAJ SINGH
