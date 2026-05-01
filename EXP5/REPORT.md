# Experiment 05: Network Traffic Capture & Inspection

## 1. AIM
To intercept, capture, and analyze network traffic using packet sniffing tools to identify security risks associated with unencrypted transmissions and sensitive data exposure.

## 2. SHORT THEORY
* **Packet Sniffing:** The process of capturing and recording data packets as they travel across a network interface.
* **Plaintext Vulnerability:** Protocols like HTTP, FTP, and Telnet transmit data without encryption. This allows anyone on the same network to read sensitive information using a sniffer.
* **TCP Stream Reconstruction:** The method of reassembling individual network packets into their original, human-readable format to analyze the conversation between a client and a server.

## 3. TOOLS & TECH
* **Wireshark:** A graphical network protocol analyzer for deep packet inspection.
* **tcpdump:** A command-line packet analyzer for capturing traffic.
* **HTTP Protocol:** The target protocol used to demonstrate insecure data transmission.

## 4. METHODOLOGY
1. **Interface Selection:** Selected the active network interface (Ethernet/Wi-Fi) in Wireshark to begin data capture.
2. **Traffic Filtering:** Applied a display filter (`http`) to isolate web traffic and reduce noise from other background protocols.
3. **Login Simulation:** Performed a login attempt on an unencrypted test website to generate traffic containing credentials.
4. **Data Extraction:** Identified the "HTTP POST" request, right-clicked on the packet, and selected **"Follow -> TCP Stream"** to view the full communication.
5. **Header Analysis:** Inspected the response headers to check for security flags like `HSTS`, `Secure`, and `HttpOnly`.

## 5. TRAFFIC INSPECTION SUMMARY

| Artifact | Data Recovered | Security Impact | Mitigation Strategy |
| :--- | :--- | :--- | :--- |
| **Request Method** | `POST` | Standard method for sending credentials. | Use HTTPS to encrypt the request body. |
| **Login Credentials** | `username=admin&password=password123` | High: Credentials visible in plaintext. | Enforce TLS/SSL (HTTPS) for all login pages. |
| **User-Agent** | Browser and OS version details. | Reconnaissance: Attacker can identify target OS vulnerabilities. | Limit information disclosure in headers. |
| **Cookie Header** | `SessionID=XYZ789` | Risk of session hijacking if intercepted. | Use `Secure` and `HttpOnly` cookie flags. |

## 6. RESULTS
The experiment successfully demonstrated the critical dangers of using unencrypted protocols. By capturing network traffic, we were able to extract a username and password in cleartext from the HTTP stream. This confirms that without **SSL/TLS (HTTPS)**, any sensitive information transmitted over the network is vulnerable to interception and theft.
