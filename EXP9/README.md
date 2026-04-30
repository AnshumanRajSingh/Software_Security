# Experiment 09: Inspection of Browser Artifacts & Privacy Risks

## Objective
To explore browser-stored data (history, cookies, cache) to evaluate privacy risks and session persistence.

## Tools Used
* **NirSoft BrowserHistoryView:** For cross-browser history aggregation.
* **SQLite Database Browser:** To inspect `Cookies` and `Web Data` files.

## Methodology
1. **Path Identification:** Located Chrome/Firefox profile directories in `AppData`.
2. **Cookie Analysis:** Queried the SQLite database to find persistent session tokens.
3. **History Recovery:** Reconstructed a user’s web activity to find sensitive URL parameters.

## Results
* **Privacy Impact:** Found that session cookies remained valid even after the browser was closed, posing a risk on shared machines.
