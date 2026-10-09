# ZinControlCenter NextGen Roadmap

## Product direction

ZinControlCenter NextGen is being developed as an expandable workforce operating system for WordPress Multisite. The release policy is to preserve the accepted foundation and add one focused system at a time.

## Release status

- **Current packaged build:** 4.1.2
- **Current phase:** Smart Forms and workforce records intake
- **Development rule:** Expand the existing plugin. Do not scaffold or replace the accepted foundation.
- **Design rule:** Preserve the existing dashboard design and CSS wherever possible. Only make necessary style changes.

---

## Completed since RC1

### RC1 Foundation

RC1 established the base product architecture:

- Network Command Nexus
- Staff Hub
- Personal Profile Command Center
- Support Command Center
- HR Command Center
- Multisite-safe installer
- Role and capability engine
- Immersive admin mode with a super-admin exception
- Native drag-and-drop widget layouts
- Six theme choices
- Signature SVG icon registry
- REST layout and theme endpoints
- Legacy data adapters with table-existence guards

### 3.0.0 Stable Foundation

- Promoted the accepted RC2.4 recovery build to stable
- Preserved all five original dashboards
- Preserved clock-in and clock-out
- Preserved role redirects
- Preserved themes and immersive mode
- Preserved widget persistence
- Removed release-candidate labels from the interface

### 3.1.0 Strategic Operations

- Added audit logging for login, clock, theme, layout, and availability actions
- Added Network Command recent activity
- Added shift totals
- Added workforce availability states

### 3.1.1 Workforce Experience

- Added bright neon animated presence beacons
- Added state colors for Available, Busy, In Meeting, On Break, and Offline
- Added a separate glowing shift LED
- Kept clock state separate from availability state
- Added reduced-motion support

### 3.2.0 Communications Command

- Added Operations Command
- Added Operations Manager and Operations Officer roles
- Added global neon operations ticker
- Added broadcast creation, publishing, archiving, and audit events
- Added Staff Hub workforce inbox
- Added communications database tables
- Added communications REST retrieval endpoints
- Added candidate-safe Staff Hub access without clock controls

### 3.2.1 Communications Certification

- Added Mark Read controls
- Added communication acknowledgement controls
- Added communication archive controls
- Added inbox archive filtering
- Added ticker Show and Hide controls
- Added communication audit events
- Certified access boundaries for Network leadership, Operations, staff, and candidates

### 3.3.0 Candidate Management

- Added temporary Candidate account creation for HR and Network leadership
- Added candidate application references
- Added application status and progress tracking
- Added position-applied-for details
- Added personal and contact-information foundation
- Added resume or portfolio URL foundation
- Added HR Submissions & Status queue
- Added invited, started, submitted, reviewing, interview, offer, hired, declined, suspended, talent-pool, and archived states
- Added same-account Candidate-to-Staff conversion
- Preserved Candidate access to Staff Hub communications
- Kept clock and workforce controls hidden from Candidate accounts

### 3.3.1 Candidate Invitations and Layout Editing

- Added secure Candidate invitation emails
- Added editable invitation subject and message template
- Added one-time password-setup and login links
- Added Reply-To and optional HR-copy controls
- Added invitation resend controls
- Added invitation delivery status and audit events
- Extended workspace-specific drag-and-drop to Network, Operations, Staff Hub, My Profile, Support, and HR
- Added per-user and per-workspace layout persistence
- Added minimal theme-colored menu and widget icon glows
- Added pulsating edit-layout outlines
- Added darker contrasting outlines for light themes
- Preserved the existing design, spacing, typography, cards, and navigation

---

## Current command structure

- Network Command
- Operations Command
- HR Command
- Support Command
- My Profile
- Staff Hub

## Current role structure

- Network Administrator / Network Manager
- Network Supervisor
- Operations Manager
- Operations Officer
- HR Manager
- HR Coordinator
- Department Manager
- Supervisor
- Support Lead
- Support Agent
- Staff Member
- Candidate

---

## Planned releases

### 3.3.2 Candidate Experience Certification

Completed hotfix and certification work:

- Corrected Candidate invitation template method visibility used by HR Command
- Prevented the HR Command fatal error when rendering invitation settings
- Preserved the 3.3.1 design, styles, layout behavior, and invitation workflow

Remaining certification focus:

- Candidate invitation delivery testing and mail-provider compatibility
- Candidate account creation validation
- Candidate status-transition validation
- Candidate-to-Staff conversion validation
- Layout drag-and-drop regression testing across all workspaces
- Accessibility and reduced-motion verification
- Release hardening only, with no major new subsystem

### 3.4.0 Smart Forms Engine

Completed:

