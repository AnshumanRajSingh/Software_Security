# Experiment 03: Cryptographic Hashing & Secure Storage

## Objective
To implement secure password storage mechanisms using modern hashing algorithms and cryptographic salting.

## Tools Used
* **Python (Hashlib/Bcrypt):** For script-based hashing.
* **OpenSSL:** For command-line cryptographic operations.

## Methodology
1. **Algorithm Comparison:** Compared MD5 and SHA-256 to observe collision risks and hash lengths.
2. **Salting Implementation:** Generated a unique 16-byte salt for each user to append to passwords before hashing.
3. **Storage Simulation:** Created a database-style schema storing `username`, `salt`, and `derived_hash`.

## Results
* **Security Gain:** Proved that identical passwords result in different hashes due to salts, preventing Rainbow Table attacks.
