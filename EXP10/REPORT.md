# Experiment 10: Log-Based Incident Response Simulation

## 1. AIM
To analyze system and application access logs to identify suspicious security events (e.g., Brute Force attacks) and draft a formal incident response report.

## 2. SHORT THEORY
* **Incident Response (IR):** An organized approach to addressing and managing the aftermath of a security breach or cyberattack.
* **Log Analysis:** The process of reviewing, interpreting, and understanding computer-generated records (logs) to detect anomalies or malicious activity.
* **Brute Force Attack:** A trial-and-error method used by attackers to guess login credentials, typically identified by a high volume of failed login attempts in a short duration.

## 3. TOOLS & TECH
* **Apache/Nginx Access Logs:** To monitor web traffic and authentication attempts.
* **Spreadsheet Software (Excel/Google Sheets):** For sorting, filtering, and visualizing log data.
* **Log Parser / Text Editor:** To search for specific patterns like "401 Unauthorized" or "POST /login".

## 4. METHODOLOGY
1. **Data Collection:** Imported a sample web server access log file containing timestamps, source IP addresses, and HTTP status codes.
2. **Anomaly Detection:** Filtered the logs for HTTP 401 (Unauthorized) status codes to identify failed authentication attempts.
3. **Pattern Matching:** Identified a specific IP address that attempted to log in 200+ times within a 5-minute window.
4. **Impact Assessment:** Checked for a subsequent HTTP 200 (OK) code from the same IP to determine if the attack was successful.
5. **Documentation:** Drafted an Incident Narrative based on the timeline of events discovered.

## 5. INCIDENT INVESTIGATION SUMMARY

| Event Detail | Information | Significance |
| :--- | :--- | :--- |
| **Attack Type** | Brute Force Attack | High volume of failed login attempts. |
| **Source IP** | 192.168.1.45 | The origin of the malicious requests. |
| **Target URL** | `/wp-login.php` or `/admin/login` | The specific entry point being targeted. |
| **Attack Timeline** | 14:05:22 - 14:10:45 UTC | Duration of the active probing. |
| **Outcome** | Blocked / Prevented | No successful login (HTTP 200) was detected. |

## 6. RESULTS
The simulation successfully demonstrated how log files serve as critical evidence during a security incident. By correlating timestamps and source IPs, we identified an automated brute-force attempt. The final report recommends implementing **Account Lockout Policies** and **IP-based Rate Limiting** to mitigate future risks.
