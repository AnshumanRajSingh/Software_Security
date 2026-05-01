# Experiment 09: Inspection of Browser Artifacts & Privacy Risks

## 1. AIM
To explore and analyze browser-stored data (history, cookies, and cache) to understand user tracking mechanisms and evaluate potential privacy and security risks.

## 2. SHORT THEORY
* **Browser Artifacts:** Data generated and stored by web browsers on the local disk during user activity, such as visited URLs, search queries, and downloaded files.
* **Tracking Cookies:** Small text files used by websites to remember user sessions or track behavior across different sites, which can lead to session hijacking if stolen.
* **Local Privacy Risk:** The danger of sensitive personal information (banking URLs, private searches) being accessible to anyone with physical or remote access to the local user profile.

## 3. TOOLS & TECH
* **NirSoft BrowserHistoryView:** For aggregating and filtering history from multiple browsers (Chrome, Firefox, Edge).
* **SQLite Database Browser:** To manually inspect the `Cookies` and `Web Data` SQL databases.
* **Browser Developer Tools (F12):** For real-time inspection of session storage and cookies.

## 4. METHODOLOGY
1. **Data Localization:** Navigated to the browser's local storage path (e.g., `%LocalAppData%\Google\Chrome\User Data\Default`).
2. **Artifact Extraction:** Used NirSoft utilities to load the `History` and `Cache` files into a readable chronological format.
3. **Cookie Audit:** Inspected the `Cookies` SQLite database to identify persistent tokens and checked for security flags like `Secure` and `HttpOnly`.
4. **Analysis:** Reconstructed a timeline of user activity to demonstrate how much sensitive information is left behind in a standard browsing session.

## 5. ARTIFACT INSPECTION SUMMARY

| Artifact Type | Information Recovered | Privacy Risk | Mitigation |
| :--- | :--- | :--- | :--- |
| **Browsing History** | List of visited URLs, timestamps, and visit counts. | Reveals user habits, interests, and potentially sensitive health/finance sites. | Clear history regularly or use Private/Incognito mode. |
| **Session Cookies** | Active session IDs for logged-in accounts. | High risk of Session Hijacking (Pass-the-Cookie attacks). | Use `HttpOnly` flags and enforce short session timeouts. |
| **Browser Cache** | Images, scripts, and page fragments from visited sites. | Can reveal content viewed by the user even if the site is now offline. | Enable "Clear cache on browser close" in settings. |
| **Auto-fill Data** | Saved usernames and email addresses. | Leads to easier credential harvesting by malicious software. | Disable "Auto-fill" for sensitive forms and use a Password Manager. |

## 6. RESULTS
The inspection revealed that a significant amount of personal data is stored locally in unencrypted or easily accessible formats. This highlights the importance of browser hardening, regular data clearing, and the risks associated with using shared or public workstations for sensitive tasks.
