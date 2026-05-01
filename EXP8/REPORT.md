# Experiment 08: Vulnerability Scanning & Misconfiguration Audit

## 1. AIM
To perform automated vulnerability scanning on a web application to identify common security weaknesses, outdated software, and misconfigurations.

## 2. SHORT THEORY
* **Vulnerability Assessment:** A systematic review of security weaknesses in an information system to determine if it is susceptible to known vulnerabilities.
* **Passive Scanning:** A non-intrusive scanning method that analyzes the traffic passing through the browser and the server's responses without sending malicious payloads.
* **Security Misconfigurations:** Weaknesses that occur when security settings are not defined, implemented, or maintained properly (e.g., default passwords or missing security headers).

## 3. TOOLS & TECH
* **OWASP ZAP (Zed Attack Proxy):** An open-source web application security scanner for finding vulnerabilities.
* **Browser DevTools:** To inspect local security flags.
* **Nmap:** For network-level service and port discovery.

## 4. METHODOLOGY
1. **Target Selection:** Configured a local test environment (DVWA/Local Web App) as the target for scanning.
2. **Spidering:** Used the OWASP ZAP Spider tool to map the application's structure and discover all available URLs.
3. **Passive Scan:** Performed a passive scan to analyze HTTP headers and HTML source code for security gaps.
4. **Analysis:** Reviewed the generated "Alerts" tab to categorize vulnerabilities based on their severity (High, Medium, Low).

## 5. SCANNING RESULTS (VULNERABILITY TABLE)

| Vulnerability Found | Severity | Description | Mitigation Strategy |
| :--- | :--- | :--- | :--- |
| **Missing Security Headers** | Low | Headers like `X-Frame-Options` and `Content-Security-Policy` were absent. | Configure the web server to send standard security headers. |
| **Information Disclosure** | Medium | Server version (e.g., Apache/2.4.41) was visible in the HTTP response. | Disable server signature and tokens in the configuration file. |
| **Cookie without HttpOnly** | Medium | Session cookies lacked the `HttpOnly` flag, making them accessible via JS. | Update the session management logic to include the `HttpOnly` flag. |
| **X-Content-Type-Options** | Low | The `X-Content-Type-Options` header was not set to 'nosniff'. | Add `header set X-Content-Type-Options nosniff` to the server config. |

## 6. RESULTS
The automated scan successfully identified several **Low** and **Medium** risk vulnerabilities related to server configuration. The exercise demonstrated how automated tools can quickly find surface-level security gaps that must be patched to prevent initial reconnaissance by attackers.
