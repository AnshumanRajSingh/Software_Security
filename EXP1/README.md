# Experiment 01: Analysis of Source Code Security Flaws

## Objective
To identify common security vulnerabilities in source code through manual walkthroughs and static analysis, focusing on memory safety and credential management.

## Tools Used
* **Cppcheck / Flawfinder:** For automated static C/C++ analysis.
* **Manual Code Review:** To detect logic-based security flaws.

## Methodology
1. **Static Scanning:** Ran automated tools on sample C snippets to flag unsafe functions like `gets()` and `strcpy()`.
2. **Manual Audit:** Inspected Python scripts to find hardcoded API keys and database credentials.
3. **Logic Check:** Analyzed input handling paths to see if bounds checking is bypassed.

## Results
* **Identified Flaws:** Detected a Buffer Overflow vulnerability in a login function due to unchecked array indexing.
* **Remediation:** Recommended migrating to `strncpy()` and using environment variables for sensitive tokens.
