# Experiment 10: Log-Based Incident Response Simulation

## Objective
To analyze system and application logs to identify suspicious activity and draft a professional incident response report.

## Methodology
1. **Log Collection:** Imported Apache access logs and Windows Event logs into a spreadsheet.
2. **Pattern Matching:** Filtered for repeated `401 Unauthorized` responses and rapid `POST` requests to `/login`.
3. **Anomaly Detection:** Identified a spike in traffic from a single foreign IP address outside business hours.

## Results
* **Incident Identified:** Confirmed a **Brute Force Attack** on the admin panel.
* **Response:** Drafted a report recommending IP blacklisting and implementation of Multi-Factor Authentication (MFA).
