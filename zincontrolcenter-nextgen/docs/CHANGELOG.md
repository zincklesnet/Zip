# Changelog

## 4.1.4 - Core Governance, Admin Escape, and Workforce Email Integration
- Fixed the Main WordPress Admin redirect loop with a capability-controlled, nonce-protected escape URL.
- Integrated Employment Email into HR Command.
- Integrated Batch Email into Operations Command.
- Integrated My Work Email into My Profile and Staff Hub.
- Preserved legacy email-page URLs as compatibility redirects to the integrated workspace sections.
- Removed the canceled Signature Icon Factory menu, form, save action, SVG allowlist, storage access, and CSS.
- Added a repeat-safe migration that backs up canceled factory drafts before removing the active option.
- Preserved the protected built-in SVG registry.
- Removed obsolete direct widget dimension storage and modal-size restoration.
- Preserved all workforce records, email metadata, audit history, lifecycle history, themes, and role boundaries.

## 4.1.3 - Integrated Core Controls and Viewport Repair
- Merged command and workforce controls into core.
- Removed direct resizing and repaired viewport overflow and exposed white space.
- Introduced an experimental Signature Icon Factory foundation. This component was withdrawn and removed in 4.1.4.
