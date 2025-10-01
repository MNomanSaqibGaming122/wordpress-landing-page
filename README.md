# WordPress Landing Page Assignment

---

## Project Overview

This repository contains the complete, pixel-perfect implementation of a modern marketing landing page built using a WordPress Child Theme based on the provided Figma design specifications.

The primary development goal was to demonstrate proficiency in CSS implementation, complex responsive design, modular file management within a WordPress environment, and professional Git workflow.

## Technical Stack

* **Platform:** WordPress (Latest Version)
* **Theme:** Child Theme of Twenty Twenty-Four (for minimal footprint)
* **Styling:** Modular CSS architecture, utilizing CSS Variables for design tokens (colors, typography).
* **Interactivity:** Pure CSS transitions and a JavaScript snippet for tabbed navigation logic.
* **Versioning:** Git (Clear commit history reflecting logical development steps).
* **Typography:** Roboto (loaded via Google Fonts).

## Design & Feature Highlights

The following complex design elements were implemented:

* **Pixel-Perfect Layout:** All sections adhere to the specified typography, spacing, and horizontal alignment from the original design.
* **Custom UI Components:** Reusable Mac-style browser window frame implemented purely with HTML/CSS.
* **Complex Image Collage:** Image layering achieved using relative/absolute positioning, which scales down proportionally on mobile devices.
* **Horizontal Tab Navigation:** Custom-styled tab component with JavaScript logic to switch content instantly.
* **Gradient Banner:** The "Join the community today" section features a precise Blue-to-Purple CSS gradient background.
* **Animations:** Smooth CSS transitions and lift animations applied to all primary buttons and links.

## Installation and Setup

To run and verify this project locally:

1.  **Environment:** Ensure you have a running WordPress installation (e.g., via XAMPP/LocalWP).
2.  **Clone Repository:** Clone this repository directly into your `wp-content/themes/` directory.
3.  **Activate Theme:** In the WordPress dashboard, go to **Appearance > Themes** and activate the **Magnifico Landing** Child Theme.
4.  **Set Homepage:** Create a new page, paste the entire HTML structure established in the development process, and set this page as your static homepage under **Settings > Reading**.
5.  **View:** Perform a hard refresh (`Ctrl + Shift + R` or `Cmd + Shift + R`) to load all modular CSS files.

## Deliverables and Compliance

This repository serves as one of the required deliverables. The project is confirmed to meet all functional and compliance criteria:

| Requirement | Status | Verification |
| :--- | :--- | :--- |
| **Functioning Landing Page** | Complete | Visible upon activating the theme and loading the page content. |
| **Clear Git Repository** | Complete | Detailed, chronological commit history available in this log. |
| **Pixel-Perfect Implementation** | Complete | Demonstrated via comparison in the video recording. |
| **CSS Animations/Interactions** | Complete | Demonstrated in the video recording (Button hovers, link transitions). |
| **Mobile Responsiveness** | Complete | Full implementation of media queries to ensure proper stacking and scaling on screens $\le 768 \text{px}$. |

