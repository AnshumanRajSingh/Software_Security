# Experiment 05: Network Traffic Capture & Header Analysis

## Objective
To intercept and analyze network traffic to understand how sensitive information is exposed during plaintext transmissions.

## Tools Used
* **Wireshark:** For packet capture and deep inspection.
* **tcpdump:** For command-line traffic monitoring.

## Methodology
1. **Packet Capture:** Monitored traffic during a login attempt on an unencrypted HTTP site.
2. **Stream Reconstruction:** Reconstructed the TCP stream to extract POST parameters.
3. **Header Audit:** Inspected HTTP response headers for security flags (e.g., `X-Frame-Options`, `HSTS`).

## Results
* **Evidence:** Captured cleartext credentials over the wire.
* **Analysis:** Identified that the lack of the `Secure` flag on cookies allowed for potential MITM attacks.