- Reusable published and draft form templates
- Text, email, telephone, number, date, select, checkbox, textarea, and URL fields
- Required, optional, read-only, and editable field metadata
- Country, position, department, employment-type, and role condition metadata
- Candidate and employee form assignments
- Staff Hub form completion
- HR review, approval, rejection, and revision-request states
- Communications notifications and audit events

Future refinement focus:

- HR-controlled field visibility
- Show and Hide toggles
- Required and Optional toggles
- Read-only and editable controls
- Role-aware, position-aware, department-aware, and country-aware fields
- Reusable form templates
- Conditional field logic


### 3.4.1 Candidate Mail Diagnostics

- Added WordPress mail failure capture
- Added sender-name and sender-email controls
- Added stored error details and audit events
- Clarified Processed versus delivered email state
- Preserved existing design and styles


### 3.4.2 Email Status Glow

- Added glowing Candidate email-status badges
- Added Processed, Failed, Not Sent, and Pending colors
- Added pulsing status beacon and reduced-motion support
- Added darker contrast for light themes
- Preserved all existing dashboard design

### 3.5.0 Workforce Records Vault ✅ Completed

Planned focus:

- Candidate and employee documents
- Contracts, resumes, certificates, policies, and acknowledgements
- Version history
- Approval history
- Digital-signature foundation


### 3.5.1 Installer Parse Correction

- Corrected Records Vault installer SQL statement boundaries
- Removed the `class-installer.php` parse error
- Preserved all 3.5.0 features and styling

### 3.6.0 Archive Directory ✅ Completed

Planned focus:

- Archived Candidates
- Talent Pool
- Former Employees
- Retired and Alumni states
- Suspended and Hold states
- Recovery and reactivation
- Retention foundations

### 3.7.0 Security Operations ✅ Completed

Planned focus:

- Scam and fraud awareness feed
- Security alerts
- Threat and awareness notices
- Security incident reporting
- Pulsating severity beacons using the existing theme system


### 3.7.1 Shared Widget Controls

- Added width-toggle and collapse buttons across all workspaces
- Reused the existing Network widget button design
- Preserved drag-and-drop and theme styling

### 3.8.0 Workforce Academy ✅ Completed

Planned focus:

- Required training
- Optional learning
- Learning paths
- Certification tracking
- Due, expiring, and expired states

### 3.9.0 Knowledge Center ✅ Completed

Planned focus:

- Policies
- Procedures
- Guides
- Videos
- Frequently asked questions
- Best practices and workforce knowledge retention

### 4.0.0 Workforce Lifecycle OS ✅ Completed

### 4.0.1 Lifecycle Parse Correction ✅ Completed

- Corrected the duplicated `WP_User` namespace separator
- Preserved all lifecycle features and shared widget controls

Planned focus:

- One continuous identity from Candidate to Employee and beyond
- Unified lifecycle timeline
- Unified inbox
- Unified records history
- Unified archive history

---


### 4.0.2 Widget Focus and Organization ✅ Completed

- Added resizable widget focus windows
- Added Compact, Normal, and Wide widget sizing
- Added per-workspace size and collapse persistence
- Preserved existing widget styling and controls


### 4.0.3 Dashboard Organization ✅ Completed

- Added per-workspace widget pinning
- Added Pinned, Active Workspace, and Reference sections
- Added per-widget modal size persistence
- Preserved all existing dashboard controls and styling


### 4.0.4 Widget Sizing Repair ✅ Completed

- Repaired sizing inside dashboard sections
- Added visible S, M, and L size states
- Preserved pinning, sections, and modal memory

## Long-term roadmap

- **4.1.0:** Workforce Communications Suite and employment email provisioning
- **4.2.0:** Recognition Center
- **4.3.0:** Innovation Center
- **4.4.0:** Executive Intelligence
- **4.5.0:** Multi-Site Operations
- **4.6.0:** Compliance Command
- **4.7.0:** Workflow Automation
- **5.0.0:** Enterprise Governance OS

---

## Build and packaging rules

Every future installable ZIP must include this `ROADMAP.md` at the plugin root and update:

1. Current packaged build
2. Completed release history
3. Current release status
4. Next planned release
5. Any roadmap scope changes approved during development

Every release should also update:

- `readme.txt`
- `docs/CHANGELOG.md`
- `release-manifest.json`
- Release-specific documentation under `docs/`
- SHA-256 checksum

## Release principle

**Expand, do not rewrite.** Preserve the existing ZinControlCenter architecture and visual design unless a functional or accessibility requirement makes a change necessary.


#### 4.1.2 Unified Command Center Experience ✅ Completed
- Rebuilt Command Center presentation around dashboard summaries, quick actions, work queues, supporting information, responsive pages, and detailed My Profile navigation while preserving existing systems and themes.
