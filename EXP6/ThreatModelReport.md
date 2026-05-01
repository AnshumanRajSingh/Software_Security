# Experiment 06: Threat Modeling for Web Applications

## 1. AIM
To design and analyze a threat model for a web application (Online Bookstore) to identify potential attack vectors and surfaces using the STRIDE framework.

## 2. SHORT THEORY
* **Threat Modeling:** A proactive security exercise to identify, communicate, and understand threats and mitigations within the context of protecting something of value.
* **STRIDE Framework:** A model developed by Microsoft for identifying security threats across six categories: **S**poofing, **T**ampering, **R**epudiation, **I**nformation Disclosure, **D**enial of Service, and **E**levation of Privilege.
* **Data Flow Diagram (DFD):** A visual representation of how data moves through a system, identifying trust boundaries where security controls are required.

## 3. TOOLS & TECH
* **STRIDE Methodology:** For threat classification.
* **Draw.io / Microsoft Threat Modeling Tool:** For system architecture visualization.
* **Browser:** To analyze web entry points.

## 4. METHODOLOGY
1. **Identify Assets:** Defined key assets like User Personal Info, Payment Credentials, and Inventory Database.
2. **Decompose the Application:** Mapped the data flow from the User Browser to the Web Server and the Backend Database.
3. **Apply STRIDE:** Analyzed each data flow and process against the six STRIDE categories.
4. **Identify Mitigations:** Documented security controls for each identified threat.

## 5. THREAT MODEL ANALYSIS (STRIDE TABLE)

| Category | Threat Description | Component | Mitigation Strategy |
| :--- | :--- | :--- | :--- |
| **Spoofing** | Attacker steals a session cookie to log in as a victim. | Authentication | Use `HttpOnly` and `Secure` cookie flags. |
| **Tampering** | Attacker modifies the price of a book in the API request. | Shopping Cart | Validate all prices on the server-side, not the client. |
| **Repudiation** | A user denies making a purchase due to lack of audit logs. | Transactions | Implement cryptographically signed activity logs. |
| **Info Disclosure** | Error messages reveal database schema details. | Web Server | Implement generic error pages and disable debugging. |
| **Denial of Service** | Attacker floods the login page with automated requests. | Login Portal | Implement Rate Limiting and CAPTCHA. |
| **Privilege Elevation** | User changes their 'Role' from 'Customer' to 'Admin'. | Profile Management | Use Role-Based Access Control (RBAC) and verify tokens. |

## 6. RESULTS
By applying the STRIDE model, we identified that **Input Validation** and **Broken Access Control** are the most critical risks. Implementing server-side checks and secure cookie management will mitigate the most severe identified threats.
